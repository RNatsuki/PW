<?php
include_once 'conexion.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['usuario'];
  $password = $_POST['pass'];

  $sql = "SELECT * FROM Usuarios WHERE username = '$username' AND password = '$password'";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    // Iniciar el us de variables de sesión
    session_start();
    // Guardar el usuario en una variable de sesión
    $row = $result->fetch_assoc();

    $_SESSION['user'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    header('Location: principal.php');
    die();
  } else {
    //Enviar a la url de login con un mensaje de error
    header('Location: index.php?error=1');
  }
}

?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
  <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row mh-100vh">

      <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
        <div class="m-auto w-lg-75 w-xl-50">
          <h2 class="text-info fw-light mb-5" style="text-align: center;"><i class="far fa-user" style="font-size: 69px;"></i></h2>
          <form style="text-align: center;" action="index.php" method="post">
            <div class="form-group mb-3">
              <div>
                <?= isset($_GET['error']) ? '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>' : '' ?>
              </div>
              <label class="form-label text-secondary">Usuario</label>
              <input class="form-control" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" name="usuario">
            </div>
            <div class="form-group mb-3">
              <label class="form-label text-secondary">Contraseña</label>
              <input class="form-control" type="password" name="pass" required="">
            </div>
            <button class="btn btn-info mt-2" type="submit">Entrar</button>
          </form>
          <p class="mt-3 mb-0"><a class="text-info small" href="#">Olvidaste la contraseña</a></p>
        </div>
      </div>
      <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background: url(&quot;assets/img/IMG_0227.jpg&quot;) center center / cover;">

      </div>
    </div>
  </div>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
