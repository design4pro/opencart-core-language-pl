/**
 *  This file contains the variables used in other gulp files
 *  which defines tasks
 *  By design, we only put there very generic config values
 *  which are used in several places to keep good readability
 *  of the tasks
 */

var gutil = require('gulp-util');
// using data from package.json
var pkg = require('./../package.json');

var PACKAGE_NAME = 'opencart-core-language-pl';

exports.name = PACKAGE_NAME;

/**
 *  The main paths of your project handle these with care
 */
exports.paths = {
  src: 'src',
  build: 'build',
  dist: 'dist'
};

exports.filename = PACKAGE_NAME + '-v' + pkg.version;

/**
 *  Common implementation for an error handler of a Gulp plugin
 */
exports.errorHandler = function (title) {
  'use strict';

  return function (err) {
    gutil.log(gutil.colors.red('[' + title + ']'), err.toString());
    this.emit('end');
  };
};
