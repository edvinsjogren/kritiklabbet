
'use strict';

import gulp from 'gulp';
import del from 'del';
import runSequence from 'run-sequence';
import browserSync from 'browser-sync';
import gulpLoadPlugins from 'gulp-load-plugins';

const $ = gulpLoadPlugins();
const reload = browserSync.reload;

// SVG Config
const config = {
  mode: {
    symbol: { // symbol mode to build the SVG
      dest: 'images/sprite', // destination foldeer
      sprite: 'sprite.svg', //sprite name
      example: true // Build sample page
    }
  },
  svg: {
    xmlDeclaration: false, // strip out the XML attribute
    doctypeDeclaration: false // don't include the !DOCTYPE declaration
  }
};

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('styles', () => {
  return gulp.src('./styles/**/*.scss')
    .pipe($.sourcemaps.init())
    .pipe($.sass({
      logPrefix: 'Frigga'
    }).on('error', $.sass.logError))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest('./'))
    .pipe(reload({stream: true}));
});

// Concatenate and minify JavaScript. Optionally transpiles ES2015 code to ES5.
gulp.task('scripts', () =>
    gulp.src([
      // Note: Since we are not using useref in the scripts build pipeline,
      //       you need to explicitly list your scripts here in the right order
      //       to be correctly concatenated
      './scripts/main.js'
      // Other scripts
    ])
      .pipe($.newer('.tmp/scripts'))
      .pipe($.sourcemaps.init())
      .pipe($.babel({
        presets: ['es2015']
       }))
      .pipe($.sourcemaps.write())
      .pipe(gulp.dest('.tmp/scripts'))
      .pipe($.concat('main.min.js'))
      .pipe($.uglify({preserveComments: 'some'}))
      // Output files
      .pipe($.size({title: 'scripts'}))
      .pipe($.sourcemaps.write('.'))
      .pipe(gulp.dest('scripts'))
);

// Clean output directory
gulp.task('clean', () => del(['.tmp', 'dist/*', '!dist/.git'], {dot: true}));

// Watch files for changes & reload
gulp.task('serve', ['scripts', 'styles'], () => {
  browserSync({
    notify: false,
    logPrefix: 'Frigga',
    // Run as an https by uncommenting 'https: true'
    // Note: this uses an unsigned certificate which on first access
    //       will present a certificate warning in the browser.
    // https: true,
    proxy: 'kritiklabbet.dev/',
    serveStatic: ['.tmp', './'],
    port: 3000
  });

  gulp.watch(['**/*.php'], reload);
  gulp.watch(['styles/**/*.{scss,css}'], ['styles', reload]);
  gulp.watch(['scripts/main.js'], ['scripts']);
  gulp.watch(['src/images/**/*'], reload);
});

// Build production files, the default task
gulp.task('default', ['clean'], cb =>
  runSequence(
    'styles',
    ['scripts', 'images'],
    cb
  )
);
