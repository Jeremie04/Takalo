<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Add Objects</title>
</head>
<body>
    <div class="content">
        <h3>Ajouter de nouveaux articles</h3>
        <form action="<?php echo site_url('Fonction/ajout')?>">
            <div class="form-group">
                <label for="exampleInput1">L'article:  </label>
                <input type="text" class="form-control" id="exampleInput1" name="titre">      
            </div> 
            <select name="cat" id="">
                <option value="">Choisir categorie</option>
                
                    <?php for($i=0;$i<count($o);$i++) {?>
                        <option value="<?php echo $o[$i]['id'];?>"><?php echo $o[$i]['categorie'];?></option>
                    <?php }?>
                
            </select> <br>
            <p>Description:</p>
            <textarea name="desc" id="" cols="30" rows="10"></textarea> <br> <br>
            <p>Prix :   <input type="text" name="prix"></p>
            <!-- <p>Inserer image:
                <input type="file" name="image" id="file">
            </p> -->
            <input type="submit" value="Ajouter">
        </form> 
    </div>
</body>
</html>