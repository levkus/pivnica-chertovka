var gulp = require("gulp"),
    postcss = require('gulp-postcss'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer'),
    precss = require('precss'),
    plumber = require('gulp-plumber'),
    cssnano = require('gulp-cssnano'),
    imagemin = require('gulp-imagemin'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    notify = require('gulp-notify');

// Run Browser-Sync

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./dist/",
            routes: {
                "/bower_components" : "bower_components",
                "/fonts" : "fonts"
            }
        }
    });
});

// HTML

gulp.task('html', function() {
    gulp.src('src/*.html')
        .pipe(gulp.dest('dist/'))
        .pipe(reload({stream: true}));
});

// Images

gulp.task('images', function() {
    gulp.src('src/img/*')
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest('dist/img'))
        .pipe(reload({stream: true}));
});

// PostCSS + Autoprefixer + cssnano

gulp.task('css', function() {
    gulp.src('src/css/[^_]*.css')
        .pipe(plumber({
            errorHandler: notify.onError(function(err) {
                return {
                    title: 'CSS Error',
                    message: err.message
                };
            })
        }))
        .pipe(sourcemaps.init())
        .pipe(postcss([ autoprefixer( {browsers: ['last 2 versions']} ), precss() ]))
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/css'))
        .pipe(reload({stream: true}));
});

// JS Uglify

gulp.task('js', function() {
    gulp.src(['src/js/**/*.js', 'src/js/**/*.min.js'])
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'))
        .pipe(reload({stream: true}));
});

// Watch

gulp.task('watch', function() {
    gulp.watch('src/*.html', ['html']);
    gulp.watch(['src/img/**/*.jpg', 'src/img/**/*.png'], ['images']);
    gulp.watch('src/css/**/*.css', ['css']);
    gulp.watch('src/js/**/*.js', ['js']);
});

gulp.task('default', ['browser-sync', 'watch']);
