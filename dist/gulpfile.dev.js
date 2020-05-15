"use strict";

var gulp = require('gulp');

var sassGlob = require('gulp-sass-glob');

var browserSync = require('browser-sync').create();

var browserSyncReuseTab = require('browser-sync-reuse-tab')(browserSync, 'external');

var sass = require('gulp-sass');

var pug = require('gulp-pug');

var uglify = require('gulp-uglify');

var imageMin = require('gulp-imagemin');

var concat = require('gulp-concat');

var ts = require('gulp-typescript');

var tsProject = ts.createProject("tsconfig.json");

var del = require('del');

var plumber = require('gulp-plumber');

var notify = require('gulp-notify');

var wait = require('gulp-wait');

var autoprefixer = require('gulp-autoprefixer');

var babel = require('gulp-babel');

sass.compiler = require('node-sass'); // Compile Pug

function pugFiles() {
  return gulp.src(['src/pug/*.pug']).pipe(plumber({
    errorHandler: function errorHandler(err) {
      // display the error message
      console.log(err.message); // end the errored task

      this.emit('end');
    }
  })).pipe(pug({
    doctype: 'html',
    pretty: true
  })).pipe(gulp.dest('./src'));
}

; // Compile Sass & Inject Into Browser

function scss() {
  return gulp.src(['./scss/style.scss']).pipe(sassGlob()).pipe(plumber({
    errorHandler: function errorHandler(err) {
      // display the error message
      console.log(err.message); // end the errored task

      this.emit('end');
    }
  })).pipe(sass()).pipe(autoprefixer({
    cascade: false
  })).pipe(concat('style.css')).pipe(gulp.dest('./dist/css')).pipe(browserSync.stream());
}

; // Clean the build folder

function clean(done) {
  console.log('-> Cleaning dist folder');
  del(['dist', 'src/assets/css', 'src/assets/compJs', 'src/*.html']);
  done();
}

; // Watch Sass, Pug & Serve

function watchFiles() {
  browserSync.init({
    proxy: {
      target: "http://localhost/wordpress"
    },
    open: false,
    notify: false,
    reloadDelay: 100
  });
  gulp.watch(['*.php', 'src/pug/**/*.pug']).on('change', browserSync.reload);
  gulp.watch(['_src/scss/*', '_src/scss/**/*', '_src/scss/**/**/*'], scss).on('change', browserSync.reload);
}

;
exports.clean = clean;
exports.watchFiles = watchFiles;
exports.scss = scss;
exports.pugFiles = pugFiles;
gulp.task('default', gulp.series(scss, watchFiles));