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
    <link rel="shortcut icon" href="../../public/img/icons/Logo.png" />
    <link rel="stylesheet" href="../private/styles/style.css">
    <title>GaDo Studio | Selecciona Plantilla</title>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-light p-4">
          <h4 class="text-dark">Menu</h4>
          <a href="" class="mon-reg">Información</a><br>
         
        </div>
      </div>
      <nav class="navbar navbar-light bg-light shadow p-3 mb-5 bg-white scale-in-ver-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="../../public/img/icons/Logo.png" width="30" height="30" class="align-top justify-content-center" alt="">
          GaDo Studio
        </a>
        <a href="../views/editpageAdmin.php" class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg> Back</a>
      </nav>
    </div>
    <section>
      <div class="d-flex justify-content-center">
        <h3>Plantillas Disponibles</h3>
      </div>
      <br>
    <div class="container ">
      <div class="row d-flex justify-content-center">
         <!-- Carta-->
        <div class="col-sm-0 mb-3 mb-sm-0">
          <div class="card" style="width: 10rem;">
            <div class="card-body">
            <img src="../collage/plantillas/Pagina_1.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br> Plantilla 1</h5>
                <a href="plantilla1.php" class="btn btn-primary">Usar</a>
            </div>
          </div>
        </div>
         <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_2a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 2</h5>
                <a href="plantilla2a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_2b.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 3</h5>
                <a href="plantilla2b.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_3a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 4</h5>
                <a href="plantilla3a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_3b.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 5</h5>
                <a href="plantilla3b.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_3c.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 6</h5>
                <a href="plantilla3c.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_3d.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 7</h5>
                <a href="plantilla3d.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_4a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 8</h5>
                <a href="plantilla4a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_5a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 9</h5>
                <a href="plantilla5a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_6a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 10</h5>
                <a href="plantilla6a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="../collage/plantillas/Pagina_6b.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 11</h5>
                <a href="plantilla6b.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
      </div>
    </div>
<br><br><br>

      </div>
    </section>
  </body>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      <img src="../../public/img/icons/CloverNetLogoGray.png" alt="" width="25px" height="25px">
      © <script src="../../private/code/copyrightyear.js"></script>
      <a class="text-reset fw-bold" href="" target="_blank">CloverNet.com.mx</a>
    </div>
    <!-- Copyright -->
  </footer>
</html>
<?php

} else {
  $varsesion = $_SESSION['usuario'];
  $sql2 = "SELECT * FROM students WHERE code_student = '$varsesion'";
  $resultado2 = mysqli_query($link, $sql2);
  $filas2 = mysqli_fetch_array($resultado2);
  if ($filas2['student_rol'] == '3') {
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/img/icons/Logo.png" />
    <link rel="stylesheet" href="../private/styles/style.css">
    <title>GaDo Studio | Selecciona Plantilla</title>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-light p-4">
          <h4 class="text-dark">Menu</h4>
          <a href="" class="mon-reg">Información</a><br>
          <a href="../views/faqadmin.php" class="mon-reg">Ayuda</a><br>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light shadow p-3 mb-5 bg-white scale-in-ver-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="../../public/img/icons/Logo.png" width="30" height="30" class="align-top justify-content-center" alt="">
          GaDo Studio
        </a>
        <a href="../views/editpageAdmin.php" class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg> Back</a>
      </nav>
    </div>
    <section>
      <div class="d-flex justify-content-center">
        <h3>Plantillas Disponibles</h3>
      </div>
      <br>
    <div class="container ">
      <div class="row d-flex justify-content-center">
         <!-- Carta-->
        <div class="col-sm-0 mb-3 mb-sm-0">
          <div class="card" style="width: 10rem;">
            <div class="card-body">
            <img src="plantillas/pagina_1.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br> Plantilla 1</h5>
                <a href="plantilla1.php" class="btn btn-primary">Usar</a>
            </div>
          </div>
        </div>
         <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_2a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 2</h5>
                <a href="plantilla2a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_2b.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 3</h5>
                <a href="plantilla2b.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_3a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 4</h5>
                <a href="plantilla3a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_3b.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 5</h5>
                <a href="plantilla3b.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_3c.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 6</h5>
                <a href="plantilla3c.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_3d.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 7</h5>
                <a href="plantilla3d.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_4a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 8</h5>
                <a href="plantilla4a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_5a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 9</h5>
                <a href="plantilla5a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_6a.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 10</h5>
                <a href="plantilla6a.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
          <!-- Carta-->
          <div class="col-sm-0 mb-3 mb-sm-0">
            <div class="card" style="width: 10rem;">
              <div class="card-body">
              <img src="plantillas/pagina_6b.png" class="card-img-top" alt="...">
                <h5 class="card-title"><br>Plantilla 11</h5>
                <a href="plantilla6b.php" class="btn btn-primary">Usar</a>
              </div>
            </div>
          </div>
          <!-- Carta-->
      </div>
    </div>
<br><br><br>

      </div>
    </section>
  </body>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      <img src="../../public/img/icons/CloverNetLogoGray.png" alt="" width="25px" height="25px">
      © <script src="../../private/code/copyrightyear.js"></script>
      <a class="text-reset fw-bold" href="" target="_blank">CloverNet.com.mx</a>
    </div>
    <!-- Copyright -->
  </footer>
</html>
<?php
  } else {
    session_start();
    session_destroy();
    header("location:../../loginstudent.php");
  }
}

?>

