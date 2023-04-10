module.exports = {
  devServer: {
    proxy: 'localhost',
    hot: true,
    disableHostCheck: true,
    watchOptions: {
      poll: true,
    },
  },
};