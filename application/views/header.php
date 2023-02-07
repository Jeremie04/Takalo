<h1>Bienvenue</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php for($i=0;$i<count($objet);$i++) {?>
    <a href="<?php echo site_url('Affiche/category_selector'); ?>?id_cat=<?php echo $objet[$i]['id']?>"><?php echo $objet[$i]['categorie'];?></a>
<?php }?>
</body>
</html>
