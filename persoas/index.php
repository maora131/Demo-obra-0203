<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';

$where = "";

if (!empty($_POST)) {
  $valor = $_POST['campo'];
  if (!empty($valor)) {
    $where = "WHERE nif LIKE '%" . $valor . "%'";
  } else if (!empty($valor)) {
    $where = "WHERE sexo LIKE '%" . $valor . "%'";
  }
}
$sql = "SELECT * FROM persoas $where";
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="gl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/index.css">
  <script src="../components/js/header2.js"></script>
  <script src="../components/js/footer2.js"></script>
  <title>Persoas</title>
</head>

<body>

  <!-- header -->
  <header-component></header-component>

  <!-- main -->
  <!-- container, botón nuevo, buscador, tabla -->
  <div class="container">
    <!-- <h2 style="text-align:center">Persoas</h2> -->

    <div class="row"></div>
    <div class="row"></div>

    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <h5>PERSOAS</h5>

        <form class="d-flex" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <a href="functions/nuevo.php" class="btn btn-outline-success mb-3 personita">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
              <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z">
              </path>
            </svg>
          </a>

          <div class="input-group mb-3 w-6">

            <input id="campo" name="campo" class="form-control me-2 ml-1" type="text" placeholder="Búsqueda por NIF" aria-label="Search">
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-outline-success">
          </div>
        </form>
      </div>
    </nav>


    <hr>

    <div class="row table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="col-sm-2">Nome</th>
            <th class="col-sm-2">1º Apelido</th>
            <th class="col-sm-2">2º Apelido</th>
            <th class="col-sm-2">DNI/NIF</th>
            <th class="col-sm-1">Nacemento</th>
            <th class="col-sm-1">Sexo</th>
            <th class="col-sm-1">C.P.</th>
            <th class="col-sm-1">Tlf.</th>
            <th class="col-sm-2">Email</th>
            <th class="col-sm-2">Accións</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <tr>
              <!-- <td><?php echo $row['id']; ?></td> -->
              <td><?php echo $row['nome']; ?></td>
              <td><?php echo $row['primeiro_apelido']; ?></td>
              <td><?php echo $row['segundo_apelido']; ?></td>
              <td><?php echo $row['nif']; ?></td>
              <td><?php echo $row['data_nacemento']; ?></td>
              <td><?php echo $row['sexo']; ?></td>
              <td><?php echo $row['codigo_postal']; ?></td>
              <td><?php echo $row['telefono']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <!-- <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                <td><a href="functions/modificar.php?id=<?php echo $row['id']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href="functions/eliminar.php?id=<?php echo $row['id'] ?>"><i class="fas fa-trash-alt"></i></a></td> -->
              <td><a class="red-icons" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                  </svg></a>
              <a class="red-icons" href="functions/modificar.php?id=<?php echo $row['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                  </svg></a>
              <a class="red-icons" href="functions/eliminar.php?id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                  </svg></a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- ESTA ERA LA FLECHA QUE SUBÍA -->
  <!-- <button id="myBtn"><a href="#top" style="color: white; text-decoration: none";><i class="fas fa-chevron-up"></i></a></button> -->
  <!-- <div id="myBtn"><a href="#top" ;><i class="fas fa-chevron-up"></i></a></div> -->

  <!-- footer -->
  <footer-component></footer-component>

</body>

</html>
