<?php
session_start();

if ($_SESSION['size'] == "") $_SESSION['size'] = "8x8";
if ($_SESSION['nom'] == "") $_SESSION['nom'] = "unknown";

?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="The classic Minesweeper game - Pescamines - Buscaminas">
<meta name="viewport" content="width=440">
<script type="text/javascript" SRC="minesweeper.js"></script>
<link href="minesweeper.css" rel=stylesheet>
<title>Minesweeper in Javascript, Pescamines, Buscaminas. Competició</title>
</head>
<?php
if ($_SESSION['size'] == "8x8") echo "<body onload= \"init(8, 64, 10)\">";
if ($_SESSION['size'] == "12x12") echo "<body onload= \"init(12, 144, 22)\">";
if ($_SESSION['size'] == "16x16") echo "<body onload= \"init(16, 256, 40)\">";
?>

<div id="wrap">

  <div id="header">
  <h1>Minesweeper - Pescamines - Buscaminas</h1>
  </div>

  <div id="main">
    <span id="tamany">Tamany: <?php echo $_SESSION['size'];?></span><br />
    <select name="tamany" onchange="canvi_tamany(this.value)">
      <option value="8x8" <?php if ($_SESSION['size'] == "8x8") echo "selected='selected'"; ?> >8x8</option>
      <option value="12x12" <?php if ($_SESSION['size'] == "12x12") echo "selected='selected'"; ?> >12x12</option>
      <option value="16x16" <?php if ($_SESSION['size'] == "16x16") echo "selected='selected'"; ?> >16x16</option>
    </select>
    <br />

    <span id="user">User: <?php echo $_SESSION['nom'];?></span><br />
    <input type="text" placeholder="posa el teu nom" name="nom"onchange="canvi_nom(this.value)" size="7" ></input><br />

    <div id="resultats"></div>

    <div id="hall_of_fame">
      <h2>Hall of Fame</h2>
    </div>
  </div>
  
  <div id="sidebar">

    <table id="sqTable" onmouseup="return false">
    <!-- Aquí va la taula HTML que es genera en el script, al principi de init() -->
    </table>
  </div>
  
  <div id="footer">
  Back to <a href="http://www.retroplaneta.com">retroplaneta.com</a><br />
  Javascript original code: Andrew Birrell (https://birrell.org/andrew/mineswee
  Several improvements, generalization to NxM cells, registering users and scor
  </div>


</div>

</body>
</html>