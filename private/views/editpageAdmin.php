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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GaDo Studio | Edit Page</title>
    <link rel="shortcut icon" href="../../public/img/icons/Logo.png" />
    <link rel="stylesheet" href="../../private/styles/style.css">
    <link rel="stylesheet" href="../../private/styles/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
  </head>
  <script>
    $(document).ready(function () {
      $('.bxslider').bxSlider();
    });
  </script>
  <style>
     .hidden {
    display: none;
  }
  .bx-default-pager {
    display: none;
  }
  </style>
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
        <a class="btn btn-outline-success" type="submit" href="mainAdmin.php"><svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
          </svg> Back</a>
      </nav>
    </div>
    <h2 style="text-align: center;">Foto Libro</h2><br>

    <?php
    $folder = '../collage/images/' . $filas['id_user'] . '/pages';
    $images = glob($folder . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    ?>
    <div class="container swing-in-top-fwd2">
      <ul class="bxslider">
        <?php
        foreach ($images as $image):
          $contar = $contar + 1;
          ?>
          <li><img src="<?php echo $image; ?>" alt=""></li>
          <?php
        endforeach;
       
        $valor2 = $filas['total_pages'];
        $porcentaje = round(($contar / $valor2) * 100, 0);
        $porcentaje = number_format($porcentaje, 0);

        $userLoad = $filas['id_user'];
        $currentPages = "UPDATE `users` SET `current_pages`='$contar' WHERE `id_user`='$userLoad'";
        mysqli_query($link, $currentPages);
        ?>

      </ul>
    </div>



    <!-- BOTONES DE ACCION -->


    <div class="float-child3">
      <div class="green">

      <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
          <div class="progress" style="width: 60%;">
            <div class="progress-bar progress-bar-striped progress-bar-animated" aria-label="Progress Label" role="progressbar" style="width: <?php echo $porcentaje; ?>%;"
              aria-valuenow="<?php echo $porcentaje; ?>" aria-valuemin="0" aria-valuemax="100"> <?php echo $contar . '/' . $valor2; ?></div>
          </div>
        </div>
        <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
          <div>
            <h1>
              <?php echo $porcentaje . '%'; ?>
            </h1>
          </div>
        </div>
        <div class="intern3 scale-in-center" id="mi-imagen">
          <a href="../collage/indice.php"><img src="../../public/img/icons/editIcon.png" alt="" width="50px"
              height="50px"></a>
          <p style="color: black;">Continuar Collage</p>
        </div>

        <div class="intern3 scale-in-center" id="mi-imagen">
          <a href="../collage/incidencias_admin.php"><img src="../../public/img/icons/deleteIcon.png" alt="" width="50px"
              height="50px"></a>
          <p style="color: black;">Eliminar Inicidencias</p>
        </div>

        <div class="intern5 scale-in-center">
          <a href="faqadmin.php"><img src="../../public/img/icons/Ayudaicon.png" alt="" width="50px" height="50px"></a>
          <p style="color: black;">Ayuda</p>
        </div>
      </div>
    </div>
    <!-- BOTONES DE ACCION -->
  <script>
     <?php if ($contar >= $valor2): ?>
    document.getElementById("mi-imagen").classList.add("hidden");
      <?php endif; ?>
    </script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.css">
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <img src="../../public/img/icons/CloverNetLogoGray.png" alt="" width="25px" height="25px">
    ©
    <script src="../../private/code/copyrightyear.js"></script>
    <a class="text-reset fw-bold" href="" target="_blank">CloverNet.com.mx</a>
  </div>
  <!-- Copyright -->
  </footer>

  </html>
  <?php
} else {
  session_start();
  session_destroy();
  header("location:../../index.php");
}
?>