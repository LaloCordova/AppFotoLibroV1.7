<?php
include('../code/config.php');

$usuario = $_POST['agr_usuario'];
$contra = $_POST['agr_contra'];
$name = $_POST['agr_nombre'];
$paquete = $_POST['agr_pack'];
$dire = $_POST['agr_dire'];
$fechaActual_1 = date('y-m-d h:i:s');


switch ($paquete) {
    case 'PhotoBook 30 Hojas':
        $current = 0;
        $limit = 30;
        break;
    case 'PhotoBook 40 Hojas':
        $current = 0;
        $limit = 40;
        break;
    case 'PhotoBook 50 Hojas':
        $current = 0;
        $limit = 50;
        break;
    case 'PhotoBook 60 Hojas':
        $current = 0;
        $limit = 60;
        break;
    case 'PhotoBook 70 Hojas':
        $current = 0;
        $limit = 70;
        break;
    case 'PhotoBook 80 Hojas':
        $current = 0;
        $limit = 80;
        break;
    case 'PhotoBook 90 Hojas':
        $current = 0;
        $limit = 90;
        break;
    case 'PhotoBook 100 Hojas':
        $current = 0;
        $limit = 100;
        break;

    default:
        echo "No existe la opción";
        break;
}



$inset1 = "INSERT INTO `users`(`user_name`, `password`, `name`, `package`, `address`, `created_at`, `user_rol`) VALUES ('$usuario','$contra','$name','$paquete','$dire','$fechaActual_1','2')";

$resultado = mysqli_query($link, $inset1);

$query = "SELECT * FROM `users` ORDER BY `id_user` DESC LIMIT 1";
$result = mysqli_query($link, $query);
$last_row = mysqli_fetch_assoc($result);
$last_id = $last_row['id_user'];
$update = "UPDATE `users` SET `current_pages`='$current',`total_pages`='$limit' WHERE `id_user`='$last_id'";
mysqli_query($link, $update);
for ($i = 0; $i < 5; $i++) {
    $code = uniqid();
    $code = str_shuffle($code);
    $code = substr($code, 0, 7);
    $query = "INSERT INTO `students` (`id_user_student`, `code_student`, `student_rol`) VALUES ('$last_id','$code', '3')";
    mysqli_query($link, $query);
}


$folder_name = '../../private/collage/images/' . $last_id . '/pages';
$second_folder_name = '../../private/collage/images/' . $last_id . '/crops';

if (!file_exists($folder_name)) {
    mkdir($folder_name, 0777, true);
    echo "Carpeta creada con éxito.";
} else {
    echo "La carpeta ya existe.";
}
if (!file_exists($second_folder_name)) {
    mkdir($second_folder_name, 0777, true);
    echo "Carpeta creada con éxito.";
} else {
    echo "La carpeta ya existe.";
}



mysqli_close($link);

?>