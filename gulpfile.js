var gulp = require('gulp'),
	concat = require('gulp-concat'),
	rename = require('gulp-rename'),
	uglify = require('gulp-uglify'),
	notify = require('gulp-notify'),
	jshint = require('gulp-jshint'),
	del = require('del');

gulp.task('scripts', function() {
	return gulp.src([
		'bower_components/jquery/dist/jquery.min.js',
		'bower_components/jquery/dist/modernizr/modernizr.js',
		'assets/js/vendor/highstock.js',
		'bower_components/foundation/js/foundation.min.js',
		'assets/js/vendor/angular.min.js',
		'assets/js/app.js'
		])
		.pipe(concat('main.js'))
		.pipe(gulp.dest('dist/assets/js'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(uglify())
		.pipe(gulp.dest('dist/assets/js'))
		.pipe(notify({
			message: 'Scripts task complete'
		}));
});

gulp.task('clean', function(cb) {
	del(['dist/assets/css', 'dist/assets/js', 'dist/assets/img'], cb)
});

gulp.task('default', ['clean'], function() {
	gulp.start('scripts');
});