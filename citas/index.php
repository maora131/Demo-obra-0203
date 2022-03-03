<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';

$where = "";

if (!empty($_POST)) {
  $valor = $_POST['campo'];
  if (!empty($valor)) {
    $where = "WHERE nome LIKE '%" . $valor . "%'";
  }
}
$sql = "SELECT * FROM citas $where";
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="./index.css"> NO SE USA -->
  <link rel="stylesheet" href="../assets/css/index.css">
  <script src="../components/js/header2.js"></script>
  <script src="../components/js/footer2.js"></script>

</head>

<body>

  <header-component></header-component>

  <div class="container">

    <div class="row"></div>
    <div class="row"></div>

    <div class="row justify-content-center">

      <div class="col col-sm-5">
        <!-- <h3>CALENDARIO</h3> -->
        <img src="../img/calendar.png" alt="calendar" class="mw-100">
      </div>

      <div class="col col-sm-7">
        <!-- <h3 class="mt-2">AXENDA de CITAS</h3> -->

        <div class="row table-responsive mt-5">

          <table class="table table-striped table-hover mt-4">
            <thead>
              <tr>
                <th class="col-sm-1">Resolto</th>
                <th class="col-sm-2">Data</th>
                <th class="col-sm-2">Nome</th>
                <th class="col-sm-2">Hora comezo</th>
                <th class="col-sm-2">Hora saída</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <tr>
                  <td class="justify-content-center"><input type='checkbox'></td>
                  <td><?php echo $row['data']; ?></td>
                  <td><?php echo $row['nome']; ?></td>
                  <td><?php echo $row['horain']; ?></td>
                  <td><?php echo $row['horaout']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

        <button type="button" class="btn btn-light border"><a href="crear.php" class="text-decoration-none">Nova Cita</a></button>
      </div>

    </div>

  </div>
  </div>

  <footer-component></footer-component>

  <script src="./citas.js"></script>

</body>

<!-- <div class="col col-sm-4">
        <h3>NOTAS</h3>
        <div class="list__items">
          <ul></ul>
        </div>

        <div class="input__box">
          <input type="text" name="" id="#input__text" placeholder="Nova nota">
          <button class="add__btn"><i class="far fa-save fa-sm"></i></button>
        </div>

        <div class="cat__details">
          <span data-color="#f1c40f">
            <p>Citas</p>
            <div class="cat__type" style="background:#f1c40f;"></div>
          </span>
          <span data-color="#3498db">
            <p>Documentación</p>
            <div class="cat__type" style="background:#3498db;"></div>
          </span>
          <span data-color="#F94920">
            <p>Reunións</p>
            <div class="cat__type" style="background:#F94920;"></div>
          </span>
          <span data-color="#34495e">
            <p>Chamadas</p>
            <div class="cat__type" style="background:#34495e;"></div>
          </span>
        </div>
      </div> -->

</html>
