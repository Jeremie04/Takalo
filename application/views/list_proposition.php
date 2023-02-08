

    <body>
        <div class="container">
            <?php if(count($proposition)==0){ ?>
                <h1>No Proposition yet</h1>
            <?php } ?>
            <ul>
                <?php for($i=0; $i<count($proposition); $i++){  ?>

                    <li>
                        <?php echo $proposition[$i]['proposé']; echo $proposition[$i]['miproposé']; ?> 
                        <form action="<?php echo site_url('DemandeController/accepter')?>" method="post">
                            <input type="hidden" name="idProposition" value="<?php echo $proposition[$i]['id'] ?>">
                            <input type="submit" value="accepter">
                        </form>    
                        <form action="<?php echo site_url('DemandeController/refuser')?>" method="post">
                            <input type="hidden" name="idProposition" value="<?php echo $proposition[$i]['id'] ?>">
                            <input type="submit" value="refuser">
                        </form>    
                    </li>
                    
                <?php } ?>
            </ul>
        </div>
    </body>
    </html>