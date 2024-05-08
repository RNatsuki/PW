<?php
include 'db.php';


$instance = DatabaseConnectionMysqli::get_instance();

$data = $instance->query("SELECT * FROM producto");



$products = $data->fetch_all(MYSQLI_ASSOC);



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;subset=latin-ext">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/Bootstrap-Cards-v2.css">
  <link rel="stylesheet" href="assets/css/MENU-Bold-BS4-Header-with-HTML5-Video-Background.css">
  <link rel="stylesheet" href="assets/css/MENU-Navbar---Apple-1.css">
  <link rel="stylesheet" href="assets/css/MENU-Navbar---Apple.css">
  <link rel="stylesheet" href="assets/css/MENU.css">
  <link rel="stylesheet" href="assets/css/reparandoMenuResponsivo.css">


  <style>
    /*Estilo para ajustar los parrafos a una cantidad de renglones */
    #parrafoAltura {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      height: 40px;
    }

    button {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
    }

    #card-body {
      min-height: 600px;
    }
  </style>


</head>

<body>
  <?php include_once 'menu.php' ?>

  <div class="
      bootstrap_cards2
      container
      py-5
      mt-5
    ">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Imagen</th>
          <th scope="col">Titulo</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col">Categoria</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) {

        ?>
          <tr>
            <td>
              <img width="100px" class="mb-3 cover" src="<?= "data:image/jpeg;base64," . base64_encode($product["imagen"]); ?>" class="img-fluid d-block mx-auto mb-3">
            </td>
            <td class="border ">
              <?= $product['nombre'] ?>
            </td>
            <td class="border ">
              <?= $product['descripcion'] ?>
            </td>
            <td class="border ">
              <?= $product['precio'] ?>
            </td>
            </td>
            <td class="border ">
              <?= $product['categoria'] ?>
            </td>
            <td class="border ">
              <div class="d-flex gap-2   ">
                <a href="editar.php?id=<?= $product['id'] ?>" class="btn btn-warning">Editar</a>
                <a href="eliminar.php?id=<?= $product['id'] ?>" class="btn btn-danger">Eliminar</a>
              </div>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>


  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/MENU-Navbar---Apple.js"></script>
</body>


</body>

</html>
