<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NYT WORDLE</title>
    <script type="module" src="./src/main.js"></script>
    <link rel="stylesheet" href="./styles/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  </head>
  <body>
    <div id="container">
      <div id="game">
        <div id = "top">
          <header>
            <h1 class="title">NYT WORDLE</h1>
          </header>

          <div id="uid-div" data-uid="<?php echo $_SERVER['uid']?>"></div>
          <div id="name-div" data-given="<?php echo $_SERVER['givenName']?>" data-last="<?php echo $_SERVER['sn']?>">
          <div id="name-bar">
              <button id="leaderboard-button" onclick="location.href= './leaderboard.html';">Leaderboard</button>
          </div>
          </div>
        </div>

        <div>
          <h1 id="blank-space">dont look here</h1>
        </div>

        <div id="board-container">
          <div id="board"></div>
        </div>

        <div id="messages-div">
          <h1 id="message-output">dont look here</h1>
        </div>
        
        <div id="keyboard-container">
          <div class="keyboard-row">
            <button data-key="q">q</button>
            <button data-key="w">w</button>
            <button data-key="e">e</button>
            <button data-key="r">r</button>
            <button data-key="t">t</button>
            <button data-key="y">y</button>
            <button data-key="u">u</button>
            <button data-key="i">i</button>
            <button data-key="o">o</button>
            <button data-key="p">p</button>
          </div>
          <div class="keyboard-row">
            <div class="spacer-half"></div>
            <button data-key="a">a</button>
            <button data-key="s">s</button>
            <button data-key="d">d</button>
            <button data-key="f">f</button>
            <button data-key="g">g</button>
            <button data-key="h">h</button>
            <button data-key="j">j</button>
            <button data-key="k">k</button>
            <button data-key="l">l</button>
            <div class="spacer-half"></div>
          </div>
          <div class="keyboard-row">
            <button data-key="enter" class="wide-button">Enter</button>
            <button data-key="z">z</button>
            <button data-key="x">x</button>
            <button data-key="c">c</button>
            <button data-key="v">v</button>
            <button data-key="b">b</button>
            <button data-key="n">n</button>
            <button data-key="m">m</button>
            <button data-key="del" class="wide-button">Del</button>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>