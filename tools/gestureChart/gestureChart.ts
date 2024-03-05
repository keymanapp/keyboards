import * as fs from 'fs';
import * as path from 'path';
import { CommanderError, program } from 'commander';

type formFactorType = "tablet" | "phone";

////////////////////////////////////////////////////////////////////
// Get parameters
////////////////////////////////////////////////////////////////////
program
  .description("Tool to document gestures in a touch layout as Markdown tables.\n" +
    "Gestures can be: longpress, flicks, multitap")
    .option("-k, --keyboard <full path to keyboard directory>", "path to a keyboard directory")
    .exitOverride();
try {
  program.parse();
} catch (error: unknown) {
  if (error instanceof CommanderError) {
    console.error(error.message);
  }
  process.exit(1);
}

// Debugging parameters
const options = program.opts();
const debugMode = true;
if (debugMode) {
  console.log('Parameters:');
  if (options.keyboard) {
    console.log(`Keyboard path: "${options.keyboard}"`);
  }
  console.log('\n');
}

// Keyboard path required
if (!options.keyboard) {
  console.error("Keyboard path required");
  process.exit(1);
}
if (!fs.existsSync(options.keyboard) || !fs.statSync(options.keyboard).isDirectory()) {
  console.error(`${options.keyboard} is not a directory`);
  process.exit(1);
}

processKeyboard(options.keyboard);

function stripBom(s: string): string {
  if (s.startsWith('\uFEFF')) return s.substr(1);
  return s;
}

function keyboardTouchLayoutFilename(dir: string, name: string) {
  return dir + path.sep + name + '.keyman-touch-layout';
}

function keyboardTouchChartFilename(name: string, formFactor: string) : string {
  return `${name}-${formFactor}.md`;
}

function loadKeyboardTouchLayout(dir: string, name: string) {
  return JSON.parse(stripBom(fs.readFileSync(keyboardTouchLayoutFilename(dir, name), 'utf8')));
}

function processKeyboard(dir: string) {
  let name = path.basename(dir);
  console.log(`Keyboard ${name}`);

  let touch_layout = loadKeyboardTouchLayout(`${dir}${path.sep}source${path.sep}`, name);
  let phone = touch_layout.phone;
  let tablet = touch_layout.tablet;
  let formFactor: formFactorType = 'tablet';
  let layer;
  if (tablet) {
    layer = tablet.layer
  } else {
    layer = phone.layer;
    formFactor = 'phone';
  }
  // Filter for keys that have gestures
  let filteredKeys = layer.filter(
    l => l.row.some(r => r.key.some(k =>
      k.sk || k.flick || k.multitap)));
  if (filteredKeys && filteredKeys.length > 0) {
    let gestureTable = `## ${name} Gesture Table\n`;
    gestureTable += generateTable(formFactor, filteredKeys);

    // Write Gesture Table to file
    if (gestureTable) {
      let filename = keyboardTouchChartFilename(name, formFactor);
      fs.writeFileSync(filename, gestureTable, 'utf8');
      console.log(`Gesture table written to ${filename}`);
    }
  } else {
    console.log(`No gestures exist for ${name}`);
  }
}

/**
 * Create Markdown table
 * @param formFactor phone or tablet
 * @param filteredKeys Filtered touch layout object containing all the gestures
 * @returns Markdown table as string
 */
function generateTable(formFactor: formFactorType, filteredKeys) : string {
  let table = `### ${formFactor} Layout\n`;
  for (let l in filteredKeys) {
    let layer = filteredKeys[l];
    let layerID = layer.id;
    table += `#### ${layerID} Layer\n`;
    for (let r in layer.row) {
      let row = layer.row[r];
      table += `##### Row ${row.id}\n`;
      table += newTableHeader();
      for (let k in row.key) {
        // Print a new row
        table += ` | `;

        // Base Key
        let key = row.key[k];
        table += ` ${getTextFromKey(key)} `;
        table += ` | `;

        // Longpress
        if (key.sk) {
          for (let s in key.sk) {
            let sk = key.sk[s];
            table += ` ${getTextFromKey(sk)} `
          }
        }
        table += ` | `;

        // Flick
        if (key.flick) {
          for(let f in key.flick) {
            let flick = key.flick[f];
            table += ` '${f}': ${getTextFromKey(flick)} <br/>`;
          }
        }
        table += ` | `;

        // Multitap
        if (key.multitap) {
          for(let m in key.multitap) {
            let multitap = key.multitap[m];
            // Multitap is 0-indexed
            table += ` ${parseInt(m)+1}x: ${getTextFromKey(multitap)} <br/> `;
          }
        }
        table += ` |\n`;
      }
    }
  }

  return table;
}

function newTableHeader(): string {
  return `|Base Key | Longpress | Flick | Multipress |\n` +
         `|---------|-----------|-------|------------|\n`;
}

/**
 * Determine the text for a key based on its "text", otherwise "id"
 * Extra formatting for special Markdown characters
 * @param key
 * @returns string
 */
function getTextFromKey(key) : string {
  let text = "";
  if (key.text) {
    if (key.text.startsWith('|')) {
      // Handle vertical line character
      text += key.text.replaceAll('|', '&#124;');
    } else if (key.text.startsWith('_') || key.text.startsWith('*')) {
      // Handle other special Markdown characters
      text += ` \`${key.text}\` `;
    } else {
      text += ` ${key.text} `;
    }
  } else if (key.id) {
    text += ` ${getTextFromID(key.id)} `;
  }

  return text;
}

/**
 * Parse the key ID to determine the text (keycap)
 * @param id
 * @returns string
 */
function getTextFromID(id: string) : string {
  let text = "", codes;
  if (id.startsWith("U_")) {
    // Parse U_XXXX or U_XXXX_YYYY
    codes = id.substring(2).split('_');
    for(let c in codes) {
      text += `&#x${codes[c]};`;
    }
  } else if (id.startsWith("K_")) {
    // Parse K_ID
    text = id.substring(2);
  } else {
    text = `[${id}]`;
    console.warn(`id ${id} doesn't start with U_`);
  }
  return text;
}
