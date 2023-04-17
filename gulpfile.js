const {src, dest, watch} = require('gulp');
const compileSass = require('gulp-sass')(require('sass'));
const minifyCss = require('gulp-clean-css');
const sourceMaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const sassGlob = require('gulp-sass-glob');

compileSass.compiler = require('node-sass');

const bundleSass = () => {
  return src('assets/scss/**/*.scss')
      .pipe(sourceMaps.init())
      .pipe(sassGlob())
      .pipe(compileSass().on('error', compileSass.logError))
      .pipe(minifyCss())
      .pipe(sourceMaps.write())
      .pipe(concat('bundle.css'))
      .pipe(dest('dist/css'));
};

const bundleJs = () => {
  return src('assets/js/*.js')
      .pipe(sourceMaps.init())
      .pipe(concat('bundle.js'))
      .pipe(sourceMaps.write())
      .pipe(dest('dist/js'));
};

const vendorJs = () => {
  return src('assets/js/vendor/*.js')
      .pipe(sourceMaps.init())
      .pipe(sourceMaps.write())
      .pipe(dest('dist/js'));
};

const watcher = () => {
  watch('assets/scss/**/*.scss', bundleSass);
  watch('blocks/**/*.scss', bundleSass);
  watch('assets/js/*.js', bundleJs);
  watch('assets/js/vendor/*.js', vendorJs);
};

exports.bundleSass = bundleSass;
exports.bundleJs = bundleJs;
exports.vendorJs = vendorJs;
exports.watcher = watcher;
