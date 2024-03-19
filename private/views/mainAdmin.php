<?php
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
include("../code/config.php");
$sql = "SELECT * FROM users WHERE name LIKE '%$varsesion'";
$resultado = mysqli_query($link, $sql);
$filas = mysqli_fetch_array($resultado);
if ($varsesion == null || $varsesion = '') {
  header("location:../../index.php");
  die();
}

if ($filas['user_rol'] == 2) {

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>GaDo Studio | Bienvenido</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/img/icons/Logo.png" />
    <link rel="stylesheet" href="../../private/styles/style.css">
    <!-- Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  </head>

  <body>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-light p-4">
          <h4 class="text-dark">Menu</h4>
          <a href="https://drive.google.com/drive/folders/1jV0d3DTs0QakGZLYAZpitso42Zo7LF3Y?usp=sharing" class="mon-reg">Información</a><br>
          <a href="faqadmin.php" class="mon-reg">Ayuda</a><br>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light shadow p-3 mb-5 bg-white scale-in-ver-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
          aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="../../public/img/icons/Logo.png" width="30" height="30" class="align-top justify-content-center"
            alt="">
          GaDo Studio
        </a>
        <a href="../../public/cerrar_sesion.php" class="btn btn-outline-danger" type="submit"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
            <path fill-rule="evenodd"
              d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
          </svg> Logout</a>
      </nav>
    </div>
    <!--Contenedores del cuerpo principal-->
    <div class="float-child1 swing-in-top-fwd2">
      <div class="green">
        <div class="intern1 tracking-in-expand">
          <h3>Bienvenido</h3>
          <h5>
            <?php echo htmlspecialchars($_SESSION["usuario"]); ?>
          </h5><br>
          <img src="../../public/img/icons/AdminIcon.png" alt="" width="75px" height="75px">
        </div>
        <div class="intern2 tracking-in-expand">
          <br>
          <?php
          $sqlu = "SELECT * FROM users WHERE  name LIKE '%$_SESSION[usuario]'";
          $Pack = mysqli_query($link, $sqlu);

          while ($filas2 = mysqli_fetch_assoc($Pack)) {
            $originalDate2 = $filas2['created_at'];
            $newDate2 = date("d/m/Y", strtotime($originalDate2));

            ?>
            <p>Paquete:
              <?php echo $filas2['package'] ?>
            </p><br>

            <p>Fecha de Creación:
              <?php echo $newDate2 ?>
            </p><br>
            <?php
          }

          ?>
        </div>
      </div>
    </div>
    <div class="float-child2 swing-in-top-fwd">
      <div class="blue tracking-in-contract-bck">
        <h3>Codigos:</h3>
        <?php


        $resultadofinal = $filas['id_user'];

        $sql3 = "SELECT * FROM students WHERE id_user_student = $resultadofinal";
        $num_activos = mysqli_query($link, $sql3);

        while ($name_school = mysqli_fetch_assoc($num_activos)) {

          ?>
          <div class="btn-group">
            <h3 id="code"  class="" style="margin: 25px;">
              <?php echo $name_school['code_student'] ?>
            </h3>
            <br><br>
          </div>
          <?php
        }

        ?>
      </div>
    </div>
    <!-- BOTONES DE ACCION -->
    <div class="float-child3">
      <div class="green">
        <div class="intern3 scale-in-center">
          <a href="editpageAdmin.php"><img src="../../public/img/icons/galeryIcon.png" alt="" width="50px"
              height="50px"></a>
          <p style="color: black;">Ver Fotolibro</p>
        </div>

        <div class="intern5 scale-in-center">
          <a href="faqadmin.php"><img src="../../public/img/icons/Ayudaicon.png" alt="" width="50px" height="50px"></a>
          <p style="color: black;">Ayuda</p>
        </div>
      </div>
    </div>
    <!-- BOTONES DE ACCION -->
  </body>


  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="m-4 d-none d-lg-block"><br>
      <span>Siguenos en nuestras redes sociales de GaDo Studio:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div><br>
      <a href="https://wa.link/ymq35d" target="_blank" class="btn btn-link btn-floating btn-lg text-reset me-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
          viewBox="0 0 16 16">
          <path
            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg>
      </a>
      <a href="https://www.facebook.com/gado.estudio" target="_blank"
        class="btn btn-link btn-floating btn-lg text-reset me-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
          viewBox="0 0 16 16">
          <path
            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </svg>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          
            <a href="mailto:studiosgado@gmail.com?Subject=INFORMACIÓN%20SOBRE%20SUS%20SERVICIOS">studiosgado@gmail.com</a>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <img src="../../public/img/icons/CloverNetLogoGray.png" alt="" width="25px" height="25px">
    ©
    <script src="../../private/code/copyrightyear.js"></script>
    <a class="text-reset fw-bold" target="_blank" href="">clovernetmx</a>
  </div>
  <!-- Copyright -->
  </footer>

  </html>
  <?php
} else {
  session_start();
  session_destroy();
  header("location:../../public/index.php");
}
?>