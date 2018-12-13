import * as React from "react"
import * as ReactDOM from "react-dom"

import { Canal } from "./components/Canal"

ReactDOM.render(
  <Canal compiler="TypeScript" framework="React"/>,
  document.getElementById("chat-root")
)
