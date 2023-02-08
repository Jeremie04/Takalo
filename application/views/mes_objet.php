<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">

<!-- Custom styles for this template -->
<link href="../assets/style.css" rel="stylesheet">

</head>
<body>
      <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home.php" style="font-size:25px;">Takalo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categories.php">Categories
            <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br> <br> <br>

<!-- Page Content -->
<div class="container">

    <h3>Categorie : </h3>

<div class="col-lg-9">
        <br> <br>
        <div class="row">
        <?php
              for($i=0;$i<count($objet);$i++){?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../assets/img/<?php echo $objet[$i]['nom']?>" alt=""></a>
              <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $objet[$i]['titre']?></a>
                  </h4>
                <h5><?php echo $objet[$i]['prix']?></h5>
                <p class="card-text"><?php echo $objet[$i]['description']?></p>
              </div>
              <a href="<?php  echo site_url('Fonction/sup')?>?id_objet=<?php echo $objet[$i]['id']?>">Supprimer</a>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
             
            </div>
          </div>
          <?php   } ?>

          </div>
  <!-- /.container -->
          <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">ANDRIAKOTOHARISON Irina : ETU1924</p>
      <p class="m-0 text-center text-white">RAKOTOMAVO Arisoa Anjamalala  :  ETU002007</p>
      <p class="m-0 text-center text-white">Ranto  :  ETU00</p>

    </div>
    
</body>
</html>