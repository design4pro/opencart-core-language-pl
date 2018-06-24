'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');

var $ = require('gulp-load-plugins')({
  pattern: ['gulp-*']
});

gulp.task('zip', function () {
  return gulp.src([
      path.join(conf.paths.build, '/' + conf.filename + '/**/*')
    ])
    .pipe($.zip(conf.filename + '.ocmod.zip'))
    .pipe(gulp.dest(path.join(conf.paths.dist, '/')));
});
