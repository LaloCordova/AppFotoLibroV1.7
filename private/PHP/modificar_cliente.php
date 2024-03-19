<?php
include('../code/config.php');

$id_user = $_POST['id_'];
$name = $_POST['name_'];
$pack = $_POST['pack_'];
$dire = $_POST['dire_'];

switch ($pack) {
    case 'PhotoBook 30 Hojas':
        $limit = 30;
        break;
    case 'PhotoBook 40 Hojas':
        $limit = 40;
        break;
    case 'PhotoBook 50 Hojas':
        $limit = 50;
        break;
    case 'PhotoBook 60 Hojas':
        $limit = 60;
        break;
    case 'PhotoBook 70 Hojas':
        $limit = 70;
        break;
    case 'PhotoBook 80 Hojas':
        $limit = 80;
        break;
    case 'PhotoBook 90 Hojas':
        $limit = 90;
        break;
    case 'PhotoBook 100 Hojas':
        $limit = 100;
        break;

    default:
        echo "No existe la opción";
        break;
}

$mod1 = "UPDATE `users` SET `name`='$name',`package`='$pack',`address`='$dire' WHERE `id_user`='$id_user'";
mysqli_query($link, $mod1);
$update = "UPDATE `users` SET `total_pages`='$limit' WHERE `id_user`='$id_user'";
mysqli_query($link, $update);

mysqli_close($link);

?>