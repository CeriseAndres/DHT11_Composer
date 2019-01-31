<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="10">
    <title>Mon objet connecté</title>
    <link rel="stylesheet" href="../static/style/main.css" />
  </head>
  <body>
    <container>
      <h1>Object Connecté DHT11</h1>
      
      <?php
        $test=file_get_contents("../static/data.json");
        $json_test=json_decode($test, true);
        echo "Température : ".$json_test['temperature'];
        echo " Humidité : ".$json_test['humidite'];
        echo "<br> La date est : ".date("d M y");

        $file="../static/data.json";

        echo "<br>Dernière modification le ".date("d F  Y H:i:s",filemtime($file));
        $test=file_get_contents("../static/data.json");
        $json_test=json_decode($test, true);
        $temp=$json_test['temperature'];
        $tempInt=(int)$temp;
        $height=($tempInt/50*195)+160;
        $top=(($tempInt+30)*4)*-1+435;

        ?>
        <br>
        <img src="../static/img/thermometer.jpg" id="termo"/><div class="rouge" style=<?php

        echo "\"height:".$height."px; top:".$top."px;\"";

        ?>></div> 
        
    </container>
    <footer>

    </footer>



    <script src="script.js" type="text/javascript"></script>
  </body>
</html>
