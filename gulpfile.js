const install = require("gulp-install");
const gulp = require("gulp");
const sass = require("gulp-sass");
let uglifycss = require('gulp-uglifycss');
let pump = require('pump');
let concat = require('gulp-concat');
let uglify = require('gulp-uglify');


gulp.src(__dirname + '/templates/**')
    .pipe(gulp.dest('./'))
    .pipe(install());


gulp.task('sass', function () {
    return gulp.src('./src/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./dist/.css'));
});



//css compression
gulp.task('mincss', function () {
    gulp.src('./src/src/css/*.css')
        .pipe(uglifycss({
            "maxLineLen": 80,
            "uglyComments": true
        }))
        .pipe(gulp.dest('./dist/css'));
});

//js compression
gulp.task('compress', function (cb) {
    pump([
            gulp.src('./src/js/**/.js'),
            uglify(),
            gulp.dest('./dist/js')
        ],
        cb
    );
});

gulp.task('scripts', function () {
    return gulp.src('./src/js/*js')
        .pipe(concat('js_main.js'))
        .pipe(gulp.dest('./dist/js'))

});
gulp.task('default', ['watch', 'sass']);

gulp.task('watch', function () {
    gulp.watch('./src/sass/*.scss', ['sass']);
});

gulp.task('build', ['sass','mincss', 'compress', 'scripts']);