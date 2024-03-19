<?php
$code_error = '';


if (isset($_POST['submit'])) {

  $code = $_POST['codigo'];


  if (empty($code)) {
    $code_error = 'Por favor ingrese el código';
    
      } else {
         session_start();
         
        include("private/code/config.php");

        $consulta = "SELECT*FROM students where code_student ='$code'";
        $resultado = mysqli_query($link, $consulta);
        $filas = mysqli_fetch_array($resultado);
        $_SESSION['usuario']=$code;

        if ($filas > 1) {
           
          if ($filas['student_rol'] == 3 ) { //Student
            if($filas['activo'] == 1){
                

               header("Location:./private/views/validar_numero.php");
                                      
                   
             }else{
                if($filas['activo'] == 0){
                    header("location:./private/views/registrar_numero.php");
                }            
              
              }
        }
       
      }else {
        if ($filas < 1) {
          $code_error = 'Código no valido';
        }
    }
  }
  mysqli_close($link);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/img/icons/Logo.png"/>
    <title>GaDo Studio | Login</title>
    <link rel="stylesheet" href="public/stylelogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500&display=swap" rel="stylesheet">
</head>
<body class="fondo" style="background-image: linear-gradient(rgba(0, 0, 0, 0.463), rgba(0, 0, 0, 0.5)), url(public/img/back1.jpg);">
  <!-- Section: Design Block -->
<section class="overflow-hidden">
  <div class=" px-4 py-4 px-md-5 px-md-0 text-center align-items-center text-lg-start my-1 mb-0" style="position: relative;">
            <div style="align-items: center;">
              
              <div class="card bg-glass ">
                <div style="align-items: center; margin: auto;">
                  <h3 class=" my-5 display-5 fw-bold ls-tight" style="color: hsl(0, 93%, 29%)">
                    <img class="my-4" src="public/img/icons/Logo.png" alt="" width="110px" height="110px"> <div> Bienvenido a la App FotoLibro</div>
                    </h3>  
                    
                </div>
                
                <div class="card-body px-5 py-1 px-md-5 mb-0 pb-0">
                  <form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post">
                    <!-- User input -->
                    <div class="form-floating mb-3 ">
                      <label>Ingresa tu codigo:</label>
                      <input type="text" name="codigo" class="form-control" value="">
                      <span class="help-block"><?php echo $code_error; ?></span>
                    </div>
      
                    <!-- Submit button -->
                    <input type="submit" name="submit" value=" Iniciar Sesión" class="btn btn-primary btn-block mb-4">
      
                  </form>
                </div>
              </div>
            </div>
            
          
        
     
    
  </div>
  <!-- Copyright -->
  <br><br><br><br><br><br><br><br><br><br>
<footer class="scale-in-ver-bottom">
  <div class="text-center p-3 mt-0" style="color: white;">
    <img src="public/img/icons/CloverNetLogoWhite.png" alt="" width="25px" height="25px">
    © <script src="private/code/copyrightyear.js"></script>
    <a class="text-reset fw-bold" href="">CloverNet.com.mx</a>
  </div>
  <!-- Copyright -->
  </footer>
</section>
<!-- Section: Design Block -->
</body>

</html>