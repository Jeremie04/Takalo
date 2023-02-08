<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
    
    </div>
    <div class="content">
        <h1>Login</h1>
        <form action="<?php echo site_url('Welcome/login'); ?>"id="myForm" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse Email:</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe:</label>
          <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-default">Se connecter</button>
    </form> <br>
        <a href="<?php echo site_url('Inscription/page'); ?>">ICI</a> pour vous inscrire.
    </div>
    <div class="footer">
          <p>ANDRIAKOTOHARISON Irina : ETU1924</p>
          <p>RAKOTOMAVO Arisoa Anjamalala  :  ETU002007</p>
          <p>Ranto  :  ETU00</p>
    </div>
</body>
</html>