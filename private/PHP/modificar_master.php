<?php
include('../code/config.php');

$id_master = $_POST['id_master'];
$user = $_POST['user_master'];
$contra = $_POST['contra_master'];



$mod1 = "UPDATE `users` SET `user_name`='$user',`password`='$contra' WHERE `id_user`='$id_master'";
mysqli_query($link, $mod1);


mysqli_close($link);

?>