//gulpfile.babel.js
import { src, dest, watch } from 'gulp';
import yargs from 'yargs';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';

const PRODUCTION = yargs.argv.prod;
var sass = require("gulp-sass")(require("sass"));

export const compileSass = () => {
  return src('assets/sass/style.scss')
  .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
  .pipe(sass().on('error', sass.logError))
  .pipe(gulpif(PRODUCTION, postcss([ autoprefixer ])))
  .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
  .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
  .pipe(dest('./'));
}

export const watchSass = () => {
  watch('assets/sass/**/*.scss', styles);
}