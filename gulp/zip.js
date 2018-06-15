'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');

var $ = require('gulp-load-plugins')({
  pattern: ['gulp-*']
});

gulp.task('zip-module', function () {
  return gulp.src([
      path.join(conf.paths.build, '/' + conf.filename + '/' + conf.name + '/**/*')
    ])
    .pipe($.zip(conf.name + '.ocmod.zip'))
    .pipe(gulp.dest(path.join(conf.paths.build, '/' + conf.filename)));
});

gulp.task('zip', ['zip-module'], function () {
  return gulp.src([
      path.join(conf.paths.build, '/' + conf.filename + '/*.{zip,txt,xml}')
    ])
    .pipe($.zip(conf.filename + '.zip'))
    .pipe(gulp.dest(path.join(conf.paths.dist, '/')));
});
