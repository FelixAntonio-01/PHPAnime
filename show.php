<?php
$title="Show";
  include("header.php");
  include("config.php");
  $id = $_GET['id'];
  $query = "SELECT * FROM anime WHERE id=$id";
  $show = mysqli_query($conn, $query);
  while($data = mysqli_fetch_assoc($show)){
?>
    <div class="container mt-5 bg-white">
        <div class="text-center">
            <img src="images/<?php echo $data['anime_image']?>" alt="" class="img img-thumbnail">
            <a href="edit.php?id=<?php echo $data['id']?>"> <br>Edit</a>

            <form action="php/Delete.php?id=<?php echo $data['id']?>" method="POST">
              <button type="submit">Delete</button>
            </form>
            <hr class="rounded">
            <h3><?php echo $data['anime_name']?></h3>
            <p class="text-secondary"> <?php echo $data['genres']?> </p>
        </div>
        <div>
            <p><?php echo $data['anime_description']?></p>
        </div>
    </div>
<?php } ?>
<?php include("footer.php")?>