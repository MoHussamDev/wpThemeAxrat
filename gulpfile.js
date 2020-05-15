const gulp = require('gulp');
const sassGlob = require('gulp-sass-glob');
const browserSync = require('browser-sync').create();
const browserSyncReuseTab = require('browser-sync-reuse-tab')(browserSync, 'external')
const sass = require('gulp-sass');
const pug = require('gulp-pug');
const uglify = require('gulp-uglify');
const imageMin = require('gulp-imagemin');
const concat = require('gulp-concat');
const ts = require('gulp-typescript');
const tsProject = ts.createProject("tsconfig.json");
const del = require('del');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const wait = require('gulp-wait');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
sass.compiler = require('node-sass');

// Compile Pug
function pugFiles() {
    return gulp.src(['src/pug/*.pug'])
        .pipe(plumber({
            errorHandler: function(err) {
                // display the error message
                console.log(err.message);
                // end the errored task
                this.emit('end')
            }
        }))
        .pipe(pug({
            doctype: 'html',
            pretty: true
        }))
        .pipe(gulp.dest('./src'));
};

// Compile Sass & Inject Into Browser
function scss() {
    return gulp.src(['./_src/scss/style.scss', ])
        .pipe(sassGlob())
        .pipe(plumber({
            errorHandler: function(err) {
                // display the error message
                console.log(err.message);
                // end the errored task
                this.emit('end')
            }
        }))
        .pipe(sass())
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(gulp.dest('./dist/css'))
        .pipe(browserSync.stream());
};

// Clean the build folder
function clean(done) {
    console.log('-> Cleaning dist folder')
    del([
        'dist',
        'src/assets/css',
        'src/assets/compJs',
        'src/*.html'

    ]);
    done()
};

// Watch Sass, Pug & Serve
function watchFiles() {
    browserSync.init({
        proxy: {
            target: "http://localhost/wordpress"
        },
        open: false,
        notify: false,
        reloadDelay: 100

    })
    gulp.watch(['*.php', 'src/pug/**/*.pug']).on('change', browserSync.reload);
    gulp.watch(['./_src/scss/*', './_src/scss/**/*', './_src/scss/**/**/*'], scss).on('change', browserSync.reload);
};

exports.clean = clean;
exports.watchFiles = watchFiles;
exports.scss = scss;
exports.pugFiles = pugFiles;

gulp.task('default', gulp.series(scss, watchFiles))