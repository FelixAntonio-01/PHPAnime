<?php

include("../config.php");
$anime_name = $_POST['anime_name'];
$genres = $_POST['genres'];
$anime_description = $_POST['anime_description'];
$anime_image = $_FILES['anime_image']['name'];
$anime_image_tmp = $_FILES['anime_image']['tmp_name'];
$id = $_POST['id'];
$query = "SELECT * FROM anime WHERE id=$id";
$show = mysqli_query($conn, $query);
$folder = "../images";




if ($anime_image == "") {
    $query = "UPDATE anime 
        SET anime_name='$anime_name', genres='$genres', anime_description='$anime_description' 
        WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("location:../index.php");
    } else {
        echo $conn->error;
    }
} else {
    $s = move_uploaded_file($anime_image_tmp, "$folder/$anime_image");
    $query = "UPDATE anime 
        SET anime_name='$anime_name', genres='$genres', anime_image='$anime_image', anime_description='$anime_description' 
        WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("location:../index.php");
    } else {
        echo $conn->error;
    }
}
