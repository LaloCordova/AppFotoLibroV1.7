<?php

if (isset($_POST["image"])) {
    session_start();

    $varsesion = $_SESSION['usuario'];
    include("../code/config.php");
    $sql = "SELECT * FROM users WHERE name LIKE '%$varsesion'";
    $resultado = mysqli_query($link, $sql);
    $filas = mysqli_fetch_array($resultado);
    if ($filas['user_rol'] == '2') {
        $folder = 'images/' . $filas['id_user'] . '/crops' . '/';
    }
    $data = $_POST["image"];
    $imageId = $_POST["imageId"];


    $image_array_1 = explode(";", $data);
    $image_array_2 = explode(",", $image_array_1[1]);
    $data = base64_decode($image_array_2[1]);


    $imageName = $folder . $imageId . '_' . time() . '.png';

   

    file_put_contents($imageName, $data);

    echo $imageName;

}
?>