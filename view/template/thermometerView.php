<?php
$title = 'Thermomètre';
?>
<?php 
ob_start(); 
?>
<?php
if ($lastMeasure) {
?>
    <div>
    <?php echo $lastMeasure->id; ?> - <?php echo $lastMeasure->date; ?> - <?php echo $lastMeasure->temperature; ?> <?php echo $lastMeasure->humidite; ?>
    </div>
    <br>
    <br>
<?php
}
?>
<ul>        

<?php
foreach ($measures as $measure) {
?>

    <li>
        <?php echo $measure->id; ?> - <?php echo $measure->date; ?> - <?php echo $measure->temperature; ?> <?php echo $measure->humidite; ?>
    </li>
</ul>	
<?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('thermometer.phtml'); ?>