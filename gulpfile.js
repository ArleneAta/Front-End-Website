const gulp = require('gulp');
const sass = require('gulp-ruby-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const useref = require('gulp-useref');
const uglify = require('gulp-uglify');
const gulpIf = require('gulp-if');
const cssnano = require('cssnano');
const htmlMin = require('gulp-htmlmin');
const imageMin = require('gulp-imagemin');
const cache = require('gulp-cache');
const del = require('del');
const runSequence = require('run-sequence');
const rev = require('gulp-rev');
const revReplace = require('gulp-rev-replace');
const filter = require('gulp-filter');

// Intro Hello Task...
gulp.task('hello', function() {
  console.log('Hello, there');
});

// SASS Task
gulp.task('sass', function(){
	return sass('dev/scss/**/*.scss', { sourcemap: true })
			.on('error', sass.logError)
			.pipe(sourcemaps.write('.', {
				includeContent: false,
				sourceRoot: 'source'
			}))
		    .pipe(gulp.dest('dev/styles'))
			.pipe(browserSync.reload({
				stream: true
			}));
});

// Autoprefixer Task
gulp.task('autoprefixer', function(){

	return sass('dev/scss/**/*.scss')
		.on('error', sass.logError)
		.pipe(postcss([   
			autoprefixer({browsers: ['ie 8-11','last 2 versions']})
		]))
		.pipe(gulp.dest('dev/styles'));

});


// Watch Task
gulp.task('watch', function(){
	gulp.watch('dev/scss/**/*.scss', ['sass']);
	gulp.watch('dev/*.html', browserSync.reload);
	gulp.watch('dev/scripts/**/*.js', browserSync.reload);
});

// Watch-Autoprefixer Task
gulp.task('watch-autoprefixer', function(){
	gulp.watch('dev/scss/**/*.scss', ['autoprefixer']);
	gulp.watch('dev/*.html', browserSync.reload);
	gulp.watch('dev/scripts/**/*.js', browserSync.reload);
});

// BrowserSync Task
// gulp.task('browserSync', function(){
// 	browserSync.init({
// 		server: {
// 			baseDir: 'dev'
// 		}
// 	});
// });
gulp.task('browserSync', function(){
	browserSync.init({
		proxy: "localhost:8080//FrontEndWebsite/SSDSITE/dev"
	});
});
// Useref Task
gulp.task('useref', function(){

	const f = filter(['**/*.css', '**/*.js'], {restore: true});

	return gulp.src('dev/*.html')
		.pipe(useref())
		.pipe(gulpIf('*.js', uglify()))
		.pipe(gulpIf('*.css', postcss([cssnano()])))
		.pipe(gulpIf('*.html', htmlMin({collapseWhitespace: true})))
		.pipe(f)
		.pipe(rev())
		.pipe(f.restore)
		.pipe(revReplace())
		.pipe(gulp.dest('dist'));
});

// Image Optimization Task
gulp.task('images', function(){
	return gulp.src('dev/images/**/*.+(png|jpg|gif|svg)')
		.pipe(cache(imageMin({
			interlaced: true
		})))
		.pipe(gulp.dest('dist/images'));
});

// Fonts Task
gulp.task('fonts', function(){
	return gulp.src('dev/fonts/**/*')
		.pipe(gulp.dest('dist/fonts'));
});

// Clean Dist Folder Task
gulp.task('clean:dist', function(){
	return del.sync('dist');
});

// Default Task
gulp.task('default', function() {
  runSequence(['sass', 'browserSync'], 'watch');
});

// Build Task
gulp.task('build', function(){
	runSequence('clean:dist', 'autoprefixer', ['useref', 'images', 'fonts']);
});











