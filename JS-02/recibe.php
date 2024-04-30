<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recibe el formulario</title>
</head>

<body>
  <?php

  $var1 = $_POST['text'];
  $var2 = $_POST['email'];
  $var3 = $_POST['password'];
  $var4 = $_POST['url'];
  $var5 = $_POST['int'];
  $var6 = $_POST['phone'];
  $var7 = $_POST['float'];
  $var8 = $_POST['postal'];

  ?>


  <h1>Recibiendo datos</h1>

  <div>
    <input type="text" value="<?= $var1; ?>">
    <input type="text" value="<?= $var2; ?>">
    <input type="text" value="<?= $var3; ?>">
    <input type="text" value="<?= $var4; ?>">
    <input type="text" value="<?= $var5; ?>">
    <input type="text" value="<?= $var6; ?>">
    <input type="text" value="<?= $var7; ?>">
    <input type="text" value="<?= $var8; ?>">

  </div>



</body>

</html>
