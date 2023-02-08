<h1>Bienvenue</h1>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../assets/img/logos-1.jpg" type="image/x-icon">
  <title>Homepage</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="../assets/style.css" rel="stylesheet">

</head>
<!DOCTYPE html>
<html lang="en">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home.php" style="font-size:25px;">Takalo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <form action="<?php echo site_url('Recherche/search')?>" method="get">
            <input type="text" name="cle">
            <select name="selected" id="">
              <?php for($i=0;$i<count($objet);$i++) {?>
                <option value="<?php echo $objet[$i]['id']?>"><?php echo $objet[$i]['categorie'];?></option>
                <?php }?>
            </select>
            <input type="submit" value="Rechercher">
          </form>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('Affiche/listeCat')?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('ObjetController/others')?>">Echanger</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('DemandeController/index')?>">Liste Propositions</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Welcome/index')?>">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br> <br>
