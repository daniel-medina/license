module.exports = {
  mode: 'development',
  entry: "./src/main.tsx",
  output: {
    filename: "chat.js",
    path: __dirname + "/public/script"
  },
  resolve: {
    extensions: [".ts", ".tsx", ".js", ".json"]
  },
  module: {
    rules: [
      { test: /\.tsx?$/, loader: "awesome-typescript-loader" }
    ]
  },
  externals: {
    "react": "React",
    "react-dom": "ReactDOM"
  }
}
