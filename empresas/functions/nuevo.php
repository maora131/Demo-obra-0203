<?php
require '../../conexion/conexion.php';
require '../../conexion/sesion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nova Empresa</title>
  <!-- CND de bootstrap -> cambiar cuando toque -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <!-- ESTILOS DE LAS PESTAÑAS Y SU CONTENIDO -> MODIFICAR CON BOOTSTRAP O LO QUE SEA -->
  <!-- <link rel="stylesheet" href="../../tabs.css"> -->
  <link rel="stylesheet" href="../../assets/css/index.css">
  <script src="../../components/js/header2.js"></script>
  <script src="../../components/js/footer2.js"></script>
</head>

<body>

  <!-- header -->
  <header-component></header-component>

  <!-- <div class="container"> -->
  <!-- ESTRUCTURA PARA TENER VARIAS PESTAÑAS DINÁMICAS EN UNA MISMA PÁGINA -->
  <!-- <h2 style="text-align:center">"Novo Rexistro" de Empresa</h2><br> -->
  <h5 class="p-2 success text-center">NOVO REXISTRO DE EMPRESA</h5>

  <div class="t-container my-4">

    <ul class="nav t-tabs">
      <li class="nav-link t-tab">Datos Empresa</li>
      <li class="nav-link t-tab">Seguimento</li>
      <li class="nav-link t-tab">Ofertas de Formación</li>
      <li class="nav-link t-tab">Ofertas de Contratación</li>
      <li class="nav-link t-tab"><a class="text-decoration-none" href="../index.php">Voltar a Empresas</a></li>
    </ul>

    <ul class="t-contents">

      <li class="t-content">
        <!-- <p>Contenido Datos</p> -->
        <!-- <h3 class="p-5 text-left">NOVA EMPRESA</h3> -->

        <form class="row g-3 mt-4" method="POST" action="guardar.php" autocomplete="off">
          <div class="col-md-4">
            <label for="nome" class="control-label">Nome:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="poboacion" class="control-label">Localidade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Localidade..." required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="poboacion" class="control-label">Poboación:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="poboacion" name="poboacion" placeholder="Poboacion" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="actividade" class="control-label">Actividade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="actividade" name="actividade" placeholder="Actividade" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="telefono" class="control-label">Teléfono:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" maxlength="9" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="telefono" class="control-label">Fax:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="fax" name="fax" placeholder="Número de Fax" maxlength="9">
            </div>
          </div>

          <div class="col-md-4">
            <label for="data_alta" class="control-label">Data de alta:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="email" name="data_incorporacion" placeholder="dd-mm-aa" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="poboacion" class="control-label">Persoa de Contacto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="persoa_contacto" name="persoa_contacto" placeholder="" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="orientador" class="control-label">Orientador/a</label>
            <div class="col-sm-10">
              <select class="form-control" id="orientador" name="orientador">
                <option value="">Cea Rodríguez, Alberte</option>
                <option value="">García Barbosa, Eva</option>
                <option value="">De Monasterio Roldan, Celia</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertas_emprego" class="control-label">Ofertas de Emprego:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="email" name="ofertas_contratacion" placeholder="Ofertas emprego" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertas_formacion" class="control-label">Ofertas de Formación:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="email" name="ofertas_formacion" placeholder="Ofertas formacion" required>
            </div>
          </div>

          <div>
            <strong><label for="relacion-conselleria" class="control-label">Relacións coa consellería:</label></strong>
          </div>
          <div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="asesoramiento_sae" value="option1">
              <label class="form-check-label" for="asesoramiento_sae">Asesoramiento SAE</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="axudas" value="option2">
              <label class="form-check-label" for="axudas">Axudas á contratación</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="concesionaria" value="option3">
              <label class="form-check-label" for="inlineCheckbox3">Concesionaria</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="formación" value="option2">
              <label class="form-check-label" for="formacion">Formación</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="mailing" value="option3">
              <label class="form-check-label" for="mailing">Mailing</label>
            </div>
          </div>

          <div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="oferta" value="option1">
              <label class="form-check-label" for="oferta">Oferta de emprego</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="practicas" value="option2">
              <label class="form-check-label" for="practicas">Prácticas</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="prospeccion" value="option3">
              <label class="form-check-label" for="prospeccion">Prospección</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="proveedor" value="option1">
              <label class="form-check-label" for="proveedor">Proveedor</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="solicitude" value="option2">
              <label class="form-check-label" for="solicitude">Solicitude información</label>
            </div>
          </div>

          <div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="desconocida" value="option1">
              <label class="form-check-label" for="desconocida">Descoñecida</label>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="control-label">Notas e consideracións</label>
            <textarea class="form-control" id="notas" name="notas" rows="3"></textarea>
          </div>

          <div class="col-md-4">
            <div class="col-sm-offset-2 col-sm-10">
              <a href="../index.php" class="btn btn-default">Voltar</a>
              <button type="submit" class="btn btn-primary">Gardar</button>
            </div>
          </div>
        </form>

      </li>

      <li class="t-content">
        <!-- <h3 class="p-5 text-left">SEGUIMENTO</h3> -->
        <p>Non se atoparon Seguimentos.</p>
        <!-- BOTON MODAL QUE SE ABRE AL PULSAR EL NUEVO SEGUIMIENTO -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Novo Seguimento</button>
      </li>
      <li class="t-content">
        <p>Non se atoparon Ofertas de Formación</p>
        <button type="submit" class="btn btn-primary">Crear Oferta</button>
      </li>
      <li class="t-content">
        <p>Non se atoparon Ofertas de Contratación</p>
        <button type="submit" class="btn btn-primary">Crear Oferta</button>
      </li>

    </ul>
  </div>
  <!-- </div> -->

  <!-- footer -->
  <footer-component></footer-component>

  <script src="../../tabs.js"></script>

</body>

<!-- FORMULARIO DE LA VENTANA MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Seguimento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="guardar.php" autocomplete="off">

          <div class="mb-3">
            <label for="data_alta" class="control-label">Data de alta:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="data_modal" name="data_incorporacion_modal" placeholder="dd-mm-aa" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="orientador" class="control-label">Orientador/a</label>
            <div class="col-sm-10">
              <select class="form-control" id="orientador_modal" name="orientador_modal">
                <option value="">Cea Rodríguez, Alberte</option>
                <option value="">García Barbosa, Eva</option>
                <option value="">De Monasterio Roldan, Celia</option>
              </select>
            </div>
          </div>

          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Anotacións</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Dispoñible</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Traballa</label>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Pechar</button>
        <button type="button" class="btn btn-primary">Gardar</button>
      </div>
    </div>
  </div>
</div>

</html>
