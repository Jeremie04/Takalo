<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i=0;$i<count($objet);$i++){?>
        <img class="card-img-top" src="../assets/img/<?php echo $objet[$i]['nom']?>" alt="" style="width:300px">
    <?php }?>
<div>
    <p><?php echo $objet[0]['titre']?></p>
    <p><?php echo $objet[0]['description']?></p>
    <p><?php echo $objet[0]['prix']?>Ar</p>
</div>
    
<h1>Historique d'Appartenance</h1>
<table class="table table-striped">
    <tr>
        <th>Membre</th>
        <th>Date Appartenance</th>
    </tr>
    <?php echo count($histo);
      for($i=0;$i<count($histo);$i++){?>
    <tr>
        <td><?php echo $histo[$i]['nom'];?></td>
        <td><?php echo $histo[$i]['dateAcceptation']?></td>
    </tr>
    <?php }?>  
</table>
</body>
</html>


