<?php
include_once 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
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

    $data = Capsule::table('users')->get();


  ?>
</body>

</html>
