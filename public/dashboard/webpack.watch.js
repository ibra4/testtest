var path = require('path');
const webpack = require('webpack');


module.exports = (env) => {
  const envPath = path.resolve(__dirname, `.env.${env.NODE_ENV}`);
  const envVars = require('dotenv').config({ path: envPath }).parsed || {};

  return {
    entry: ['babel-polyfill', './src/index.js'],
    output: {
      filename: 'main.js',
      path: path.resolve(__dirname, 'dist')
    },
    mode: 'development',
    resolve: {
      extensions: ['.js', '.jsx', '.json'],
      modules: [
        'node_modules',
        './src/components',
        './src/providers',
        './src/pages',
        './src/userPages',
        './src',
        './assets'
      ],
      alias: {
        react: path.resolve('./node_modules/react')
      }
    },
    plugins: [
      new webpack.DefinePlugin({
        'process.env': JSON.stringify(envVars),
      }),
    ],
    devtool: 'source-map',
    module: {
      rules: [
        {
          test: /\.(js|jsx)$/,
          exclude: /node_modules/,
          use: [
            {
              loader: 'babel-loader',
              options: {
                presets: [['@babel/preset-env', { modules: 'commonjs' }], '@babel/preset-react'],
                plugins: ['@babel/plugin-proposal-class-properties', 'add-react-displayname']
              }
            }
          ]
        },
        {
          test: /\.svg$/,
          loader: 'svg-inline-loader'
        },
        {
          test: /\.(jpe?g|png|gif)(\?[a-z0-9=.]+)?$/,
          loader: 'url-loader?limit=100000'
        },
        {
          test: /\.(s[ac]ss|css)$/i,
          use: [
            // Creates `style` nodes from JS strings
            'style-loader',
            // Translates CSS into CommonJS
            'css-loader',
            // Compiles Sass to CSS
            {
              loader: 'sass-loader',
              options: {
                sassOptions: {
                  includePaths: ['./src/assets/scss']
                }
              }
            }
          ]
        }
      ]
    }
  }
};
