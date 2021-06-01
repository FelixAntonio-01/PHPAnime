<?php

include("../config.php");

$anime_name = $_POST['anime_name'];
$genres = $_POST['genres'];
$anime_description = $_POST['anime_description'];
$anime_image = $_FILES['anime_image']['name'];
$anime_image_tmp = $_FILES['anime_image']['tmp_name'];

$folder = "../images";


$s = move_uploaded_file($anime_image_tmp, "$folder/$anime_image");
$query = "INSERT INTO anime VALUES ('','$anime_name', '$genres', '$anime_image', '$anime_description')";
if (mysqli_query($conn, $query)) {
    header("location:../index.php");
} else {
    echo $conn->error;
}
