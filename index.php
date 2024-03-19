<?php
$user_err = '';
$pass_err = '';

if (isset($_POST['submit'])) {

  $user = $_POST['username'];
  $pass = $_POST['password'];

  if (empty($user) and empty($pass)) {
    $user_err = 'Por favor ingrese su usuario.';
    $pass_err = 'Por favor ingrese su contraseña.';
  } else {
    if (empty($pass)) {
      $pass_err = 'Por favor ingrese su contraseña.';
    } else {
      if (empty($user)) {
        $user_err = 'Por favor ingrese su usuario.';
      } else {
        session_start();
        include("private/code/config.php");

        $consulta = "SELECT*FROM users where user_name='$user' and password='$pass'";
        $resultado = mysqli_query($link, $consulta);

        $filas = mysqli_fetch_array($resultado);
        $nameuser = $filas['name'];

        $_SESSION['usuario'] = $nameuser;




        if ($filas > 1) {
          if ($filas['user_rol'] == 1) { //Master
            header("location:private/views/mainMaster.php");
          } else
            if ($filas['user_rol'] == 2) { //Admin
              header("location:private/views/mainAdmin.php");
            }
        } else {
          $consulta2 = "SELECT*FROM users where user_name='$user'";
          $passwordvalidation = mysqli_query($link, $consulta2);

          $filas2 = mysqli_fetch_array($passwordvalidation);
          if ($filas2 < 1) {
            $user_err = 'No existe cuenta registrada con ese nombre de usuario';
          } else {
            $consulta3 = "SELECT*FROM users where password='$pass'";
            $uservalidation = mysqli_query($link, $consulta3);

            $filas3 = mysqli_fetch_array($uservalidation);
            if ($filas3 < 1) {
              $pass_err = 'La contraseña que has ingresado no es válida.';
            }
          }
        }
        mysqli_close($link);
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="public/img/icons/Logo.png" />
  <title>GaDo Studio | Login</title>
  <link rel="stylesheet" href="public/stylelogin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500&display=swap" rel="stylesheet">

</head>

<body class="fondo"
  style="background-image: linear-gradient(rgba(0, 0, 0, 0.463), rgba(0, 0, 0, 0.5)), url(public/img/back1.jpg);">
  <!-- Section: Design Block -->
  <section class="overflow-hidden">
    <div class="px-4 py-4 px-md-5 px-md-0 text-center text-lg-start my-1 mb-0" style="position: relative;">
      <div class="row gx-lg-4 align-items-center mb-0">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <div style="align-items: center;">
            <img class="my-4" src="public/img/icons/Logo.png" alt="" width="150px" height="150px">
          </div>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            <span style="color: white;">Siguenos en nuestro Facebook:</span><br>
            <a href="https://www.facebook.com/gado.estudio" target="_blank"
              class="btn btn-link btn-floating btn-lg text-reset me-4">
              <img src="public/img/icons/facebook.png" alt="" width="30px" height="30px">
            </a>
          </p>
        </div>
        <div class="col-lg-6 mb-0 mb-lg-0 position-relative" style="margin-bottom:0 ;">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
          <div class="card bg-glass">
            <h2 class=" my-5 display-5 fw-bold ls-tight" style="color: hsl(0, 93%, 29%)">
              Bienvenido a la App FotoLibro
            </h2>

            <div class="card-body px-5 py-1 px-md-5 mb-0 pb-0">
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <!-- User input -->
                <div class="form-floating mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                  <label>Usuario</label>
                  <input type="text" name="username" class="form-control" value="">
                  <span class="help-block">
                    <?php echo $user_err; ?>
                  </span>
                </div>
                <!-- Password input -->
                <div class="form-floating ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-key-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                  </svg>
                  <label>Contraseña</label>
                  <input type="password" name="password" class="form-control">
                  <span class="help-block">
                    <?php echo $pass_err; ?>
                  </span>
                  <br>
                </div>

                <!-- Submit button -->
                <input type="submit" name="submit" value=" Iniciar Sesión" class="btn btn-primary btn-block mb-4">
                <a href="loginstudent.php">¿Eres un alumno? Ingresa a traves de este link.</a>



                <!-- Register buttons -->
                <div class="text-center">

                  <br>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    <br><br>
    <footer class="scale-in-ver-bottom">
      <div class="text-center p-3 mt-0" style="color: white;">
        <img src="public/img/icons/CloverNetLogoWhite.png" alt="" width="25px" height="25px">
        ©
        <script src="private/code/copyrightyear.js"></script>
        <a class="text-reset fw-bold" href="">clovernetmx</a>
      </div>
      <!-- Copyright -->
    </footer>
  </section>
  <!-- Section: Design Block -->
</body>

</html>