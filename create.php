<?php $title = "Create";
include("header.php") 

?>
<div class="container mt-5">

  <form enctype="multipart/form-data" method="POST" action="php/Create.php">
    <div class="mb-3">
      <label for="anime_name" class="form-label">Anime Name</label>
      <input type="text" name="anime_name" class="form-control" id="anime_name" aria-describedby="emailHelp" >

    </div>
    <div class="mb-3">
      <label for="genres" class="form-label">Genre</label>
      <select name="genres" id="" class="form-control">
        <?php
        $genres = array("Action", "Adventure", "Sport", "Drama", "Fantasy", "Slice of life", "Sci-FI", "Romance");

        for ($i = 0; $i < count($genres); $i++) {
        ?>
          <option value="<?php echo $genres[$i] ?>"><?php echo $genres[$i] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="anime_image" class="form-label">Anime Image</label>
      <input type="file" class="form-control" name="anime_image" id="anime_image">
    </div>
    <div class="mb-3">
      <label for="anime_description" class="form-label">Anime Description</label>
      <textarea name="anime_description" id="" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <div>
      <br>
    </div>
  </form>

</div>

<?php include("footer.php") ?>