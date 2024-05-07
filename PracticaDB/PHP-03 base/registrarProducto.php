<?php
include_once 'db.php';

$categoria = $_GET['categoria'] ?? null;

$data = null;

if (is_null($categoria)) {
  $data = DatabaseConnectionMysqli::get_instance()->query("SELECT * FROM producto");
} else {
  $data = DatabaseConnectionMysqli::get_instance()->query("SELECT * FROM producto WHERE categoria = '$categoria'");
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
  d
  <section class="position-relative py-4 py-xl-5" id="regProd">
    <div class="container position-relative mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card mb-5">
            <div class="card-body p-sm-5">
              <h2 class="text-center mb-4">Registrar producto</h2>
              <form method="post" action="./functions/registrar.php" enctype="multipart/form-data">
                <div class="mb-3">
                  <input class="form-control" type="file" name="imagen" required>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text" id="name-1" name="titulo" placeholder="Título" required>
                </div>
                <div class="mb-3">
                  <textarea class="form-control" id="message-2" name="descripcion" rows="6" placeholder="Descripción" required>
                  </textarea>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="number" name="precio" placeholder="$Precio" required>
                </div>
                <div class="mb-3">
                  <select class="form-select" name="categoria">
                    <optgroup label="Categoría">
                      <option value="Anime">Anime</option>
                      <option value="Videojuegos">VideoJuegos</option>
                    </optgroup>
                  </select>
                </div>
                <div>
                  <button class="btn btn-primary d-block w-50" type="submit">Registrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/MENU-Navbar---Apple.js"></script>
</body>

</html>
