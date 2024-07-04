import * as fs from 'fs';

const rootPath = 'c:\\projects\\keyman\\keyboards\\';

function stripBom(s: string): string {
    if(s.startsWith('\uFEFF')) return s.substr(1);
    return s;
}

function keyboardInfoFilename(dir: string, name: string) {
    return dir + '\\' + name + '.keyboard_info';
}

function loadKeyboardInfo(dir: string, name: string) {
    return JSON.parse(stripBom(fs.readFileSync(keyboardInfoFilename(dir, name), 'utf8')));
}

function transformLanguagesToObject(o) {
    let result = {};
    for(let lang in o) {
        result[o[lang]] = {};
    }
    return result;
}

function mapExamples(oki, nki) {
    if(!oki.languages || !nki.languages) return null;

    let found: Boolean = false;

    //console.log(nki.languages);

    if(Array.isArray(nki.languages)) {
        nki.languages = transformLanguagesToObject(nki.languages);
    }
    if(Array.isArray(oki.languages)) {
        oki.languages = transformLanguagesToObject(oki.languages);
    }

    //console.log(nki.languages);

    for(let lang in nki.languages) {
        console.log('Found language '+lang);
        if(nki.languages[lang].example) {
            console.log('Language '+lang+' already has an example.');
            continue;
        }

        let lang0 = lang.replace(/-.+$/, '') ;
        console.log('Looking for '+lang0+' in legacy');
        if(oki.languages[lang0] && oki.languages[lang0].example) {
            nki.languages[lang].example = oki.languages[lang0].example;
            console.log('Found example for '+lang0+', assigning to '+lang0+'!');
            found = true;
        }
    }
    return found ? nki : null;
}

function processKeyboard(dir: string, name: string) {
    console.log(name);
    let keyboard_info = loadKeyboardInfo(dir, name);
    if(keyboard_info.related) {
        for(let related in keyboard_info.related) {
            if(keyboard_info.related[related].deprecates) {
                if(legacy[related]) {
                    console.log('  Found deprecated keyboard at '+related+' at '+legacy[related]);
                    let legacy_keyboard_info = loadKeyboardInfo(legacy[related], related);                    
                    let new_keyboard_info = mapExamples(legacy_keyboard_info, keyboard_info);
                    if(new_keyboard_info) {
                        fs.writeFileSync(keyboardInfoFilename(dir, name), JSON.stringify(new_keyboard_info, null, 2), 'utf8');
                        return true;
                        /*console.log(JSON.stringify(keyboard_info, null, 2));
                        console.log(JSON.stringify(legacy_keyboard_info, null, 2));
                        console.log('--- mapped to ---');
                        console.log(JSON.stringify(new_keyboard_info, null, 2));*/
                        //process.exit(0);
                    }
                }
            }
        }
    }
}

function processRepo(base) {
    let result = {};
    let root = rootPath + base;
    let rdir = fs.opendirSync(root);
    let entry;
    
    while((entry = rdir.readSync()) != null) {
        if(entry.name == '.' || entry.name == '..') continue;
        if(entry.isFile()) continue;
        if(entry.name == 'shared' || entry.name == 'packages') continue;
        
        let edir = fs.opendirSync(root + '\\' + entry.name);
        let kbddir;
        while((kbddir = edir.readSync()) != null) {
            if(kbddir.name == '.' || kbddir.name == '..') continue;
            if(kbddir.isFile()) continue;
            result[kbddir.name] = root + '\\' + entry.name + '\\' + kbddir.name;
        }
    }
    return result;
}

let release = processRepo('release');
let legacy = processRepo('legacy');

//processKeyboard(rootPath + 'release\\basic\\basic_kbdal', 'basic_kbdal');

for(let rk in release) {
    processKeyboard(release[rk], rk);
    //console.log(rk + ": " + release[rk]);
}