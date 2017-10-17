var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function () {
    return gulp.src('src/scss/**/*.scss')
        .pipe(sass({
            includePaths: [
                'bower_components/foundation-sites/scss',
                'bower_components/motion-ui/src',
            ],
        }))
        .pipe(gulp.dest('dist/css'))
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

gulp.task('default', ['browserSync', 'sass'], function () {
    gulp.watch('src/scss/**/*.scss', ['sass']);
    gulp.watch('*.html', browserSync.reload);
    gulp.watch('src/js/**/*.js');
});