import { defineConfig } from "vite";
import liveReload from 'vite-plugin-live-reload';
import autoprefixer from "autoprefixer";
import postcssNesting from "postcss-nesting";
// import squooshPlugin from 'vite-plugin-squoosh';
import glob from "glob";
import path from "path";
import fs from "fs";
import sassGlobImports from 'vite-plugin-sass-glob-import';

export default defineConfig ( {
	plugins: [
		liveReload( __dirname + '/**/*.php' ),
		sassGlobImports(),
		// squooshPlugin( {
		// 	// Specify codec options.
		// 	codecs: {
		// 		mozjpeg: { quality: 30, smoothing: 1 },
		// 		webp   : { quality: 25 },
		// 		avif   : { cqLevel: 20, sharpness: 1 },
		// 		jxl	: { quality: 30 },
		// 		wp2	: { quality: 40 },
		// 		oxipng : { level: 3 }
		// 	},
		// 	// Do not encode .wp2 and .webp files.
		// 	exclude: /.(wp2|webp)$/,
		// 	// Encode png to webp.
		// 	encodeTo: { from: /.png$/, to: "webp" }
		// } )
	],
	root: '',
	base: process.env.NODE_ENV === 'development' ? './' : '/dist/',
	build: {
		outDir: path.resolve( __dirname, './dist' ),
		emptyOutDir: true,
		manifest: true,
		target: 'es2018',
		rollupOptions: {
			input: {
				main: path.resolve( __dirname + '/main.js' )
			},
			// input: inputFiles,
			output: {
				entryFileNames: `assets/[name].js`,
				chunkFileNames: `assets/[name].js`,
				assetFileNames: ( { name } ) => {
					// let extType = name.split(".")[1];
					// console.log( extType );
					if ( /\.( gif|jpeg|jpg|png|svg|webp|ico| )$/.test( name ?? '' ) ) {
						return 'assets/images/[name].[ext]';
					}
					if ( /\.css$/.test( name ?? '' ) ) {
						return 'assets/css/[name].[ext]';
					}
					if ( /\.js$/.test( name ?? '' ) ) {
						return 'assets/js/[name].[ext]';
					}
					return 'assets/[name].[ext]';
				}
			},
		},
		assetsInlineLimit: 0,
		minify: false,
		write: true,
	},
	server: {
		cors: true,
		strictPort: true,
		port: 3000,
		https: false,
		hmr: {
			host: 'localhost',
		},
	},
	css: {
		postcss: {
			plugins: [
				postcssNesting,
				autoprefixer,
			],
		},
		devSourcemap: true,
	},
} );
