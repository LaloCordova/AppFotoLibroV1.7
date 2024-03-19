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

if ($filas['user_rol'] == 1) {

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
          <a href="clientsPage.php" class="mon-reg">Clientes</a><br>
          <a href="https://drive.google.com/drive/folders/1jV0d3DTs0QakGZLYAZpitso42Zo7LF3Y?usp=sharing" class="mon-reg">Información</a><br>
          <a href="faq.php" class="mon-reg">Ayuda</a><br>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light shadow p-3 mb-5 bg-white scale-in-ver-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="mainMaster.php">
          <img src="../../public/img/icons/Logo.png" width="30" height="30" class="align-top justify-content-center" alt="">
          GaDo Studio
        </a>
        <a href="../../public/cerrar_sesion.php" class="btn btn-outline-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
          </svg> Logout</a>
      </nav>
    </div>
    <!--Contenedores del cuerpo principal-->
    <div class="float-child1 swing-in-top-fwd2">
      <div class="green">
        <div class="intern1 tracking-in-expand">
          <h3>Bienvenido</h3>
          <h5><?php echo htmlspecialchars($_SESSION["usuario"]); ?></h5><br>
          <img src="../../public/img/icons/MasterIcon.png" alt="" width="75px" height="75px">
        </div>
        <div class="intern2 tracking-in-expand">
          <br>
          <?php
          $sql2 = "SELECT * FROM users WHERE user_rol='2'";
          $num_pack = mysqli_query($link, $sql2);

          while ($filas = mysqli_fetch_assoc($num_pack)) {
            $PA = $PA + 1;
          }

          ?>
          <p>Paquetes Activos: <?php echo $PA ?></p><br>

        </div>
      </div>
    </div>
    <div class="float-child2 swing-in-top-fwd">
      <div class="blue tracking-in-contract-bck">
        <h3>Paquetes Activos</h3><br>

        <?php
        $sql3 = "SELECT * FROM users WHERE user_rol='2'";
        $num_activos = mysqli_query($link, $sql3);

        while ($name_school = mysqli_fetch_assoc($num_activos)) {

        ?>
          <div class="btn-group">
            <button type="text" class="btn btn-success" style="margin: 5px;"><?php echo $name_school['name'] ?></button>
              <br><br>
          </div>
        <?php
        }

                            include('../code/config.php');
                            
                            $data=mysqli_query($link,"SELECT * FROM users WHERE user_rol='1'" );

                            while($consulta=mysqli_fetch_array($data)){
                            $arreglo= $consulta['id_user'].','.$consulta['user_name'].','.$consulta['password'];
                                           
                            }          
        ?>


      </div>
    </div>
    <div class="float-child3">
      <div class="container">
        <div class="intern3 scale-in-center">
          <a href="clientsPage.php"><img src="../../public/img/icons/ClientesIcon.png" alt="" width="50px" height="50px"></a>
          <p style="color: black;">Clientes</p>
        </div>
        
        <div class="intern3 scale-in-center">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#editar_master"data-bs-toggle="modal" onclick="modificar_master ('<?php echo $arreglo?>')">Cambiar Credenciales</button>
        </div>
        
        <div class="intern5 scale-in-center">
          <a href="faq.php"><img src="../../public/img/icons/Ayudaicon.png" alt="" width="50px" height="50px"></a>
          <p style="color: black;">Ayuda</p>
        </div>
      </div>
    </div>
    
<!--Editar modal-->
<div class="modal fade" id="editar_master" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3 class="modal-title fs-3" id="exampleModalLabel">Datos Credenciales</h3>
      </div>
      <div class="modal-body">
        <form id="mod_form_master">
          <div class="mb-3">

          
            <input type="hidden" class="form-control" id="id_master" name="id_master" >

            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="user_master" name="user_master">

                            
            <label for="recipient-name" class="col-form-label">Contrasena:</label>
            <input type="text" class="form-control" id="contra_master" name="contra_master">
         
          </div>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="modificar_master">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>    
    
    
    <script>
        function modificar_master(arreglo) {
    cadena = arreglo.split(',');
    

    $("#id_master").val(cadena[0]);
    $("#user_master").val(cadena[1]);
    $("#contra_master").val(cadena[2]);

  
    
}


$('#modificar_master').click(function () {
    var recolectar = $('#mod_form_master').serialize();


    $.ajax({

        url: '../PHP/modificar_master.php',
        type: 'POST',
        data: recolectar,

        success: function (variable) {
            window.location.reload()
            $('#editar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();
        }

    })
});

    </script>
    <script type="text/javascript">
function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="";}
}
      </script>
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  </body onload="deshabilitaRetroceso()">

  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      <img src="../../public/img/icons/CloverNetLogoGray.png" alt="" width="25px" height="25px">
      © <script src="../../private/code/copyrightyear.js"></script>
      <a class="text-reset fw-bold" href="#" target="_blank">clovernetmx</a>
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