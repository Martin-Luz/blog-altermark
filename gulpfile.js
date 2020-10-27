const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const connect = require('gulp-connect-php');


// Função para iniciar a compilação do Sass
function compilaSass() {
    return gulp
        .src('assets/scss/main.scss')
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream()); // atualiza os arquivos, sem que seja necessário um reload do browser
}

// Função para iniciar o browser
function browser() {
    connect.server({}, function() {
        browserSync({
            files: ["assets/scss/*.scss", "assets/js/*.js", "*.php", "./template-parts/*.php"],
            proxy: 'http://localhost/wpcurso/'
        });
    });
}

function watch() {
    gulp.watch('assets/scss/*.scss', compilaSass);
}


gulp.task('sass', compilaSass);
gulp.task('browser-sync', browser);
gulp.task('watch', watch);

gulp.task('default', gulp.parallel('watch', 'sass', 'browser-sync'));