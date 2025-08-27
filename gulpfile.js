import gulp from "gulp";
import * as dartSass from "sass";
import gulpSass from "gulp-sass";
import autoprefixer from "gulp-autoprefixer";
import browserSync from "browser-sync";
import concat from "gulp-concat";
import babel from "gulp-babel";
import fs from "fs";
import uglify from "gulp-uglify";
import { spawn } from "child_process";
import cleanCSS from "gulp-clean-css";

const sass = gulpSass(dartSass);

const paths = {
	scss: "assets/scss/**/*.scss",
	cssLibs: "assets/css/lib/*.css",
	jsLibs: "assets/js/lib/*.js",
	jsScripts: "assets/js/scripts/*.js",
	php: ["application/views/**/*.php", "*.php"],
};

// Função auxiliar para checar se há arquivos em uma pasta
function arquivosExistem(path) {
	try {
		const arquivos = fs.readdirSync(path);
		return arquivos.length > 0;
	} catch {
		return false;
	}
}

// Compilar Sass
function compilaSass() {
	if (!arquivosExistem("assets/scss")) return Promise.resolve();
	return gulp
		.src(paths.scss)
		.pipe(sass({ outputStyle: "compressed" }))
		.pipe(
			autoprefixer({
				overrideBrowserslist: ["last 2 versions"],
				cascade: false,
			})
		)
		.pipe(cleanCSS())
		.pipe(gulp.dest("assets/css/"))
		.pipe(browserSync.stream());
}
gulp.task("sass", compilaSass);

// Concatenar arquivos CSS de libs
function pluginsCSS() {
	if (!arquivosExistem("assets/css/lib")) return Promise.resolve();
	return gulp
		.src(paths.cssLibs)
		.pipe(concat("plugins.css"))
		.pipe(cleanCSS())
		.pipe(gulp.dest("assets/css/"))
		.pipe(browserSync.stream());
}
gulp.task("plugincss", pluginsCSS);

// Concatenar e transpilar scripts JS do projeto
function gulpJs() {
	if (!arquivosExistem("assets/js/scripts")) return Promise.resolve();
	return gulp
		.src(paths.jsScripts)
		.pipe(concat("all.js"))
		.pipe(
			babel({
				presets: ["@babel/env"],
			})
		)
		.pipe(uglify())
		.pipe(gulp.dest("assets/js/"))
		.pipe(browserSync.stream());
}
gulp.task("alljs", gulpJs);

// Concatenar JS de libs externas
function pluginsJs() {
	if (!arquivosExistem("assets/js/lib")) return Promise.resolve();
	return gulp
		.src(paths.jsLibs)
		.pipe(concat("plugins.js"))
		.pipe(gulp.dest("assets/js/"))
		.pipe(browserSync.stream());
}
gulp.task("pluginjs", pluginsJs);

// Inicia servidor PHP embutido
function phpServer(cb) {
	const php = spawn("php", ["-S", "localhost:8000"], { stdio: "inherit" });
	process.on("exit", () => php.kill());
	cb();
}

// Inicia BrowserSync (proxy do servidor PHP)
function browser() {
	browserSync.init({
		proxy: "http://localhost:8000",
		open: true,
		notify: false,
	});
}

// Task server precisa ser registrada ANTES
gulp.task("server", gulp.series(phpServer, browser));

// Watch
function watch() {
	gulp.watch(paths.scss, compilaSass);
	gulp.watch(paths.cssLibs, pluginsCSS);
	gulp.watch(paths.jsScripts, gulpJs);
	gulp.watch(paths.jsLibs, pluginsJs);
	gulp.watch(paths.php).on("change", browserSync.reload);
}
gulp.task("watch", watch);

// Default
gulp.task(
	"default",
	gulp.parallel("watch", "server", "sass", "plugincss", "alljs", "pluginjs")
);
