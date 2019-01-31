<?php
namespace DHT11\Model;

use \DHT11\Model\Measure;
 
class MeasureManager extends DBManager
{
    public function createMeasure($date,$temperature,$humidite){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO Donnees_MyDHT11 (date,temperature,humidite) VALUES (:date, :temperature, :humidite)');
        
        $req->execute(array(
            'date' => $date,
            'temperature' => $temperature,
            'humidite' => $humidite
        ));
        
        $req->closeCursor();
    }
    public function allGetMeasure(){
        $bdd = $this->dbConnect();
        $req = $bdd->query('SELECT id,date,temperature,humidite FROM Donnees_MyDHT11 ORDER BY id');
        $measures = [];
        while ($measureRow = $req->fetch()) {
            
            $measure = new Measure();
            
            $measure->id = $measureRow['id'];
            
            $measure->date = $measureRow['date'];
            
            $measure->temperature = $measureRow['temperature'];
            
            $measure->humidite = $measureRow['humidite'];
            array_push($measures, $measure);
        }
        
        return $measures;
    }
    
    public function getLastMeasure(){
        $lastMeasure = null;
        
        $bdd = $this->dbConnect();
        

        $req = $bdd->prepare('SELECT id,date,temperature,humidite FROM Donnees_MyDHT11 ORDER BY id DESC LIMIT 1');
        
        $req->bindParam(':id', $id);
        
        if ($req->execute()) {
            if ($measureRow = $req->fetch()) {
                $lastMeasure = new Measure();
                $lastMeasure->id = $measureRow ['id'];
                $lastMeasure->date = $measureRow ['date'];
                $lastMeasure->temperature = $measureRow ['temperature'];
                $lastMeasure->humidite = $measureRow ['humidite'];
            }
        }
        return $lastMeasure;
    }
}

