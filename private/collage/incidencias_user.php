<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
include("../code/config.php");
$sql = "SELECT * FROM students WHERE code_student = '$varsesion'";
$resultado = mysqli_query($link, $sql);
$filas = mysqli_fetch_array($resultado);

if ($varsesion == null || $varsesion = '') {
    header("location:../../index.php");
    die();
}

if ($filas['student_rol'] == '3') {
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/img/icons/Logo.png" />
    <link rel="stylesheet" href="../private/styles/style.css">
    <title>GaDo Studio | Selecciona Incidencia</title>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  </head>

  <body>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-light p-4">
          <h4 class="text-dark">Menu</h4>
          <a href="" class="mon-reg">Información</a><br>
          <a href="../views/faq.php" class="mon-reg">Ayuda</a><br>
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
        <button class="btn btn-outline-success" onclick="javascript:window.history.back();" autofocus>Back</button>

      </nav>
    </div>
    <section>
      <div class="d-flex justify-content-center container">
        <h2>Fotos Disponibles</h2>
      </div>
      <div class="d-flex justify-content-center container"><br>
        <?php 
        
        ?>
        
        <?php
        
        $folder = 'images/' . $filas['id_user_student'] . '/pages';
        $images = glob($folder . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        ?>
      </div><br>
      <div  class="container">
        <div class="row d-flex justify-content-center"><br>

          <?php
          foreach ($images as $image):
            $contar = $contar + 1;
            ?>
            <!-- Carta-->
            <!-- Los numeros de la clase siguiente son los que cambian el tamaño de la carta-->
            <div class=" col-sm-0 mb-3 mb-sm-0">
              <div class="card" style="width: 18rem;" id="<?php echo 'card-' . $contar ?>">
                <div class="card-body">
                  <img src="<?php echo $image; ?>" class="card-img-top" alt="Cargando...">
                  <h5 class="card-title"><br> Foto
                    <?php echo $contar ?>
                  </h5>
                  <?php $arreglo=$image;?>
                
                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar" data-bs-toggle="modal"  onclick="eliminar('<?php echo $arreglo?>')">HOJA-<?php echo $contar?></button>
                </div>
              </div>
            </div>
            <?php
            
          endforeach;
          ?>
          <!-- Carta-->
        </div>
      </div>
      <br><br><br>

      </div>
    </section>

    <!--Eliminar modal-->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3 class="modal-title fs-3" id="exampleModalLabel">¿Estas Seguro de Eliminar esta imagen?</h3>
      </div>
      <div class="modal-body">
      <form id="del_form">
          <div class="mb-3">
      <input type="hidden" class="form-control" id="id_image" name="id_image">
       
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="delete_image">Aceptar</button>
        
        </form>
      </div>
    </div>
  </div>
</div>
  </body>
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


  <script>
    function eliminar(arreglo) {
    cadena = arreglo.split(',');

    $("#id_image").val(cadena[0]);

}



$('#delete_image').click(function () {
    var recolectar3 = $('#del_form').serialize();


    $.ajax({

        url: 'eliminar_image.php',
        type: 'POST',
        data: recolectar3,

        success: function (variable3) {
             location.reload();
            $('#eliminar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();
            
        }

    })
});
  </script>



  <?php

} else {
    session_start();
    session_destroy();
    header("location:../../loginstudent.php");

}

?>