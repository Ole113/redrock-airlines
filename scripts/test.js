const jsdom = require("jsdom");
const { JSDOM } = jsdom;

const dom = new JSDOM(`<body>
  <script>document.body.appendChild(document.createElement("hr"));</script>
</body>`, { runScripts: "dangerously" });

// The script will be executed and modify the DOM:
dom.window.document.body.children.length === 2;