<?php
require 'conexion/conexion.php';
require 'conexion/sesion.php';
// este cacho de php tiene que ir SIEMPRE al inicio de los archivos de las páginas (a no ser que
// solo actúen como funciones y no haya front-end), y excepto aquí en el index deben ponerse los
// dos puntos y / antes del nombre de la carpeta (ver por ejemplo nuevo.php de persoas)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OBRA 2 SOL</title>
  <!-- CND de bootstrap -> cambiar cuando toque -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="../assets/css/index.css">
  <script src="../components/js/header2.js"></script>
  <script src="../components/js/footer2.js"></script>
</head>

<body>

  <!-- header -->
  <header-component></header-component>

  <div class="container">

    <div class="p-4 m-2">
      <h1>Benvide á aplicación do Servizo de Orientación Laboral</h1>
    </div>

    <div class="card">

      <div class="row">
        <div class="col col-sm-8 d-flex flex-column justify-content-left">
          <img src="../img/cies.jpg" width="650" height="400" alt="cies">
        </div>

        <div class="col col-sm-4 flex-column justify-content-right">
          <div class="card-body mt-5">
            <!-- <h4 class="card-title">Enlaces directos</h4> -->
            <ul class="list-unstyled">
              <li class="mt-3">
                <h4 class="card-text">
                  <a class="text-muted" href="https://sede.vigo.org/portal-empregado/#/gestionLogin"><img class="bi m-1" height="32" src="../../img/portal.png"></a>
                  Portal do empregado
                </h4>
              </li>
              <li class="mt-3">
                <h4 class="card-text">
                  <a class="text-muted" href="https://correo.vigo.org/zimbra/"><img class="bi m-1" height="32" src="../../img/peque-zimbra.png"></a>
                  Correo Zimbra
                </h4>
              </li>
              <li class="mt-3">
                <h4 class="card-text">
                  <a class="text-muted" href="https://hoxe.vigo.org/"><img class="bi m-1" height="32" src="../../img/escudo.png"></a>
                  Concello de Vigo
                </h4>
              </li>
              <li class="mt-3">
                <h4 class="card-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-filetype-pdf m-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                  </svg>
                  Manual do usuario
                </h4>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <!-- <div class="row mt-5">
<<<<<<< HEAD
      <div class="col col-sm-8">
        <h4>Últimos avisos</h4>
=======
    <div class="col col-sm-8">
        <h3>Últimos avisos</h3>
>>>>>>> ce9efd0795756c9bff01c0370a4b3ad713aa2943
        <table class="table table-striped table-bordered table-sm">
          <thead>
            <tr>
              <th class="col col-sm-2">Data</th>
              <th class="col col-sm-6">Aviso</th>
<<<<<<< HEAD
=======
              // <th class="col col-sm-4">Enlace</th> 
>>>>>>> ce9efd0795756c9bff01c0370a4b3ad713aa2943
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>24-02-2022</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            </tr>
            <tr>
              <td>25-02-2022</th>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            </tr>
            <tr>
              <td>03-03-2022</th>
              <td>Reunión da Obra.</td>
            </tr>
            <tr>
              <td>08-03-2022</th>
              <td>Día Internacional da Muller.</td>
            </tr>
          </tbody>
        </table>
      </div>
<<<<<<< HEAD
    </div> -->
  </div>
=======
    </div>
  </div> -->
>>>>>>> ce9efd0795756c9bff01c0370a4b3ad713aa2943

  <!-- footer -->
  <footer-component></footer-component>
</body>

</html>

<!-- el código html de arriba es el del index que creamos con las dependencias + un h1 de prueba
y un enlace para salir (comprobar que funciona el logout) -->
