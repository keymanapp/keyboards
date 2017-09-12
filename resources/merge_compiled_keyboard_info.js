/*
  merge_compiled_keyboard_info.js

  Merges a source .keyboard_info file with data programatically extracted from a .kmp file and a keyboard .js file
  
  - Command line parameters:
     node merge_compiled_keyboard_info.js <keyboard.keyboard_info> <keyboard.kmp> <keyboard.js>
  
  Note: if keyboard.kmp or keyboard.js do not exist, merge_compiled_keyboard_info will continue to work, just will
        not attempt to pull data from them
  
  #
  # There are a number of fields we can fill in programatically.
  #
  
  # id -- from .keyboard_info name
  # name -- from kmp.inf, js
  # authorName -- from kmp.inf
  # authorEmail -- from kmp.inf
  # lastModifiedDate -- build time: this only gets refreshed when the version num increments so it's close enough then
  # packageFilename -- from $keyboard_info_packageFilename
  # jsFilename -- from $keyboard_info_jsFilename
  # encodings -- from .kmx (existence of .js implies unicode)
  # packageIncludes -- from kmp.inf?
  # version -- from kmp.inf, js
  # minKeymanDesktopVersion -- from kmp.inf, kmx
  # platformSupport -- deduce from whether kmp exists, js exists
*/
try {
  var fs = require('fs');
  var path = require('path');

  var keyboardInfoFile = process.argv[2];
  var kmpFile = process.argv[3];
  var jsFile = process.argv[4];
  
  if(fs.existsSync(kmpFile)) {
    // Read the .kmp file, look for kmp.inf
    
  } else {
    kmpFile = null;
  }
  
  if(fs.existsSync(jsFile)) {
    // Read the .js file into memory
  } else {
    jsFile = null;
  }
  
  var obj = JSON.parse(fs.readFileSync(keyboardInfoFile, 'utf8'));

  //
  // id -- from .keyboard_info name
  //
  if(!obj.hasOwnProperty('id')) {
    obj.id = path.parse(keyboardInfoFile).name;
  }
  
  //
  // name -- from kmp.inf, js
  //
  if(!obj.hasOwnProperty('name')) {
    //TODO
  }
  
  //
  //  authorName -- from kmp.inf
  //
  if(!obj.hasOwnProperty('authorName')) {
    //TODO
  }

  //
  //  authorEmail -- from kmp.inf
  //
  if(!obj.hasOwnProperty('authorEmail')) {
    //TODO
  }

  //
  //  lastModifiedDate -- build time? Is this
  //  good enough, and if not, how can we solve this?
  //
  if(!obj.hasOwnProperty('lastModifiedDate')) {
    obj.lastModifiedDate = (new Date).toJSON();
  }

  //
  //  packageFilename -- from $keyboard_info_packageFilename
  //
  if(!obj.hasOwnProperty('packageFilename')) {
    if(kmpFile) {
      obj.packageFilename = path.parse(kmpFile).base;
    }
  }

  //
  //  jsFilename -- from $keyboard_info_jsFilename
  //
  if(!obj.hasOwnProperty('jsFilename')) {
    if(jsFile) {
      obj.jsFilename = path.parse(jsFile).base;
    }
  }

  //
  //  encodings -- from .kmx (existence of .js implies unicode)
  //
  if(!obj.hasOwnProperty('encodings')) {
    obj.encodings = [];
    if(jsFile) {
      obj.encodings.push('unicode');
    }
    //TODO
  }

  //
  //  packageIncludes -- from kmp.inf?
  //
  if(!obj.hasOwnProperty('packageIncludes')) {
    // TODO
  }

  //
  //  version -- from kmp.inf, js
  //
  if(!obj.hasOwnProperty('version')) {
    //TODO
  }

  //
  //  minKeymanDesktopVersion -- from kmp.inf, kmx
  //
  if(!obj.hasOwnProperty('minKeymanDesktopVersion')) {
    //TODO
  }

  //
  //  platformSupport -- deduce from whether kmp exists, js exists
  //
  if(!obj.hasOwnProperty('platformSupport')) {
    obj.platformSupport = [];
    if(jsFile) {
      obj.platformSupport.push('desktopWeb', 'mobileWeb', 'android', 'ios');
    }
    if(kmpFile) {
      obj.platformSupport.push('windows', 'macos');
    }
  }  
  
  fs.writeFileSync(keyboardInfoFile, JSON.stringify(obj, null, 2), {encoding:'utf8'});  
} catch(e) {
  console.error(e);
  process.exit(1);
}

process.exit(0);