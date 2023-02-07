<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <?php echo count($objet); for($i=0; $i<count($objet); $i++){  ?>

        <div class="box">
            <?php echo $objet[$i]['titre']; ?>
            <?php for($a=0; $a<count($objet[$i]['photo']); $a++){ ?> 
                <?php $photo = $objet[$i]['photo'][$a]; echo $photo['nom'];} ?>
            <form action="userObject" method="post">
                <input type="hidden" name="idObjet" value="<?php echo $objet[$i]['id'] ?>">
                <input type="submit" value="Echange">
            </form>
                
        </div>
        
        <?php } ?>
    </div>
</body>
</html>