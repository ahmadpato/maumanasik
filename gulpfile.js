// Import dependencies
var gulp = require('gulp')
var sass = require('gulp-sass')(require('sass'))
var rename = require("gulp-rename")
var uglify = require('gulp-uglify')
var browserSync = require('browser-sync').create()

gulp.task('browser-sync', function () {
  browserSync.init({
    proxy: "maumanasik.mme"
  })
})

gulp.task('sass', function () {
  return gulp.src('./src/scss/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./css'))
})

gulp.task('scripts', function () {
  return gulp.src('./src/js/**/*.js')
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
})

gulp.task('watch', function () {
  gulp.watch('**/**.*').on('change', gulp.series(browserSync.reload))
  gulp.watch('./src/scss/**/*.scss', gulp.series(['sass']))
  gulp.watch('./src/js/**/*.js', gulp.series(['scripts']))
})

gulp.task('default', gulp.parallel(['sass', 'scripts', 'watch', 'browser-sync']))