<?php
$title = 'Toutes les mesures';
?>
<?php 
ob_start(); 
?>
      

// <?php
foreach ($measures as $measure) {
?>
<ul>
    <li>
        <?php echo $measure->id; ?> - <?php echo $measure->date; ?> - <?php echo $measure->temperature; ?> <?php echo $measure->humidite; ?>
    </li>
</ul>	
// <?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('thermometer.phtml'); ?>