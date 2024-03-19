<?php

if (isset($_POST["image"])) {
    session_start();

    $varsesion = $_SESSION['usuario'];
    include("../code/config.php");
    $sql2 = "SELECT * FROM students WHERE code_student = '$varsesion'";
    $resultado2 = mysqli_query($link, $sql2);
    $filas2 = mysqli_fetch_array($resultado2);
    if ($filas2['student_rol'] == '3') {
        $folder = 'images/' . $filas2['id_user_student'] . '/crops' . '/' ;
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