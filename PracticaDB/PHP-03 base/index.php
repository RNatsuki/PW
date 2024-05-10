<?php
include_once 'db.php';

$categoria = $_GET['categoria'] ?? null;

$data = null;

if (is_null($categoria)) {
  $data = DatabaseConnectionMysqli::query("SELECT * FROM producto");
} else {
  $data = DatabaseConnectionMysqli::query("SELECT * FROM producto WHERE categoria = '$categoria'");
}
$products = $data->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

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
  <?php
  include_once 'menu.php';
  ?>
  <div class="bootstrap_cards2">
    <div class="container py-5">
      <h2 id="titulo" class="font-weight-bold mb-2">Productos</h2>
      <div class="row pb-5 mb-4">
        <?php foreach ($products as $product) { ?>
          <!-- Card Begins  -->
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="card rounded shadow-sm border-0" id="tarjeta">
              <div class="card-header bg-transparent border-0 text-center text-uppercase font-weight-bold">
                <strong><?= $product['categoria'] ?></strong>
              </div>
              <div id="card-body" class="card-body p-4">
                <img class="
                card-img-top rounded
                img-fluid d-block mx-auto
                mb-3 cover" src="<?= "data:image/jpeg;base64," . base64_encode($product["imagen"]); ?>

                " alt="" class="img-fluid d-block mx-auto mb-3">
                <h5> <a href="#" class="text-dark"><?= $product["nombre"] ?></a></h5>
                <p id="parrafoAltura" class="small text-muted font-italic"><?= $product["descripcion"] ?></p>
                <div>
                  <span class="text-muted">$<?= $product["precio"] ?></span>
                </div>
                <button type="button" class="btn btn-success">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
                  </svg>
                  Agregar
                </button>
              </div>
            </div>
          </div>
          <!-- Card Ends  -->
        <?php } ?>
      </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/MENU-Navbar---Apple.js"></script>
</body>
</html>
