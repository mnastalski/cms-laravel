const gulp = require('gulp');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var stripDebug = require('gulp-strip-debug');
var tildeImporter = require('node-sass-tilde-importer');
var include = require('gulp-include');

var Locations = {
    input: {
        sass: [
            'resources/assets/sass/**/*.scss'
        ],
        js: [
            'resources/assets/js/*.js'
        ],
        vendor: [
            'resources/assets/vendor/**/*'
        ]
    },

    output: {
        css: 'public/assets/css',
        js: 'public/assets/js',
        vendor: 'public/assets/vendor'
    }
};

gulp.task('default', ['build:dev', 'watch']);

gulp.task('watch', function () {
    gulp.watch('resources/assets/sass/**/*', ['sass:dev']);
    gulp.watch('resources/assets/js/**/*', ['js:dev']);
    gulp.watch('resources/assets/vendor/**/*', ['vendor']);
});

gulp.task('build:prod', ['sass:prod', 'js:prod', 'vendor']);
gulp.task('build:dev', ['sass:dev', 'js:dev', 'vendor']);

gulp.task('sass:dev', function () {
    return gulp.src(Locations.input.sass)
        .pipe(sass({
            importer: tildeImporter
        })).on('error', sass.logError)
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest(Locations.output.css));
});

gulp.task('sass:prod', function () {
    return gulp.src(Locations.input.sass)
        .pipe(sass({
            importer: tildeImporter,
            outputStyle: 'compressed'
        })).on('error', sass.logError)
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest(Locations.output.css));
});

gulp.task('js:dev', function () {
    return gulp.src(Locations.input.js)
        .pipe(include({
            includePaths: [
                'node_modules'
            ]
        }))
        .pipe(gulp.dest(Locations.output.js));
});

gulp.task('js:prod', function () {
    return gulp.src(Locations.input.js)
        .pipe(include({
            includePaths: [
                'node_modules'
            ]
        }))
        .pipe(stripDebug())
        .pipe(uglify({
            output: {
                comments: '/^!/'
            }
        }))
        .pipe(gulp.dest(Locations.output.js));
});

gulp.task('vendor', function () {
    return gulp.src(Locations.input.vendor)
        .pipe(gulp.dest(Locations.output.vendor));
});
