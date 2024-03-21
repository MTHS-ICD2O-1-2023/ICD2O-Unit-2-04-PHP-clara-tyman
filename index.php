<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of a triangle, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Clara" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Area of a triangle, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of a triangle, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <table>
        <tr>
          <th>
            <img src="./images/areaTriangle.jpeg" alt="triangle" width="75%" height="auto" />
          </th>
          <th>
            <h2>Formula</h2>
            <h3>A=(h × b) ÷ 2</h3>
          </th>
        </tr>
      </table>
      <div class="page-content">Enter the base length and height in cm.</div>
      <div class="page-content-php">
        <form action="answer.php" method="POST">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-length-of-triangle">
            <label class="mdl-textfield__label" for="base-length-of-triangle">Base length of triangle (cm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-triangle">
            <label class="mdl-textfield__label" for="height-of-triangle">height of triangle (cm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
            Calculate
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>