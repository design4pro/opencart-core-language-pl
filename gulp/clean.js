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
