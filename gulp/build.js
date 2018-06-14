'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');
// using data from package.json
var pkg = require('./../package.json');
var dateFormat = require('dateformat');
var now = new Date();

var $ = require('gulp-load-plugins')({
  pattern: ['gulp-*']
});

var project = [
  ' * Project    <%= pkg.title %>',
  ' * Name       <%= conf.name %>',
  ' * Modified   <%= dateFormat(now, "isoDateTime") %>',
  ' *',
  ' * @category  <%= pkg.category %>',
  ' * @package   <%= pkg.package %>',
  ' * @version   <%= pkg.version %>',
  ' * @link      <%= pkg.link %>'
].join('\n');

var license = [
  ' * @copyright Copyright (c) <%= new Date().getFullYear() %> <%= pkg.author.name %> (<%= pkg.author.url %>)',
  ' * @author    <%= pkg.author.name %> <<%= pkg.author.email %>>',
  ' * @license   Commercial. All rights reserved.',
  ' *            It is prohibited to copy and distribute in whole or in part.',
  ' *            Licensee has the right to modify the content for your own.',
  ' *            -- PL --',
  ' *            Komercyjna. Wszelkie prawa zastrzeżone.',
  ' *            Zabrania się kopiowania i rozpowszechniania w całości lub fragmentach.',
  ' *            Właściciel licencji ma prawo do modyfikacji treści dla potrzeb własnych.'
].join('\n');

var bannerPHP = [
  '<?php',
  '/**',
  project,
  ' *',
  license,
  ' */',
  '?>',
  ''
].join('\n');

var bannerTXT = [
  '/**',
  project,
  ' *',
  license,
  ' */',
  ''
].join('\n');

gulp.task('copy', function () {
  return gulp.src([
      path.join(conf.paths.src, '/license.txt')
    ])
    .pipe($.header(bannerTXT, {
      pkg: pkg,
      conf: conf,
      dateFormat: dateFormat,
      now: now
    }))
    .pipe(gulp.dest(path.join(conf.paths.build, '/' + conf.filename)))
    .pipe($.size({
      title: path.join(conf.paths.build, '/' + conf.filename),
      showFiles: true
    }));
});

gulp.task('build', ['copy'], function () {
  var phpFilter = $.filter('**/*.php', {restore: true});

  return gulp.src([
      path.join(conf.paths.src, 'upload/admin/language/pl/**/*'),
      path.join(conf.paths.src, 'upload/catalog/language/pl/**/*'),
      path.join(conf.paths.src, 'upload/admin/+(controller|model|view)/**/*'),
      path.join('!' + conf.paths.src, '/install.txt'),
      path.join('!' + conf.paths.src, '/license.txt'),
      path.join(conf.paths.src, '/upload/admin/language/en-gb/extension/dashboard/language_pl.php')
    ], { base: 'src' })
    .pipe(phpFilter)
    .pipe($.header(bannerPHP, {
      pkg: pkg,
      conf: conf,
      dateFormat: dateFormat,
      now: now
    }))
    .pipe(phpFilter.restore)
    .pipe(gulp.dest(path.join(conf.paths.build, '/' + conf.filename + '/' + conf.name)))
    .pipe($.size({
      title: path.join(conf.paths.build, '/' + conf.filename + '/' + conf.name),
      showFiles: true
    }));
});

