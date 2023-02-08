
<table class="table table-striped">
    <tr>
        <th>Nom</th>
        <th>Prix</th>
    </tr>
    <?php for($i=0;$i<count($objet);$i++){?>
    <tr>
        <td><?php echo $objet[$i]['titre'];?></td>
        <td><?php echo $objet[$i]['prix']?></td>
    </tr>
    <?php }?>  
</table>
