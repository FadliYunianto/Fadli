// 1. Tambahkan style ke <head>
const style = document.createElement("style");
style.textContent = `
  body {
    overflow: hidden;
    background-color: black;
    text-align: center;
  }
  #pre {
    font: 15px "Share Tech Mono", monospace;
    color: #FE2D42;
  }
  #q {
    font: 15px "Share Tech Mono", monospace;
    color: white;
  }
`;
document.head.appendChild(style);

// 2. Tambahkan font dari Google Fonts
const fontLink = document.createElement("link");
fontLink.rel = "stylesheet";
fontLink.href = "https://fonts.googleapis.com/css?family=Share+Tech+Mono";
document.head.appendChild(fontLink);

// 3. Ganti seluruh isi body dengan konten yang diinginkan
document.body.innerHTML = `
  <br><br>
  <center>
    <img src="https://c.tenor.com/AdyODFy5zhAAAAAC/anime-sharingen-madara-eye.gif" width="500px" height="500px">
  </center>

  <center><pre id="pre">$ Hello World $</pre></center>
  <center><p id="q">Hello World</p></center>

  <br>

  <center><pre id="pre">&#9679; Shotz &#9679;<br></pre></center>
  <center><p id="q">Hello World</p></center>

  <br><br>
`;
