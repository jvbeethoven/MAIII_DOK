const path = require(`path`);
const webpack = require(`webpack`);

// change for production build on different server path
// relatieve paden gebruiken
const publicPath = `http://student.howest.be/julie.van.beethoven/20162017/ma3/dok/`;
// const publicPath = `/`;

const config = {
  entry: {
    style: `./src/css/style.css`,
    script: `./src/js/script.js`
  },
  output: {
    path: path.resolve(`./dist`),
    filename: `js/[name].js`,
    publicPath: publicPath
  },
  devtool: `sourcemap`,
  devServer: {
    contentBase: `./src`,
    historyApiFallback: true,
    hot: true,
    port: 3000
  },
  resolve: {
    extensions: [`.js`, `.css`]
  },
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: [
          {
            loader: `babel-loader`
          }
        ]
      },
      {
        test: /\.(svg|png|jpe?g|gif|webp)$/,
        loader: `url-loader`,
        options: {
          limit: 1000, // inline if < 1 kb
          context: `src`,
          name: `[path][name].[ext]`
        }
      }
    ]
  }
};

if (process.env.NODE_ENV === `production`) {
  const ExtractTextWebpackPlugin = require(`extract-text-webpack-plugin`);
  const {UglifyJsPlugin} = webpack.optimize;
  const extractCSS = new ExtractTextWebpackPlugin(`css/style.css`);
  config.module.rules.push({
    test: /\.css$/,
    loader: extractCSS.extract([
      {
        loader: `css-loader`,
        options: {
          importLoaders: 1
        }
      },
      {
        loader: `postcss-loader`
      }
    ])
  });
  //image optimizing
  config.module.rules.push({
    test: /\.(svg|png|jpe?g|gif)$/,
    loader: `image-webpack-loader`,
    enforce: `pre`
  });
  config.plugins = [
    extractCSS,
    new UglifyJsPlugin({
      sourceMap: true, // false returns errors.. -p + plugin conflict
      comments: false
    })
  ];
} else {
  config.module.rules.push({
    test: /\.css$/,
    use: [
      {
        loader: `style-loader`
      },
      {
        loader: `css-loader`,
        options: {
          importLoaders: 1
        }
      },
      {
        loader: `postcss-loader`
      }
    ]
  });
  config.plugins = [
    new webpack.HotModuleReplacementPlugin()
  ];
}

module.exports = config;
