'use strict';

const gulp = require('gulp');
const jshint = require('gulp-jshint');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');
const cleanCSS = require('gulp-clean-css');
const settings = {
	"paths": {
		"dev": {
			"scss": "assets/scss/**/*.scss",
			"img": "assets/img/*.jpg"
		},
		"build": {
			"css": "assets/css",
            "img": "assets/img"
		}
	}
};

// SASS compilation
gulp.task('sass', () =>
    gulp.src(settings.paths.dev.scss)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(settings.paths.build.css))
);

// CSS minification
gulp.task('minify-css', function() {
    return gulp.src(`${settings.paths.build.css}/main.css`)
        .pipe(cleanCSS({debug: true}, function(details) {
            console.log(details.name + ': ' + details.stats.originalSize);
            console.log(details.name + ': ' + details.stats.minifiedSize);
        }))
        .pipe(rename('main.min.css'))
        .pipe(gulp.dest(settings.paths.build.css));
});

// Image optimisation
gulp.task('imagemin', () =>
	gulp.src(settings.paths.dev.img)
		.pipe(imagemin({
			"verbose": true
		}))
		.pipe(gulp.dest(settings.paths.build.img))
);

// Watch for changes
gulp.task('watch', function() {
    gulp.watch(settings.paths.dev.scss, ['sass']);
});

// Define custom tasks
gulp.task('default', ['sass', 'watch']);
gulp.task('build', ['sass', 'imagemin', 'minify-css']);
