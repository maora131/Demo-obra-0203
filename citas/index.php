<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./index.css">
  <script src="../components/js/header2.js"></script>
  <script src="../components/js/footer2.js"></script>

</head>

<body>

  <header-component></header-component>

  <div class="master-container">

    <div class="container-resumo">
      <h1>Axenda</h1>

      <?php
      $sql = "SELECT * FROM citas";
      $resultado = $mysqli->query($sql);

      if ($resultado->num_rows > 0) {
        echo "<table class='table'><tr><th>Resolto</th><th>Data</th><th>Nome</th><th>Hora de comezo</th><th>Hora de saída</th></tr>";
        while ($row = $resultado->fetch_assoc()) {
          echo "<tr><td><input type='checkbox'></form><td>" . $row["data"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["horain"] . "</td><td>" . $row["horaout"] . "</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 resultados";
      }

      $mysqli->close();
      ?>
      <div class="row">
        <a href="crear.php" class="btn btn-primary mb-4">Nova Cita</a>
      </div>
    </div>

    <div class="container-notas">
      <h2>Notas</h2>

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

    </div>
  </div>

  <script src="./index.js"></script>

  <footer-component></footer-component>
</body>



</html>
