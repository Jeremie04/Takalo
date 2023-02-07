
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container">

        <?php echo count($proposition); for($i=0; $i<count($proposition); $i++){  ?>

            <div class="box">
                <?php echo $proposition[$i]['proposé']; echo $proposition[$i]['miproposé']; ?> 
                <form action="<?php echo site_url('accepter')?>" method="post">
                    <input type="hidden" name="idProposition" value="<?php echo $proposition[$i]['id'] ?>">
                    <input type="submit" value="Echange">
                </form>    
            </div>
            
        <?php } ?>
        </div>
    </body>
    </html>