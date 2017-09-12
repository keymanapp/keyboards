//
//extract_keyboard_info_properties.js

try {
  var fs = require('fs');

  var keyboard_info_file = process.argv[2];

  var obj = JSON.parse(fs.readFileSync(keyboard_info_file, 'utf8'));

  //console.log(obj);
  dump('packageFilename');
  dump('jsFilename');
  dump('documentationFilename');

  function dump(v) {
    if(obj[v]) {
      console.log('local keyboard_info_'+v+'='+obj[v]);
    }
  }
} catch(e) {
  console.error(e);
  process.exit(1);
}

process.exit(0);