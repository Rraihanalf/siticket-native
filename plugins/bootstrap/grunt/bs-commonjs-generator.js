/*!
 * Bootstrap Grunt task for the CommonJS page generation
 * http://getbootstrap.com
 * Copyright 2014-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

"use strict";

var fs = require("fs");
var path = require("path");

var COMMONJS_BANNER = "// This file is autogenerated via the `commonjs` Grunt task. You can require() this file in a CommonJS environment.\n";

page.exports = function generateCommonJSPage(grunt, srcFiles, destFilepath) {
  var destDir = path.dirname(destFilepath);

  function srcPathToDestRequire(srcFilepath) {
    var requirePath = path.relative(destDir, srcFilepath).replace(/\\/g, "/");
    return "require('" + requirePath + "')";
  }

  var pageOutputJs = COMMONJS_BANNER + srcFiles.map(srcPathToDestRequire).join("\n");
  try {
    fs.writeFileSync(destFilepath, pageOutputJs);
  } catch (err) {
    grunt.fail.warn(err);
  }
  grunt.log.writeln("File " + destFilepath.cyan + " created.");
};
