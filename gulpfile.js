var gulp         = require('gulp'),
	sass         = require('gulp-sass')(require('sass')),
	autoprefixer = require('gulp-autoprefixer'),
	cleanCSS     = require('gulp-clean-css'),
	rename       = require('gulp-rename'),
	browserSync  = require('browser-sync').create(),
	concat       = require('gulp-concat'),
	uglify       = require('gulp-uglify-es').default;

gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: "fas.loc",
		notify: false,
	})
});
function bsReload(done) { browserSync.reload(); done() }

gulp.task('styles', function () {
	return gulp.src('app/sass/styles.sass')
		.pipe(sass({
		}, {allowEmpty: true}).on('error', sass.logError))
		.pipe(rename({suffix: '.min', prefix : ''}))
		.pipe(autoprefixer({}))
		.pipe(cleanCSS())
		.pipe(gulp.dest('app/css'))
		.pipe(browserSync.reload({ stream: true }));
});

gulp.task('scripts', function() {
	return gulp.src([
		'app/js/scripts.js',
	])
		.pipe(concat('scripts.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('app/js/'))
		.pipe(browserSync.reload({ stream: true }));
});

gulp.task('code', function() {
	return gulp.src('app/**/*.php')
		.pipe(browserSync.reload({ stream: true }))
});

gulp.task('watch', function () {
	gulp.watch('app/sass/**/*.sass', gulp.parallel('styles'));
	gulp.watch(['app/js/scripts.js'], gulp.parallel('scripts'));
	gulp.watch('app/**/*.php', gulp.parallel('code'));
});

gulp.task('default', gulp.parallel('styles', 'scripts', 'browser-sync', 'watch'));