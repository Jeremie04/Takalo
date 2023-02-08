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
 
 
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categories:</h1>
        <div class="list-group">
        
        <?php for($i=0;$i<count($objet);$i++) {?>
          <?php if($this->session->userdata('id_admin')==1){?>
          <a href="<?php echo site_url('Fonction/sup_cat'); ?>?id=<?php echo $objet[$i]['id']?>" >Supprimer all Categories</a>
          <a href="<?php echo site_url('Affiche/category_selector'); ?>?id_cat=<?php echo $objet[$i]['id']?>" class="list-group-item"><?php echo $objet[$i]['categorie'];?>
          
       <?php }}?>
        
          
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
        
        <?php for($i=0;$i<count($one);$i++){?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="../assets/img/<?php echo $one[$i]['nom']?>" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo site_url('Affiche/details');?>?id=<?php echo $one[$i]['idObjet']?>"><?php echo $one[$i]['titre'];?></a>
                </h4>
                <h5><?php ?><?php echo $one[$i]['prix'];?>Ar</h5>
                <p class="card-text"><?php echo$one[$i]['description'];?></p>
              </div>
              <a href="<?php echo site_url('Affiche/listeBetween');?>?id=<?php echo $one[$i]['idObjet']?>&value=10">+/- 10%</a>
              <a href="<?php echo site_url('Affiche/listeBetween');?>?id=<?php echo $one[$i]['idObjet']?>&value=20">+/- 20%</a>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
            
          </div>
          <?php } ?>

          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  

  <!-- Bootstrap core JavaScript -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>
