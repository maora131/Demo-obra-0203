<!DOCTYPE html>
<html lang="gl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/login.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="../components/js/footer2.js"></script>
  <title>Login de Usuario</title>
</head>
<body>
<!-- MENU SUPERIOR -->
<header class="p-1 mb-3 border-bottom color">

      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              <use xlink:href="#bootstrap" />
            </svg>
          </a>
          <div class='menu-bar-navigation-links'>
            <h1>Servizo de Orientación Laboral</h1>

          </div>
        </div>
      </div>
    </header>

<main>
  <!-- FORMULARIO -->

  <div id="login-container" class="form-signin d-flex justify-content-center ">
    <form action="login.php" method="POST" class="form login">

      <!-- <img class="mb-4" src="assets/img/logo.png" alt="" width="72" height="65"> -->
      <h1 class="h3 mb-3 fw-normal text-center">Inicia sesión</h1>
      <!-- Usuario -->
      <div class="form-floating">
        <div class="input-group w-100">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
            </svg>
          </span>
          <input name="nome" type="text" class="form-control" placeholder="Usuario" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>
      <!-- Contrasinal -->
      <div class="form-floating">
        <div class="input-group w-100">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
              <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
              <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg>
          </span>
          <input name="clave" type="text" class="form-control" placeholder="Clave" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recórdame
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-secondary" type="submit">ACCEDER</button>

    </form>
  </div>

</main>

<!-- FOOTER -->
<footer-component></footer-component>

</body>

<?php
if ($_POST) {
  // session_start();
  require '../conexion/sesion.php';
  require '../conexion/login-conn.php';

  $_SESSION['usuario'] = "miusuario";
  $_SESSION['estado'] = "conectado";

  $nome = $_POST['nome'];
  $clave = $_POST['clave'];

  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = $conexion->prepare("SELECT * FROM usuarios WHERE nome = :nome AND clave = :clave");
  $query->bindParam(":nome", $nome);
  $query->bindParam(":clave", $clave);
  $query->execute();
  $usuario = $query->fetch(PDO::FETCH_ASSOC);

  if ($usuario) {
    $_SESSION["usuario"] = $usuario["nome"];
    header("location: ../index.php");
  } else {
    echo "Nome ou clave non válido";
  }
}
?>

</html>
