<?php
require '../vendor/autoload.php';


use DHT11\Model\MeasureManager;

$measureManager = new \DHT11\Model\MeasureManager();

$measures = $measureManager->allGetMeasure();

$lastMeasure = $measureManager->getLastMeasure();

if (!empty($_POST['date']) && !empty($_POST['temperature']) && !empty($_POST['humidite']))

{
    $create = new measureManager();
    $newMeasure = new measure();
    
    $newMeasure->date=$_POST['date'];
    $newMeasure->temperature=$_POST['temperature'];
    $newMeasure->humidite=$_POST['humidite'];
    $create->createMeasure($newMeasure->date,$newMeasure->temperature,$newMeasure->humidite);
    
    header ('Location: display_thermometer.php');
}

require '../view/template/thermometerView.php';