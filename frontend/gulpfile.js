var config = {
     sassPath: './src/scss',
     bowerDir: './bower_components' 
}

var paths = {
   sass: [
      config.sassPath + '/assets/css/styles.scss',
      config.bowerDir + '/bootstrap-sass/assets/stylesheets',
      config.bowerDir + '/font-awesome/scss/font-awesome.scss'
   ],
   js: [
      // config.bowerDir + '/jquery/dist/jquery.min.js',
      // config.bowerDir + '/bootstrap-sass/assets/javascripts/bootstrap.min.js',
      'src/js/*.js'
   ]
};



var gulp = require('gulp'),
sass = require('gulp-sass'),
autoprefixer = require('gulp-autoprefixer'),
cssnano = require('gulp-cssnano'),
jshint = require('gulp-jshint'),
minifycss = require('gulp-minify-css'),
uglify = require('gulp-uglify'),
imagemin = require('gulp-imagemin'),
rename = require('gulp-rename'),
concat = require('gulp-concat'),
notify = require('gulp-notify'),
cache = require('gulp-cache'),
livereload = require('gulp-livereload'),
del = require('del'),
sourcemaps = require('gulp-sourcemaps');


gulp.task('styles', function() {
   return sass(config.sassPath + '/astillero.scss', { style: 'compressed' })
   .pipe( autoprefixer( 'last 2 version' ) )
   .pipe(concat('astillero.min.css'))
   .pipe( cssnano() )
   .pipe( gulp.dest('dist/assets/css') )
   .pipe( notify( { message: 'SASS listo!' })
);
});


gulp.task('sass', function () {

   return
      sass( paths.sass )
      .pipe(concat('astillero.min.css'))
      .pipe(gulp.dest('dist/assets/css/'));
});


gulp.task('sass2',function(){
  return gulp.src( paths.sass )
    .pipe(sourcemaps.init())
    .pipe(sass({ style: 'expanded' }))
    .pipe(autoprefixer('last 2 version'))
    .pipe(sourcemaps.write())
    .pipe(concat('astillero.min.css'))
   //  .pipe(gulp.dest('css'))
   //  .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('dist/assets/css'))
    .pipe(notify({ message: 'Styles task complete' }));

})

gulp.task('icons', function() { 
    return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*') 
        .pipe(gulp.dest('./dist/fonts')); 
});



gulp.task('scripts', function() {
   return gulp.src(paths.js)
   .pipe(jshint('.jshintrc'))
   .pipe(jshint.reporter('default'))
   .pipe(concat('astillero.min.js'))
   .pipe(uglify())
   .pipe(gulp.dest('dist/assets/js'))
   // .pipe(rename({suffix: '.min'}))
   // .pipe(gulp.dest('dist/assets/js'))
   .pipe(notify({ message: 'Scripts listos!' }));

});

gulp.task('html', function() {
   return gulp.src([
      'src/html/**/*.html',
      'src/html/*.html',
      'src/html/**/*.php',
      'src/html/*.php',
   ])
   .pipe(gulp.dest('dist/html'))
   .pipe(notify({ message: 'HTML copiado' }));

});


gulp.task('images', function() {
  // return gulp.src('src/images/**/*')
  //   .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
  //   .pipe(gulp.dest('dist/assets/img'))
  //   .pipe(notify({ message: 'Images task complete' }));
});


gulp.task('clean', function() {
    return del(['dist/assets/css', 'dist/assets/js', 'dist/assets/img', 'dist/html' ]);
});


gulp.task('default', ['clean'], function() {
   gulp.start( 'html', 'styles', 'scripts', 'images' );
});


gulp.task('watch', function() {

  gulp.watch('src/styles/**/*.scss', ['styles']);
  gulp.watch('src/scripts/**/*.js', ['scripts']);
  gulp.watch('src/html/**/*.html', ['html']);
  gulp.watch('src/html/**/*.php', ['html']);
  // gulp.watch('src/images/**/*', ['images']);
  livereload.listen();

  gulp.watch(['dist/**']).on('change', livereload.changed);

});
