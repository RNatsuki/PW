<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: index.php');
  die();
}

?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
  <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light" style="border-bottom-width: 3px;border-bottom-color: rgb(8,8,8);">
    <div class="container-fluid">
      <div><a class="navbar-brand d-none" href="#"> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
      <div class="collapse navbar-collapse" id="navcol-1" style="height: 50px;">
        <ul class="navbar-nav me-auto main-nav">
          <li class="nav-item" style="height: 28px;margin-top: 6px;"><a class="nav-link" href="Principal.php" style="background: #ffffff;overflow: visible;padding: 0px;height: 28px;margin-top: 6px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 28px;margin-top: -33px;">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 22.8787C4.34315 22.8787 3 21.5355 3 19.8787V9.87866C3 9.84477 3.00169 9.81126 3.00498 9.77823H3C3 9.20227 3.2288 8.64989 3.63607 8.24262L9.87868 2.00002C11.0502 0.828445 12.9497 0.828445 14.1213 2.00002L20.3639 8.24264C20.7712 8.6499 21 9.20227 21 9.77823H20.995C20.9983 9.81126 21 9.84477 21 9.87866V19.8787C21 21.5355 19.6569 22.8787 18 22.8787H6ZM12.7071 3.41423L19 9.70713V19.8787C19 20.4309 18.5523 20.8787 18 20.8787H15V15.8787C15 14.2218 13.6569 12.8787 12 12.8787C10.3431 12.8787 9 14.2218 9 15.8787V20.8787H6C5.44772 20.8787 5 20.4309 5 19.8787V9.7072L11.2929 3.41423C11.6834 3.02371 12.3166 3.02371 12.7071 3.41423Z" fill="currentColor"></path>
              </svg> </a></li>
        </ul>
        <ul class="navbar-nav ms-auto main-nav" style="height: 28px;">
          <li class="nav-item" style="margin-right: 15px;height: 28px;"><a class="nav-link" href="Perfil.php" style="background: #ffffff;height: 28px;padding: 0px;"><?= $_SESSION['user'] ?></a></li>
          <li class="nav-item" style="height: 28px;margin-top: 6px;"><a class="nav-link"
           href="" style="background: #ffffff;height: 28px;padding: 0px;margin-top: 6px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 25px;background: #ffffff;margin-top: -25px;">
                <path d="M8.51428 20H4.51428C3.40971 20 2.51428 19.1046 2.51428 18V6C2.51428 4.89543 3.40971 4 4.51428 4H8.51428V6H4.51428V18H8.51428V20Z" fill="currentColor"></path>
                <path d="M13.8418 17.385L15.262 15.9768L11.3428 12.0242L20.4857 12.0242C21.038 12.0242 21.4857 11.5765 21.4857 11.0242C21.4857 10.4719 21.038 10.0242 20.4857 10.0242L11.3236 10.0242L15.304 6.0774L13.8958 4.6572L7.5049 10.9941L13.8418 17.385Z" fill="currentColor"></path>
              </svg></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col" style="height: 100vh;text-align: center;">
        <h1 style="text-align: center;margin-top: 78px;">Esta es la pagina principal</h1>
      </div>
    </div>
  </div>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
