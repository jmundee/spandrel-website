const path = require('path');
const TerserPlugin = require("terser-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const ENV = process.env.ENV || 'production';

module.exports = {
  mode: 'production',
  watch: ENV === 'development' ? true : false,

  output: {
    // Webpack will create js files even though they are not used
    filename: '[name].min.js',
    // Where the CSS is saved to
    path: path.resolve(__dirname, 'public/assets'),
    publicPath: "assets"
  },

  // resolve: {
  //   extensions: ['.css', '.scss', '.js'],
  // },

  entry: {
    scripts: './src/js/index.js',
    // Will create "styles.css" in "css" dir.
    styles: './src/scss/styles.scss',
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: [
              [
                '@babel/preset-env',
                {
                  "corejs": 3,
                  "useBuiltIns": "entry"
                }
              ]
            ],
            babelrc: false
          }
        }
      },
      {
        test: /\.scss$/,
        use: [
          // Extract and save the final CSS.
          MiniCssExtractPlugin.loader,
          // Load the CSS, set url = false to prevent following urls to fonts and images.
          { loader: "css-loader", options: { url: false, importLoaders: 1 } },
          // Add browser prefixes and minify CSS.
          { loader: 'postcss-loader' },
          // Load the SCSS/SASS
          { loader: 'sass-loader' },
        ],
      },
    ],
  },

  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()],
  },

  plugins: [
    new CleanWebpackPlugin(),
    // Define the filename pattern for CSS.
    new MiniCssExtractPlugin({
      filename: '[name].min.css'
    })
  ]
};
