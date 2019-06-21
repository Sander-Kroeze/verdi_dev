<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="naam" value="" placeholder="voer je naam in">
      <input type="color" name="kleur" value="">
      <input type="hidden" name="submit" value="true">
      <input type="submit" id="submit" value=" Verstuur ">
    </form>
  </body>
</html>

<?php
if (isset($_POST["submit"])) {
  $naam   = htmlspecialchars($_POST["naam"]);
  $kleur = htmlspecialchars($_POST["kleur"]);

  echo "<p><font color='" . $kleur ."'>" . $naam ."</font></p>";
}
 ?>
