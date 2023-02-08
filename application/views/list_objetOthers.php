


<body>
    <div class="container">
    <h3>Liste des Objets à Echanger</h3>
    <a href="<?php echo site_url('DemandeController/index')?>">liste Proposition</a>
    <?php for($i=0; $i<count($objet); $i++){  ?>              

      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <br> <br>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="../assets/img/niketech.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $objet[$i]['titre']; ?>
                        </h4>
                        <h5><?php echo $objet[$i]['prix']; ?> Ar</h5>
                        <p class="card-text"> <?php echo $objet[$i]['description']; ?></p>
                    </div>
                    <div class="card-footer">
                        <?php $this->load->library('session'); 
                        echo $_SESSION['idUser']; ?>
                        <form action="<?php echo site_url('ObjetController/userObject')?>" method="post">
                            <input type="hidden" name="idObjet" value="<?php echo $objet[$i]['id'] ?>">
                            <input type="submit" value="Echange">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        
    </div>
    <?php } ?>
    </div>
</body>
</html>