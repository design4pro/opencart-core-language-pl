/**
 * Project    OpenCart Core Langauge PL
 * Name       opencart-core-language-pl
 * Modified   09.07.2022, 21:15
 *
 * @category  OpenCart
 * @package   Core
 * @link      https://github.com/design4pro/opencart-core-language-pl
 *
 * @copyright Copyright (c) 2022 DESIGN4PRO OpenCart (https://opencart.design4.pro)
 * @author    DESIGN4PRO OpenCart <opencart@design4.pro>
 * @license   Commercial. All rights reserved.
 *            It is prohibited to copy and distribute in whole or in part.
 *            Licensee has the right to modify the content for your own.
 *            -- PL --
 *            Komercyjna. Wszelkie prawa zastrzeżone.
 *            Zabrania się kopiowania i rozpowszechniania w całości lub fragmentach.
 *            Właściciel licencji ma prawo do modyfikacji treści dla potrzeb własnych.
 */

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
