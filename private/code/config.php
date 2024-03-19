<?php
$host = "localhost";
$username = "studiog1_clovernet";
$pw = "Clover@1221@Net";
$db_name = "studiog1_foto_libro";

$link = new mysqli($host, $username, $pw, $db_name);
if (!$link) {
   die('Database connection failed');
}
