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

'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');
var $ = require('gulp-load-plugins')({
  pattern: ['gulp-*', 'del']
});

gulp.task('clean', function (done) {
  return $.del([
    path.join(conf.paths.build, '/' + conf.filename)
  ], done);
});
