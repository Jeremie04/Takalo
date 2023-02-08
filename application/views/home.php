<!DOCTYPE html>
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

<body>
  <form action="<?php echo site_url('Recherche/search')?>" method="get">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home.php" style="font-size:25px;">Takalo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <input type="text" name="cle">
          <select name="selected" id="">
            <?php for($i=0;$i<count($objet);$i++) {?>
              <option value="<?php echo $objet[$i]['id']?>"><?php echo $objet[$i]['categorie'];?></option>
        <?php }?>
          </select>
          <input type="submit" value="Rechercher">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('Affiche/listeCat')?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
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
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categories:</h1>
        <div class="list-group">
        <?php for($i=0;$i<count($objet);$i++) {?>
          <a href="<?php echo site_url('Affiche/category_selector'); ?>?id_cat=<?php echo $objet[$i]['id']?>" class="list-group-item"><?php echo $objet[$i]['categorie'];?>
        <?php }?>
          
        </div> <br> <br> <br> <br>
        <div class="nav">
          <a href="<?php echo site_url('Affiche/mes_objet')?>" class="list-group-item">Mes Objets</a>
          <a href="<?php echo site_url('Affiche/form_ajout')?>" class="list-group-item">Ajouter de nouveaux objets</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <br> <br>
        <div class="row">
        <?php for($i=0;$i<6;$i++){?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              
                <?php $ran=rand(0,count($one));?>
              <img class="card-img-top" src="../assets/img/<?php echo $one[$ran]['nom']?>" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo site_url('Affiche/details');?>?id=<?php echo $one[$ran]['idObjet']?>"><?php echo $one[$ran]['titre'];?></a>
                </h4>
                <h5><?php ?><?php echo $one[$ran]['prix'];?>Ar</h5>
                <p class="card-text"><?php echo$one[$ran]['description'];?></p>
              </div>
              
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
            
          </div>
          <?php } ?>

          <!-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../assets/img/jb.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">

                  <a href="#">Item Two</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div> -->

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">ANDRIAKOTOHARISON Irina : ETU1924</p>
      <p class="m-0 text-center text-white">Anja  :  ETU00</p>
      <p class="m-0 text-center text-white">Ranto  :  ETU00</p>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
  </form>
</body>

</html>
