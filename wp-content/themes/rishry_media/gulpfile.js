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