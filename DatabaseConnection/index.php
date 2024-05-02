<?php
include_once 'mysqli.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Database Connection</h1>
  <?php

  $database =  DatabaseConnectionMysqli::get_instance();
  $database2 = DatabaseConnectionMysqli::get_instance();
  print_r($database === $database2 ? "true": "false");

  ?>
</body>

</html>
