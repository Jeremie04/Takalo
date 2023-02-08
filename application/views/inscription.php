<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    
    <title>Document</title>
</head>
<body>
  <div class="header">
    
  </div>
    
    <div class="content">
    <h1>Inscription</h1>
    <form action="<?php echo site_url('Inscription/inscrit'); ?>" method="post" id="myForm">
      <div class="form-group">
        <label for="exampleInputText1">Votre Nom</label>
        <input type="text" name="name" class="form-control" id="exampleInputText1" placeholder="Nom">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Votre Adresse Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputEmail1">Votre Numero de Telephone</label>
        <input type="email" name="num" class="form-control" id="exampleInputName" placeholder="Numero de Telephone">
      </div> -->
      <div class="form-group">
        <label for="exampleInputPassword1">Votre nouveau mot de passe</label>
        <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Check me out
        </label>
      </div>
      <button type="submit" class="btn btn-default">S'inscrire</button>
    </form>
    <a href="<?php  echo site_url('Welcome/index')?>"><p>Revenir a la page de Login</p></a>
  </div>
    <br>
    <div class="footer">
          <p>ANDRIAKOTOHARISON Irina : ETU1924</p>
          <p>RAKOTOMAVO Arisoa Anjamalala  :  ETU002007</p>
          <p>Ranto  :  ETU00</p>
    </div>
  </body>
  </html>