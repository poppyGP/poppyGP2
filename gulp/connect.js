'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');
var util = require('util');

var browserSync = require('browser-sync');

var connect = require('gulp-connect-php');

gulp.task('connect', function () {
  var connectOptions = {
    port  : 8000,
    base  : conf.paths.api,
    open  : true
  };
  connect.server(connectOptions);
});
 
gulp.task('connect-sync', function() {
  connect.server({}, function () {
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch(path.join(conf.paths.api, '/**/*.php'), function() {
    browserSync.reload();
  });
});