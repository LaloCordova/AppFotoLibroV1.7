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
  <html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/img/icons/Logo.png" />


    <title>GaDo Studio | Editor</title>
    <!-- Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
    <script src="https://unpkg.com/cropperjs"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

  </head>
  <style>
    .alert-container {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 9999;
      /* para que aparezca por encima de otros elementos */
      text-align: center;
    }

    .card {
      height: 100%;
      width: 100%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }

    img {
      pointer-events: none;
      width: 90%;
      height: 100%;
      z-index: -1;
      object-fit: cover;
      border-top: 4px solid #000000;
            border-right: 4px solid #9c8383;
            border-bottom: 4px solid #9c8383;
            border-left: 4px solid #000000;
    }

    .img-def {
      display: inline-block;
      overflow: hidden;
      position: relative;
    }

    .bg-card-5 {
      background-image: url('plantillas/Pagina16.png');
      background-repeat: no-repeat;
      background-size: cover;
    padding:3.5%;
      height: 100%;
      width: 100%;

      display: grid;
      grid-template-rows: 50% 50%;
      justify-items: center;
      align-items: center;
    }

    .img-div-container-5 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      justify-items: center;
      align-items: center;
      margin-bottom: 0%;
      margin-left: 5%;
      margin-top:-7%;
    }

    .bg-card-5 .img-div-5-1 {
      display: grid;
      grid-template-columns: 1fr;
      justify-items: center;
      align-items: center;
      z-index: 1;
      width: 100%;
      height: 100%;
      margin-top:5%;
      margin-bottom:15%;
      margin-left: 5%;
    }

    .bg-card-5 .img-div-5-2 {
      width: 100%;
      height: 95%;
      display: grid;
      grid-template-columns: 1fr;
      justify-items: center;
      align-items: center;
      z-index: 1;
      margin-top:5%;
    }
  </style>

  <body>


    <div id="alert-container"></div>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-light p-4">
          <h4 class="text-dark">Menu</h4>
          <a href="" class="mon-reg">Información</a><br>
          <a href="../views/faqadmin.php" class="mon-reg">Ayuda</a><br>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light shadow p-3 mb-5 bg-white scale-in-ver-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
          aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          GaDo Studio

        </a>
        <a href="../views/editpageAdmin.php" class="btn btn-outline-success" type="submit" id="back"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
          </svg> Back</a>
      </nav>
    </div>
    <div class="container" align="center">
      <br />
      <h3 align="center">Editor Foto Libro</h3>
      <br />

      <div class="card" id="saver">
        <div class="bg-card-5">
          <div class="img-div-container-5">
            <div class="img-div-5-2 img-def">
              <form method="post">
                <label for="upload_image1">
                  <img src="placeholders/imgp3a2.png" id="uploaded_image1">
                  <input type="file" name="image" class="image" id="upload_image1" style="display: none" />
                </label>
                
              </form>
            </div>
            <div class="img-div-5-2 img-def">
              <form method="post">
                <label for="upload_image2">
                  <img src="placeholders/imgp3a2.png" id="uploaded_image2">
                  <input type="file" name="image" class="image" id="upload_image2" style="display: none" />
                </label>
              </form>
            </div>
          </div>
          
          <div class="img-div-5-1 img-def">
          <div class="container d-flex justify-content-center">
            <input class="input-group input-group-sm mb-3" maxlength="30" type="text"placeholder="Ingresa el texto de la foto (MAX 30)" style="background-color: rgba(0, 0, 0, 0);
              border-color: rgba(0, 0, 0, 0);
              z-index:5; position:relative; margin-top:-2%; text-align: center;
              font-size:125%; text-align:center;">
          </div>
            <form method="post">
              <label for="upload_image3">
                <img src="placeholders/imgp3a1.png" id="uploaded_image3">
                <input type="file" name="image" class="image" id="upload_image3" style="display: none" />
              </label>
              
            </form>
          </div>
        </div>
      </div>

      <br />
      <div class="row container">
                <div class="screenShotButton">
                    <button type="button" class="btn btn-primary" id="saveScreenshot" data-toggle="modal"
                        data-target="#exampleModal">
                        Guardar Página
                    </button>

                </div>
            </div>

            <!-- Modal Cargando -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Guardando Página</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span id="textLoading">Subiendo Foto, Espere un Momento...</span>
                            <span id="textReady">¡Subida Exitosa!</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="ready"
                                onClick="window.location.assign('../views/editpageAdmin.php')">¡Listo, Haz click para
                                volver!</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Cargando -->
      <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
          <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel">Cortar Imagen</h5>
                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
                <div class="modal-body">
                  <div class="img-container">
                    <div class="row">
                      <div class="col-md-8">
                        <img src="" id="sample_image" />
                      </div>
                      <div class="col-md-4">
                        <div class="preview"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="progress mt-3">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="rotateLeft">
                    <i class="bi bi-arrow-counterclockwise"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="rotateRight">
                    <i class="bi bi-arrow-clockwise"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="mirrorX">
                    <i class="bi bi-arrow-left-right"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="mirrorY">
                    <i class="bi bi-arrow-down-up"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="crop">
                    Cortar
                  </button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
          <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel">Cortar Imagen</h5>
                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal2">Cerrar</button>
                </div>
                <div class="modal-body">
                  <div class="img-container">
                    <div class="row">
                      <div class="col-md-8">
                        <img src="" id="sample_image2" />
                      </div>
                      <div class="col-md-4">
                        <div class="preview2"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="progress mt-3">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="rotateLeft2">
                    <i class="bi bi-arrow-counterclockwise"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="rotateRight2">
                    <i class="bi bi-arrow-clockwise"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="mirrorX2">
                    <i class="bi bi-arrow-left-right"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="mirrorY2">
                    <i class="bi bi-arrow-down-up"></i>
                  </button>
                  <button type="button" class="btn btn-primary" id="crop2">
                    Cortar
                  </button>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>



  </body>

  </html>
<?php

} else {
  session_start();
  session_destroy();
  header("location:.../index.php");
}

?>
<script>
  $(document).ready(function () {

    //Mirror functions variables
    var counterY = 1;
    var counterX = 1;

    var $modal = $('#modal');
    var $modal2 = $('#modal2');
    var cropper;
    var cropper2;

    // handle change event for first image input
    $('#upload_image1').change(function (event) {
      var files = event.target.files;
      var imageId = "image1";
      var done = function (url) {
        var image = document.getElementById('sample_image2');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal2.modal('show');
      };

      if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
          done(reader.result);
        };
        reader.readAsDataURL(files[0]);
      }
    });

    // handle change event for second image input
    $('#upload_image2').change(function (event) {
      var files = event.target.files;
      var imageId = "image2";
      var done = function (url) {
        var image = document.getElementById('sample_image2');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal2.modal('show');
      };

      if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
          done(reader.result);
        };
        reader.readAsDataURL(files[0]);
      }
    });

    // handle change event for THIRD image input
    $('#upload_image3').change(function (event) {
      var files = event.target.files;
      var imageId = "image3";
      var done = function (url) {
        var image = document.getElementById('sample_image');
        image.src = url;
        image.setAttribute("data-imageId", imageId);
        $modal.modal('show');
      };

      if (files && files.length > 0) {
        reader = new FileReader();
        reader.onload = function (event) {
          done(reader.result);
        };
        reader.readAsDataURL(files[0]);
      }
    });

    $modal.on('shown.bs.modal', function () {
      var image = document.getElementById('sample_image');
      cropper = new Cropper(image, {
        aspectRatio: 17/10,
        viewMode: 1,
        rotatable: true,
        zoomOnWheel: true,
        zoomOnTouch: true,
        responsive: true,
        toggleDragModeOnDblclick: true
      });
    }).on('hidden.bs.modal', function () {
      cropper.destroy();
      cropper = null;
    });

    //Modal's buttons
    $("#rotateLeft").click(function () {
      cropper.rotate(-90);
    });
    $("#rotateRight").click(function () {
      cropper.rotate(90);
    });
    $("#mirrorX").click(function () {
      if (counterX % 2 == 0) {
        cropper.scaleX(1);
      } else {
        cropper.scaleX(-1);
      }
      counterX++;
    });
    $("#mirrorY").click(function () {
      if (counterY % 2 == 0) {
        cropper.scaleY(1);
      } else {
        cropper.scaleY(-1);
      }
      counterY++;
    });


    $("#crop").click(function () {
    var image = document.getElementById('sample_image');
    var imageId = image.getAttribute("data-imageId");
    var canvas = cropper.getCroppedCanvas({
        maxWidth: 4096,
        maxHeight: 4096,
    });

    canvas.toBlob(function (blob) {
        var reader = new FileReader();
        reader.readAsDataURL(blob);
        reader.onloadend = function () {
            var base64data = reader.result;

            // Crear un objeto FormData para enviar la imagen al servidor
            var formData = new FormData();
            formData.append('image', base64data);
            formData.append('imageId', imageId);

            // Mostrar la barra de progreso
            var progressBar = $('.progress-bar');
            progressBar.css('width', '5%');

            // Enviar la imagen al servidor
            $.ajax({
                url: 'upload.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                xhr: function () {
                    var xhr = new XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function (event) {
                        if (event.lengthComputable) {
                            var percentComplete = (event.loaded / event.total) * 100;
                            progressBar.css('width', percentComplete + '%');
                        }
                    }, false);
                    return xhr;
                },
                success: function (data) {
                    // Ocultar la barra de progreso cuando se haya completado la carga
                    progressBar.css('width', '100%');
                    console.log(data);
                    $modal.modal('hide');
                    $('#uploaded_' + imageId).attr('src', data);
                    progressBar.css('width', '0%');
                },
                error: function () {
                    // Mostrar un mensaje de error si algo falla
                    alert('Ha ocurrido un error al guardar la imagen en el servidor.');
                }
            });
        }
    });
});
    
    //Modal2's Functions
    $modal2.on('shown.bs.modal', function () {
      var image = document.getElementById('sample_image2');
      cropper2 = new Cropper(image, {
        aspectRatio: 1,
        viewMode: 1,
        rotatable: true,
        zoomOnWheel: true,
        zoomOnTouch: true,
        responsive: true,
        toggleDragModeOnDblclick: true
      });
    }).on('hidden.bs.modal', function () {
      cropper2.destroy();
      cropper2 = null;
    });


    //Modal2's buttons
    $("#rotateLeft2").click(function () {
      cropper2.rotate(-90);
     
    });

    $("#rotateRight2").click(function () {
      cropper2.rotate(90);
    
    });

    $("#mirrorX2").click(function () {
      if (counterX % 2 == 0) {
        cropper2.scaleX(1);
     
      } else {
        cropper2.scaleX(-1);
     
      }
      counterX++;
    });

    $("#mirrorY2").click(function () {
      if (counterY % 2 == 0) {
        cropper2.scaleY(1);
     
      } else {
        cropper2.scaleY(-1);
     
      }
      counterY++;
    });

    $("#crop2").click(function () {
    var image = document.getElementById('sample_image2');
    var imageId = image.getAttribute("data-imageId");
    var canvas = cropper2.getCroppedCanvas({
        maxWidth: 4096,
        maxHeight: 4096,
    });

    canvas.toBlob(function (blob) {
        var reader = new FileReader();
        reader.readAsDataURL(blob);
        reader.onloadend = function () {
            var base64data = reader.result;

            // Crear un objeto FormData para enviar la imagen al servidor
            var formData = new FormData();
            formData.append('image', base64data);
            formData.append('imageId', imageId);

            // Mostrar la barra de progreso
            var progressBar = $('.progress-bar');
            progressBar.css('width', '5%');

            // Enviar la imagen al servidor
            $.ajax({
                url: 'upload.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                xhr: function () {
                    var xhr = new XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function (event) {
                        if (event.lengthComputable) {
                            var percentComplete = (event.loaded / event.total) * 100;
                            progressBar.css('width', percentComplete + '%');
                        }
                    }, false);
                    return xhr;
                },
                success: function (data) {
                    // Ocultar la barra de progreso cuando se haya completado la carga
                    progressBar.css('width', '100%');
                    console.log(data);
                    $modal2.modal('hide');
                    $('#uploaded_' + imageId).attr('src', data);
                    progressBar.css('width', '0%');
                },
                error: function () {
                    // Mostrar un mensaje de error si algo falla
                    alert('Ha ocurrido un error al guardar la imagen en el servidor.');
                }
            });
        }
    });
});

     $("#saveScreenshot").click(function () {
    var saver = document.querySelector("#saver");
    var originalSize = {
        width: saver.offsetWidth,
        height: saver.offsetHeight
    };

    saver.style.width = "816px";
    saver.style.height = "1056px";



    html2canvas(saver, {
        scale: 3
    }).then(canvas => {
        saver.style.width = originalSize.width + "px";
        saver.style.height = originalSize.height + "px";

        var screenshot = canvas.toDataURL();


        $("#back").css("visibility", "hidden");
        $("#ready").css("visibility", "hidden");
        $("#textReady").hide();

        $.ajax({
            url: "saveScreenshot.php",
            method: "POST",
            data: {
                screenshot: screenshot
            },
            success: function (data) {
                console.log(data);

                $("#back").css("visibility", "visible");
                $("#ready").css("visibility", "visible");
                $("#textReady").show();
                $("#textLoading").hide();
            }
        });
    });
});

  });


</script>