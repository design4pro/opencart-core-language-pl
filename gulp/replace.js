'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');
// using data from package.json
var pkg = require('./../package.json');
var $ = require('gulp-load-plugins')({
  pattern: ['gulp-*']
});

gulp.task('replace', function () {
  return gulp.src([
      path.join(conf.paths.src, '/install.txt'),
      path.join(conf.paths.src, '/update.txt')
    ])
    .pipe($.replace('#name#', pkg.title))
    .pipe($.replace('#filename#', conf.name + '.ocmod.zip'))
    .pipe(gulp.dest(path.join(conf.paths.build, '/' + conf.filename)))
    .pipe($.size({
      title: path.join(conf.paths.build, '/' + conf.filename),
      showFiles: true
    }));
});
