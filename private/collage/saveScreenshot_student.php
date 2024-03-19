<?php
if (isset($_POST["screenshot"])) {

    session_start();

    $varsesion = $_SESSION['usuario'];
    include("../code/config.php");
    $sql2 = "SELECT * FROM students WHERE code_student = '$varsesion'";
    $resultado2 = mysqli_query($link, $sql2);
    $filas2 = mysqli_fetch_array($resultado2);
    if ($filas2['student_rol'] == '3') {
        $folder = 'images/' . $filas2['id_user_student'] . '/pages' . '/';
        $folder2 = 'images/' . $filas2['id_user_student'] . '/crops' . '/';
    }
    $data = $_POST["screenshot"];

    list($type, $data) = explode(';', $data);
    list(, $data) = explode(',', $data);
    $data = base64_decode($data);
    // Create image from screenshot
    $image = imagecreatefromstring($data);
    // Set interpolation method to improve image quality
    imagesetinterpolation($image, IMG_BILINEAR_FIXED);
    // Rescale image to 8.5 x 11 inches at 300 DPI
    $newWidth = 8.5 * 300; // 2550 pixels
    $newHeight = 11 * 300; // 3300 pixels
    $newImage = imagescale($image, $newWidth, $newHeight, IMG_BILINEAR_FIXED);
    // Set image resolution to 300 DPI
    imageresolution($newImage, 300, 300);
    // Save image as PNG
    $imageName = $folder . time() . '.png';
    imagepng($newImage, $imageName);
    echo $imageName;
    // Delete cropped images
    $files = glob($folder2 . '/*');
    array_map('unlink', $files);
}
?>