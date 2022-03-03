<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';
?>

<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="../assets/css/index.css">
  <script src="../components/js/header2.js"></script>
  <script src="../components/js/footer2.js"></script>

</head>

<body>
  <!-- HEADER -->
  <header-component></header-component>

  <!-- MAIN -->
  <div class="container mt-5">
    <h4>ENGADIR CITA</h4>

    <form class="form mt-5" action="guardar.php" method="post">

      <div class="row form-group">

        <div class="col-sm-5">
          <label class="required control-label mt-2">Data</label>
          <input class="form-control date-input" type="date" name="data" id="data" data-trigger="hover" data-toggle="popover">
        </div>

        <div class="col-sm-5">
          <label class="required control-label mt-2">Nome</label>
          <input class="form-control" type="text" name="nome" id="nome">
        </div>

      </div>

      <div class="row form-group">

        <div class="col-sm-5">
          <label class="required control-label mt-2">Hora de comezo</label>
          <input class="form-control time-input" type="text" name="horain" id="horain">
        </div>

        <div class="col-sm-5">
          <label class="required control-label mt-2">Hora de saída</label>
          <input class="form-control time-input" type="text" name="horaout" id="horaout">
        </div>

      </div>

      <div class="row form-group">
        <div class="col-sm-4 mt-5">
          <a href="./index.php" class="btn btn-default">Voltar</a>
          <button type="submit" class="btn btn-primary">Gardar</button>
        </div>
      </div>

    </form>
  </div>

  <!-- FOOTER -->
  <footer-component></footer-component>
</body>
