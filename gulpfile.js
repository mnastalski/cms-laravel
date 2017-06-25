const gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var merge = require('merge-stream');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var stripDebug = require('gulp-strip-debug');

var Locations = {
    input: {
        sass: 'resources/assets/sass/**/*.scss',
        css_libs: 'resources/assets/sass/lib/*.css',
        js: 'resources/assets/js/*.js',
        js_libs: 'resources/assets/js/lib/**/*'
    },

    output: {
        css: 'public/css',
        js: 'public/js'
    }
};

gulp.task('default', ['build:dev', 'watch']);

gulp.task('watch', function() {
    gulp.watch('resources/assets/sass/**/*', ['sass']);
    gulp.watch('resources/assets/js/**/*', ['js:dev']);
});

gulp.task('build:prod', ['sass', 'js:prod']);
gulp.task('build:dev', ['sass', 'js:dev']);

gulp.task('sass', function() {
    var sass_src = gulp.src([Locations.input.css_libs])
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest(Locations.output.css));

    var css_libs = gulp.src([Locations.input.sass])
        .pipe(sass({
            outputStyle: 'compressed'
        })).on('error', sass.logError)
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest(Locations.output.css));

    return merge(css_libs, sass_src);
});

gulp.task('js:prod', function() {
    var js_libs = gulp.src([Locations.input.js_libs])
        .pipe(gulp.dest(Locations.output.js));

    var js_src = gulp.src([Locations.input.js])
        .pipe(stripDebug())
        .pipe(uglify({
            output: {
                comments: '/^!/'
            }
        }))
        .pipe(rename({dirname: ''}))
        .pipe(gulp.dest(Locations.output.js));

    return merge (js_libs, js_src);
});

gulp.task('js:dev', function() {
    var js_libs = gulp.src([Locations.input.js_libs])
        .pipe(gulp.dest(Locations.output.js));

    var js_src = gulp.src([Locations.input.js])
        .pipe(gulp.dest(Locations.output.js));

    return merge(js_libs, js_src);
});
