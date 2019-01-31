<?php
$title = 'Dernière mesure';
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

<h1>Object Connecté DHT11</h1>
<?php
use DHT11\Model\MeasureManager;

echo "le ".$lastMeasure->date;
?>
<br>
<?php
echo "Température : ".$lastMeasure->temperature;
echo " Humidité : ".$lastMeasure->humidite;


$tempInt=(int)$temp;
$height=($tempInt/50*195)+160;
$top=(($tempInt+30)*4)*-1+435;

?>
<br>
<img src="../static/img/thermometer.jpg" id="termo"/>
<div class="rouge" style=
<?php
echo "\"height:".$height."px; top:".$top."px;\"";
?>>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('thermometer.phtml'); ?>