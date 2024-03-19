<?php
include('../code/config.php');


$id=$_POST['id_e'];


$borrar="DELETE FROM `users` WHERE `id_user`='$id'";
$resultado=mysqli_query($link, $borrar);

$borrar2="DELETE FROM `students` WHERE `id_user_student`='$id'";
$resultado2=mysqli_query($link, $borrar2);

mysqli_close($link);

?>