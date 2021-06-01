<?php
include("../config.php");
$id = $_GET['id'];
$query = "SELECT * FROM anime WHERE id=$id";
$show = mysqli_query($conn, $query);
$folder = '../images';

while($data = mysqli_fetch_assoc($show)){
    $image = $data['anime_image'];
    unlink("$folder/$image");
}

$query = "DELETE FROM anime WHERE id=$id";
if(mysqli_query($conn, $query)){
    header("location:../index.php");
}