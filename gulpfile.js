var gulp         = require('gulp');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var header = require('gulp-header');

gulp.task('default', ['watch', 'sass']);

gulp.task('watch', function () {
	gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('sass', function () {
	gulp.src('./sass/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(sourcemaps.write({includeContent: false}))
		.pipe(sourcemaps.init({loadMaps: true}))
		.pipe(autoprefixer(['last 3 versions', 'ie >= 8', 'Android >= 4', 'iOS >= 8']))
    .pipe(header('@charset "UTF-8";\n\n'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./'));
});

// var gulp = require('gulp');
// var sass = require('gulp-sass');
//
// gulp.task('sass', function(){
//   gulp.src('./sass/**/*.scss')
//     .pipe(sass({outputStyle: 'expanded'}))
//     .pipe(gulp.dest('./css/'));
// });
//
// gulp.task('sass-watch', () => {
//     return gulp.watch(['./sass/**/*.scss'], ['sass']);
// });
//
// gulp.task('default', ['sass-watch']);
