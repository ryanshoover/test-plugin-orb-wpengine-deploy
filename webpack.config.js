const path = require('path');

module.exports = {
	entry: './src/js/main.js',
	mode: process.env.NODE_ENV || 'development',
	output: {
		filename: 'main.js',
		path: path.resolve(__dirname, 'dist'),
	},
	module: {
		rules: [
		  {
			test: /\.js$/,
			exclude: /node_modules/,
			loader: 'eslint-loader',
			options: {
			  // eslint options (if necessary)
			},
		  },
		],
	}
};
