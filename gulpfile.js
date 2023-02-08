 // Include gulp
var gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    rename = require('gulp-rename'),
    gcmq = require('gulp-group-css-media-queries'),
    concat = require('gulp-concat'),
    terser = require('gulp-terser');
 
// Compile Sass
gulp.task('sass', function () {
    return gulp.src('assets/css/build/*.scss')
    .pipe(sass({
        includePaths: require('node-normalize-scss').includePaths
    }))
    .pipe(gcmq())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest('assets/css'));
});

// Compile js
gulp.task('vendorScripts', function() {
    return gulp.src([
        'assets/js/vendors/modernizr-2.8.3-respond-1.4.2.min.js',        
        'assets/js/vendors/jquery-3.4.1.min.js',
        'assets/js/vendors/imagesloaded.pkgd.js',  
        'assets/js/vendors/CustomEase.min.js',
        'assets/js/vendors/gsap.min.js',
        'assets/js/vendors/ScrollTrigger.min.js',
        'assets/js/vendors/owl.carousel.js',
        ])
        .pipe(concat('vendorScripts.js'))
        .pipe(rename('vendors.min.js'))
        .pipe(terser())
        .on('error', function (err) { console.log( err ) })
        .pipe(gulp.dest('assets/js'));
});

// Compile js
gulp.task('mainScript', function() {
    return gulp.src([
        'assets/js/main.js',
        ])
        .pipe(concat('main.min.js'))
        .pipe(terser())
        .on('error', function (err) { console.log( err ) })
        .pipe(gulp.dest('assets/js'));
});

// Watch Files For Changes
gulp.task('watch', function () {
    gulp.watch('assets/js/vendors/*.js', gulp.series('vendorScripts'));
    gulp.watch('assets/js/main.js', gulp.series('mainScript'));
    gulp.watch('assets/css/build/*.scss', gulp.series('sass'));
});

// run Task when gulp
gulp.task('default', gulp.series('vendorScripts', 'mainScript', 'sass', 'watch'));










