<?php include ('__head.php'); ?>
<?php include ('__header.php'); ?>

<?php
    foreach($retornaNoticias as $id => $noticia){
?>
    <hr>
    <p><?php echo $noticia['titulo'];?></p>
    <p><?php echo $noticia['data_cad'];?></p>
    <p><a href="#">LER COMPLETA</a></p>

<?php
    }
?>


<?php include ('__footer.php'); ?>