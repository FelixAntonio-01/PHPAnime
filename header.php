<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>

  <style>
    html,
    body {
      margin: 0px;
      font-family: 'Papyrus';
      font-size: 22px;
      background-color: black;
      overflow-y: auto;
      overflow-x: auto;
      visibility: visible;
    }


    label {
      color: white;
    }

    ul li ul {
      visibility: visible;
      overflow: visible;
    }

    hr.rounded {
      border-top: 8px solid #bbb;
      border-radius: 5px;
      overflow: visible;
    }

    .jumbotron {
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("assets/images/animeheader.jpg");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      padding: 2rem;
    }
    .logo .img-default{
      /* position: ; */
      display: inline-block;
      top: 0;
      left: 0; 
      z-index: 99;
    }
    .logo .img-hover{
      display: none;
      position: relative;
      top: 0;
      left: 0; 
      z-index: 99;
    }

    .logo:hover .img-hover{
      display: inline-block;
      position: relative;
    }

    .logo:hover .img-default{
      display: none;
    }
    .text-blue {
      color: blue;
    }

    .text-red {
      color: white;
    }

    .h1 {
      font-size: 120px;
    }

    
  </style>
  <title> <?php echo $title ?> </title>
</head>

<body>
  <!-- Navbar -->
  <div class="jumbotron">
    <nav class="navbar navbar-expand-lg mt-0">
      <div class="container-fluid">
        <a class="navbar-brand text-red" href="index.php">
          <div class="logo">
            <img src="assets/images/rem.png" height="80" title="mycompanylogo" class="img-default" >
            <img src="assets/images/ram.png" height="80" title="mycompanylogo2" class="img-hover">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php $title == "Animos" ? print("active") : print("text-red") ?> active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php $title == "Create" ? print("active") : print("text-red") ?>" href="create.php">Add My Animes</a>
            </li>
            </li>

            <!-- dropdown not working -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link text-red dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                dropdownmenu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->

            <!-- <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div> -->


          </ul>
        </div>
      </div>
    </nav>

    <h1 class="text-center py-xl-5 text-blue h1">Animos</h1>
  </div>