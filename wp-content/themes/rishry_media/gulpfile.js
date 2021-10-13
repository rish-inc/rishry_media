const gulp = require("gulp"),
sass = require("gulp-sass")(require("sass")),
sassGlob         = require( 'gulp-sass-glob-use-forward' ),
browserSync      = require( 'browser-sync' ),//ブラウザシンク
path             = require( 'path' ), //path
minimist         = require( 'minimist' );

const paths = {
	rootDir   : '/',
	dstrootDir: 'htdocs',
	srcDir    : '/images',
	dstDir    : 'htdocs/images',
	serverDir : 'localhost',
	styleguide: 'css/guid'
};

const options = minimist( process.argv.slice( 2 ), {
	string: 'path',
	default: {
		path: 'http://rishrymedia.local' // 引数の初期値
	}
});

gulp.task("default", function() {
	// style.scssファイルを取得
	return (
	  gulp
		.src("css/style.scss")
		// Sassのコンパイルを実行
		.pipe(sass())
		// cssフォルダー以下に保存
		.pipe(gulp.dest("css"))
	);
  });

/*
 * Sass
 */
gulp.task( 'sass', function( done ) {
	gulp.src( './src/styles/**/*.scss' )
		.pipe( sassGlob() )
		.pipe( sass.sync().on( 'error', sass.logError ) )
		.pipe( cached( 'scss' ) )
		.pipe( sourcemaps.init() )
		.pipe( sass( {
			outputStyle: 'expanded',
			minifier: true //圧縮の有無 true/false
		} ) )
		.pipe( postcss( [
			autoprefixer( {
				grid: true,
				cascade: false
			} )
		] ) )
		.pipe( rename( {
			sass: true
		} ) )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( './css' ) );
	done();
});

/*
 * Useref
 */
gulp.task( 'html', function ( done ) {
	return gulp.src( './**/*.+( html|php )' )
		.pipe( useref( { searchPath: [ '.', 'dev' ] } ) )
		.pipe( gulpif( '*.js', uglify() ) )
		.pipe( gulpif( '*.css', minifyCss() ) )
		.pipe( gulp.dest( paths.dstrootDir ) );
	done();
});

/*
 * Browser-sync
 */
gulp.task( 'browser-sync', function( done ) {
	browserSync.init({
		// server: {
		// 	baseDir: paths.rootDir,
		// 	routes: {
		// 		"/node_modules": "node_modules"
		// 	}
		// },
		proxy: {
			target: options.path
		},
		notify: true
	});
	done();
});
gulp.task( 'bs-reload', function ( done ) {
	browserSync.reload();
	done();
});

gulp.task( 'setWatch', function ( done ) {
	global.isWatching = true;
	done();
});

/*
 * Default
 */
gulp.task( 'default', gulp.series( 'browser-sync', function() {
	const bsList = [
		'./**/*.html',
		'./**/*.php',
		'./js/**/*.js',
		'./style.css',
		'./**/*.scss',
		'./**/*._scss',
		'./**/*.png',
		'./**/*.jpg',
		'./**/*.svg'
	];
	gulp.watch( './src/styles/**/*.scss', gulp.task( 'sass' ) );
	gulp.watch( './src/scripts/**/*.js', gulp.task( 'browserify' ) );
	gulp.watch( bsList, gulp.task( 'bs-reload') );
}));

/*
 * Build
 */
gulp.task( 'clean', function( done ) {
	return del( [paths.dstrootDir] );
} );
gulp.task( 'devcopy', function ( done ) {
	return gulp.src([
		'./**/*.*',
		'!./src/**',
		'!./**/*.map',
		'!./gulp/**',
		'!./gulpfile.js',
		'!./package.json',
		'!./package-lock.json',
		'!./node_modules/**/*.*'
	], {
		dot: true
	}).pipe( gulp.dest( paths.dstrootDir ) );
	done();
});

gulp.task( 'build',
	gulp.series( 'clean',
		gulp.parallel( 'html', 'devcopy' )
	)
);