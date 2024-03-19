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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/img/icons/Logo.png" />
    <link rel="stylesheet" href="../../private/styles/style.css">
    
    <title>GaDo Studio | Clients Page</title>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../code/vanilla-DT/vanilla-dataTables.css">
    
</head>
<body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-light p-4">
            <h4 class="text-dark">Menu</h4>
            <a href="https://drive.google.com/drive/folders/1jV0d3DTs0QakGZLYAZpitso42Zo7LF3Y?usp=sharing" class="mon-reg">Información</a><br>
            <a href="faq.php" class="mon-reg">Ayuda</a><br>
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
          <a class="btn btn-outline-success" type="submit" href="mainMaster.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
          </svg> Back</a>
        </nav>
      </div>


    <section>
      <div class="container">
        <div class="slide-in-top">
            <div class="col-auto">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-title col-auto flex-shrink-2 flex-grow-2"><h2>Clientes</h2></div>
                    <div class="col-auto">
                        <button type="button" id="add_new" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregar"data-bs-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/></svg> Agregar Nuevo</button>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container col-auto">
                    <table id="cargar" class="table table-stripped table-bordered">
                        <colgroup class="">
                            <col width="auto">
                            <col width="auto">
                            <col width="auto">
                            <col width="auto">
                            <col width="auto">
                            <col width="auto">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Paquete</th>
                                <th class="text-center">Hojas Creadas</th>
                                <th class="text-center">Dirección</th>
                                <th class="text-center">Activación</th>
                                <th class="text-center">Acción</th>
                            </tr>
                        </thead><?php 
                            include('../code/config.php');
                            
                            $data=mysqli_query($link,"SELECT * FROM users WHERE user_rol='2'" );

                            while($consulta=mysqli_fetch_array($data)){
                            $arreglo= $consulta['id_user'].','.$consulta['name'].','.$consulta['package'].','.$consulta['address'].','.$consulta['user_name'].','.$consulta['password'];
                                           
                            ?>
                            <tbody>
                            
                            <td><?php echo $consulta['name'];?></td>
                            <td><?php echo $consulta['package'];?></td>
                            <td><?php echo $consulta['current_pages'];?></td>
                            <td><?php echo $consulta['address'];?></td>
                            <td><?php echo $consulta['created_at'];?></td>
                            <td> 
                            
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"data-bs-toggle="modal" onclick="modificar2 ('<?php echo $arreglo?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                            </svg></button>
                             
                            <?php  echo "<a class='btn btn-primary rounded' type='button' href='editpageMaster.php?id=".$consulta['id_user']."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'> 
                             <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
                             <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
                             </svg></a>"?>
                            
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar"data-bs-toggle="modal" onclick="modificar ('<?php echo $arreglo?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></button>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#eliminar"data-bs-toggle="modal"  onclick="eliminar ('<?php echo $arreglo?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></button></td>
                            </tbody>
                            <?php
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>                        
<!--ver modal user y password-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Datos</h1>
      
      </div>
      <div class="modal-body">
      <form>
          <div class="mb-3">

          <input type="hidden" class="form-control" id="id_2" name="id_2" >
         
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario_" name="usuario_" disabled>

                            
            <label for="recipient-name" class="col-form-label">Contraseña:</label>
            <input type="text" class="form-control" id="contra_" name="contra_" disabled>
         
          </div>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          
        </form>
      </div>
    </div>
  </div>
</div>

    <!--Agregar modal-->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-3" id="exampleModalLabel">Agregar Cliente</h3>
      </div>
      <div class="modal-body">
        <form id="agr_form">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="agr_usuario" name="agr_usuario" required>
       
            <label for="recipient-name" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" id="agr_contra" name="agr_contra" required>

            <label for="recipient-name" class="col-form-label">Confirmar Contraseña:</label>
            <input type="password" class="form-control" id="agr_contra2" name="agr_contra2" required>

            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="agr_nombre" name="agr_nombre" required>

            <label for="recipient-name" class="col-form-label">Paquete:</label>
            <div class="dropdown">
                <select class="form-control" id="agr_pack" name="agr_pack">
                    <option value="PhotoBook 30 Hojas">PhotoBook 30 Hojas</option>
                    <option value="PhotoBook 40 Hojas">PhotoBook 40 Hojas</option>
                    <option value="PhotoBook 50 Hojas">PhotoBook 50 Hojas</option>
                    <option value="PhotoBook 60 Hojas">PhotoBook 60 Hojas</option>
                    <option value="PhotoBook 70 Hojas">PhotoBook 70 Hojas</option>
                    <option value="PhotoBook 80 Hojas">PhotoBook 80 Hojas</option>
                    <option value="PhotoBook 90 Hojas">PhotoBook 90 Hojas</option>
                    <option value="PhotoBook 100 Hojas">PhotoBook 100 Hojas</option>
                </select>
            </div>
                            
            <label for="recipient-name" class="col-form-label">Dirección:</label>
            <input type="text" class="form-control" id="agr_dire" name="agr_dire" required>
         
          </div>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="agregar_user">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!--Editar modal-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3 class="modal-title fs-3" id="exampleModalLabel">Editar Datos</h3>
      </div>
      <div class="modal-body">
        <form id="mod_form">
          <div class="mb-3">

          
            <input type="hidden" class="form-control" id="id_" name="id_" >

            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name_" name="name_">

            <label for="recipient-name" class="col-form-label">Paquete:</label>
            <div class="dropdown">
                <select class="form-control" id="pack_" name="pack_">
                    <option value="PhotoBook 30 Hojas">PhotoBook 30 Hojas</option>
                    <option value="PhotoBook 40 Hojas">PhotoBook 40 Hojas</option>
                    <option value="PhotoBook 50 Hojas">PhotoBook 50 Hojas</option>
                    <option value="PhotoBook 60 Hojas">PhotoBook 60 Hojas</option>
                    <option value="PhotoBook 70 Hojas">PhotoBook 70 Hojas</option>
                    <option value="PhotoBook 80 Hojas">PhotoBook 80 Hojas</option>
                    <option value="PhotoBook 90 Hojas">PhotoBook 90 Hojas</option>
                    <option value="PhotoBook 100 Hojas">PhotoBook 100 Hojas</option>
                </select>
            </div>
                            
            <label for="recipient-name" class="col-form-label">Dirección:</label>
            <input type="text" class="form-control" id="dire_" name="dire_">
         
          </div>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="modificar">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Eliminar modal-->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3 class="modal-title fs-3" id="exampleModalLabel">¿Estas Seguro de Eliminar este Usuario?</h3>
      </div>
      <div class="modal-body">
      <form id="del_form">
          <div class="mb-3">
      <input type="hidden" class="form-control" id="id_e" name="id_e" >
       
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="delete_user">Aceptar</button>
        
        </form>
      </div>
    </div>
  </div>
</div>



</body>
<script src="funciones.js"></script>
<script src="../code/app.js"></script>
<script src="../code/vanilla-DT/vanilla-dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <img src="../../public/img/icons/CloverNetLogoGray.png" alt="" width="25px" height="25px">
    © <script src="../../private/code/copyrightyear.js"></script>
    <a class="text-reset fw-bold" target="_blank" href="">clovernetmx</a>
  </div>
  <!-- Copyright -->
</html>
<?php
} else {
  session_start();
  session_destroy();
  header("location:../../index.php");
}
?>