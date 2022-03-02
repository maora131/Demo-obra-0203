<?php
require '../../conexion/conexion.php';
require '../../conexion/sesion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM persoas WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Persoa</title>
  <!-- CND de bootstrap -> cambiar cuando toque -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- ESTILOS DE LAS PESTAÑAS Y SU CONTENIDO -> MODIFICAR CON BOOTSTRAP O LO QUE SEA -->
  <!-- <link rel="stylesheet" href="../../tabs.css"> -->
  <link rel="stylesheet" href="../../assets/css/index.css">
  <script src="../../components/js/header2.js"></script>
  <script src="../../components/js/footer2.js"></script>
</head>

<body>

  <!-- header -->
  <header-component></header-component>
<main>
  <!-- ESTRUCTURA PARA TENER VARIAS PESTAÑAS DINÁMICAS EN UNA MISMA PÁGINA -->
  <!-- <h2 style="text-align:center">Modificar Persoa</h2><br> -->
  <h5 class="p-2 success text-center">MODIFICAR REXISTRO DE PERSOA</h5>

  <div class="t-container my-4">

    <ul class="nav t-tabs">
      <li class="nav-link t-tab">Datos Personales</li>
      <li class="nav-link t-tab">Formación</li>
      <li class="nav-link t-tab">Experiencia</li>
      <li class="nav-link t-tab">Acciones</li>
      <li class="nav-link t-tab">Ofertas</li>
      <li class="nav-link t-tab"><a class="text-decoration-none" href="../index.php">Voltar a Persoas</a></li>
    </ul>

    <ul class="t-contents">

      <li class="t-content">
        <!-- <p>Contenido Datos</p> -->
        <!-- <h3 class="p-5 text-left">MODIFICAR REXISTRO - DATOS</h3> -->

        <form class="row g-3" method="POST" action="update.php" autocomplete="off">

          <div class="col-md-4">
            <label for="nome" class=" control-label">Nome:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" value="<?php echo $row['nome']; ?>" required>
            </div>
          </div>
          <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

          <div class="col-md-4">
            <label for="primeiro_apelido" class=" control-label">Primeiro Apelido:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="primeiro_apelido" placeholder="Primeiro Apelido" value="<?php echo $row['primeiro_apelido']; ?>" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="segundo_apelido" class="control-label">Segundo Apelido:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="segundo_apelido" placeholder="Segundo Apelido" value="<?php echo $row['segundo_apelido']; ?>" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="nif" class=" control-label">DNI / NIF:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="nif" name="nif" placeholder="Número do DNI" pattern="[0-9]{8}+[A-Z]{1}" maxlength="9" placeholder="Número do DNI" value="<?php echo $row['nif']; ?>" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="data_nacemento" class="control-label">Data de nacemento:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="data_nacemento" name="data_nacemento" placeholder="dd-mm-aa" value="<?php echo $row['data_nacemento']; ?>" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="sexo" class="control-label">Sexo:</label>
            <div class="col-sm-10">
              <select class="form-control" id="sexo" name="sexo">
                <option value="HOME" <?php if ($row['sexo'] == 'HOME') echo 'selected'; ?>>HOME</option>
                <option value="MULLER" <?php if ($row['sexo'] == 'MULLER') echo 'selected'; ?>>MULLER</option>
                <option value="OUTRO" <?php if ($row['sexo'] == 'OUTRO') echo 'selected'; ?>>NON DEFINIDO</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="codigo_postal" class="control-label">Código postal:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código postal" maxlength="5" value="<?php echo $row['codigo_postal']; ?>" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="telefono" class="control-label">Teléfono</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" maxlength="9" value="<?php echo $row['telefono']; ?>" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="email" class="control-label">Correo electrónico:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" value="<?php echo $row['email']; ?>">
            </div>
          </div>

          <br>
          <br>
          <div class="col-md-4">
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>

      </li>

      <li class="t-content">
        <!-- <p>Contenido Formación</p> -->
        <!-- <h3 class="p-5 text-left">MODIFICAR REXISTRO - FORMACIÓN</h3> -->

        <form class="row g-3" method="POST" action="update.php" autocomplete="off">

          <div class="col-md-4">
            <label for="estudo" class="control-label">Estudos Básicos</label>
            <div class="col-md-10">
              <select class="form-control" id="estudos" name="estudos">
                <option value="text"></option>
                <option value="ESO">E.S.O</option>
                <option value="COU">C.O.U</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="superiores" class="control-label">Estudos Superiores</label>
            <div class="col-md-10">
              <select class="form-control" id="superiores" name="superiores">
                <option value="text"></option>
                <option value="uni">Universitarios</option>
                <option value="nouni">Non Universitarios</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="universitarios" class="control-label">Universitarios</label>
            <div class="col-md-10">
              <select class="form-control" id="universitarios" name="universitarios">
                <option value="text"></option>
                <option value="grao">Grao</option>
                <option value="master">Master</option>
                <option value="master">Doutorado</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="non-universitarios" class="control-label">Non Universitarios</label>
            <div class="col-md-10">
              <select class="form-control" id="non-universitarios" name="nonuniversitarios">
                <option value="text"></option>
                <option value="bacharelato">Bacharelato</option>
                <option value="formacion-profesional">Formación Profesional</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="fp" class="control-label">Formación Profesional</label>
            <div class="col-md-10">
              <select class="form-control" id="formacion" name="formacion">
                <option value="text"></option>
                <option value="superior">Superior</option>
                <option value="media">Media</option>
                <option value="basica">Básica</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="familias" class="control-label">Familias profesionais</label>
            <div class="col-md-10">
              <select class="form-control" id="familias" name="familias">
                <option value="text"></option>
                <option value="informatica">Informática e comunicacións</option>
                <option value="admin">Administración e Xestión</option>
                <option value="madeira">Madeira, moble e corcho</option>
                <option value="auga">Enerxía e auga</option>
                <option value="imaxe">Imaxe persoal</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="complementaria" class="control-label">Formación Complementaria</label>
            <div class="col-md-10">
              <select class="form-control" id="complementaria" name="complementaria">
                <option value="text"></option>
                <option value="certificados">Certificados Oficiais</option>
                <option value="curso">Curso Manipulador de Alimentos</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="idiomas" class="control-label">Idiomas</label>
            <div class="col-md-10"></div>
            <select class="form-control" id="idiomas" name="idiomas">
              <optgroup label="Niveis">
                <option value="text"></option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
              </optgroup>
            </select>

            <select class="form-control" id="idiomas" name="idiomas">
              <optgroup label="Curso">
                <option value="text"></option>
                <option value="text">Cambridge</option>
                <option value="text">Oxford</option>
              </optgroup>
            </select>
          </div>

          <div class="col-md-4">
            <label for="otros" class="control-label">Outros</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkbox1">
              <label class="form-check-label" for="defaultCheck">Viviu no estranxeiro</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkbox2">
              <label class="form-check-label" for="defaultCheck">Homologado</label>
              <!-- <label>Homologado</label> -->
              <!-- <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Si
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"> Non -->
            </div>

          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea">Notas e consideracións</label>
            <textarea class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
          </div>

          <br>
          <br>
          <div class="col-md-4">
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>
      </li>

      <li class="t-content">
        <!-- <p>Contenido Experiencia</p> -->
        <!-- <h3 class="p-5 text-left">MODIFICAR REXISTRO - EXPERIENCIA</h3> -->

        <form class="row g-3" method="POST" action="update.php" autocomplete="off">
          <div class="col-md-4">
            <label for="ano_comezo" class="control-label">Ano de comezo:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ano_comezo" name="ano_comezo" placeholder="Ano de comezo" maxlength="4" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="meses" class="control-label">Duración (en meses):</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Número de meses" id="meses" name="meses" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="posto" class="control-label">Posto/curso:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Posto/curso" id="posto" name="posto" required>
            </div>
          </div>

          <br>
          <br>
          <div class="col-md-4">
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>
      </li>

      <li class="t-content">
        <!-- <p>Contenido Acciones</p> -->
        <!-- <h3 class="p-5 text-left">MODIFICAR REXISTRO - ACCIÓNS</h3> -->

        <form class="row g-3" method="POST" action="update.php" autocomplete="off">

          <div class="col-md-4">
            <label for="data_nacemento" class="control-label">Data da 1ª entrevista</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="data_entrevista" name="data_entrevista" placeholder="dd-mm-aa" required>
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
            <label for="canle" class="control-label">Canle de acceso</label>
            <div class="col-sm-10">
              <select class="form-control" id="canle" name="canle">
                <option value="">Web</option>
                <option value="">Física</option>
                <option value="">Por contacto</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label for="canle" class="control-label">Seguemento</label>
            <div class="col-sm-10">
              <select class="form-control" id="canle" name="canle">
                <option value="">Web</option>
                <option value="">Física</option>
                <option value="">Por contacto</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label for="canle" class="control-label">Accións do SOL</label>
            <div class="col-sm-10">
              <select class="form-control" id="canle" name="canle">
                <option value="">Web</option>
                <option value="">Física</option>
                <option value="">Por contacto</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Notas e consideracións</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <br>
          <br>
          <div class="col-md-4">
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>

      </li>

      <li class="t-content">
        <!-- <p>Contenido Ofertas</p> -->
        <!-- <h3 class="p-5 text-left">MODIFICAR REXISTRO - OFERTAS</h3> -->

        <form class="row g-3" method="POST" action="update.php" autocomplete="off">
          <div class="col-md-4">
            <label for="ofertade" class="control-label">Tipo de oferta:</label>
            <div class="col-sm-10">
              <select class="form-control" id="ofertade" name="ofertade">
                <option disabled selected>Elixe</option>
                <option value="contratacion">Contratación</option>
                <option value="formacion">Formación</option>
                <option value="axuda">Axuda á contratación</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertaemp" class="control-label">Empresa:</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Empresa" class="form-control" id="ofertaemp" name="ofertaemp">
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertapost" class="control-label">Posto:</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Posto" class="form-control" id="ofertapost" name="ofertapost">
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertanum" class="control-label">Nº de ofertas:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="ofertanum" name="ofertanum">
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertadata" class="control-label">Data da oferta:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="ofertadata" name="ofertadata">
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertadata" class="control-label">Fin da oferta:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="ofertadata" name="ofertadata">
            </div>
          </div>

          <br>
          <br>
          <div class="col-md-4">
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>
      </li>

    </ul>
  </div>
  </main>
  <!-- footer -->
  <footer-component></footer-component>

  <script src="../../tabs.js"></script>

</body>

</html>
