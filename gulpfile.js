var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var minify = require('gulp-minify');

gulp.task('sass', function () {
    return gulp.src('src/scss/**/*.scss')
        .pipe(sass({
            includePaths: [
                'bower_components/foundation-sites/scss',
                'bower_components/motion-ui/src',
            ],
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('scripts', function () {
    return gulp.src('src/js/**/*.js')
        .pipe(uglify())
        .pipe(minify())
        .pipe(gulp.dest('dist/js'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('browserSync', function () {
    browserSync.init({
        open: 'external',
        host: 'www.mopisweb.paam',
        proxy: 'paam/standalone/mopis',
        port: 3000,
    })
});

gulp.task('default', ['browserSync', 'sass', 'scripts'], function () {
    gulp.watch('src/scss/**/*.scss', ['sass']);
    gulp.watch('src/js/**/*.js', ['scripts']);
    gulp.watch('*.php', browserSync.reload);
    gulp.watch('dist/translations/*.yml', browserSync.reload);
    gulp.watch('src/js/**/*.js');
});