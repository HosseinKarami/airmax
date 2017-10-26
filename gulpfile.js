var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    jshint = require('gulp-jshint'),
    header  = require('gulp-header'),
    rename = require('gulp-rename'),
    cssnano = require('gulp-cssnano'),
    cp = require('child_process'),
    package = require('./package.json');

var paths = {
  scripts: ['src/components/jquery/dist/jquery.min.js', 'src/js/scripts.js', 'src/js/material/*.js']
};

var banner = [
  '/*!\n' +
  ' +------------------------------------+\n' +
  ' * <%= package.name %>                          *\n' +
  ' * <%= package.title %>         *\n' +
  ' * @author <%= package.author %> *\n' +
  ' * <%= package.url %>          *\n' +
  ' * Copyright ' + new Date().getFullYear() + '. <%= package.license %> licensed.      *\n' +
  ' +------------------------------------+\n' +
  ' */',
  '\n'
].join('');

gulp.task('css', function () {
    return gulp.src('src/scss/style.scss')
    .pipe(sass({errLogToConsole: true}))
    .pipe(autoprefixer('last 4 version'))
    .pipe(gulp.dest('wp-content/themes/airmax/assets/css'))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(header(banner, { package : package }))
    .pipe(gulp.dest('wp-content/themes/airmax/assets/css'))
    .pipe(browserSync.reload({stream:true}));
});

gulp.task('js',function(){
  gulp.src(paths.scripts)
    .pipe(header(banner, { package : package }))
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('wp-content/themes/airmax/assets/js'))
    .pipe(uglify())
    .pipe(header(banner, { package : package }))
    .pipe(concat('scripts.min.js'))
    .pipe(gulp.dest('wp-content/themes/airmax/assets/js'))
    .pipe(browserSync.reload({stream:true, once: true}));
});


gulp.task('browser-sync', ['css', 'js'], function() {
    browserSync.init({
        proxy: "localhost/AirMax"
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('default', ['css', 'js', 'browser-sync'], function () {
    gulp.watch("src/scss/*/*.scss", ['css']);
    gulp.watch(paths.scripts, ['js']);
    gulp.watch(['wp-content/themes/airmax/*/*.php'], ['bs-reload']);
});