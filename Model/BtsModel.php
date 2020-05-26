<?php
require ("entities/BtsEntity.php");
include_once 'Model/Credentials.php';
class BtsModel {

    public function GetBandTypes()
    {
        require 'Credentials.php'; 
        $sql = "SELECT DISTINCT name FROM kpop;";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $types = array();
        
        while($row = mysqli_fetch_array($result))
        {
            array_push($types, $row[0]);
        }
        mysqli_close($conn);
        return $types;
    }
    public function GetBandByName($name)
    {
        require 'Credentials.php';        
        $sql = "SELECT * FROM kpop WHERE name LIKE '$name';";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $btsArray = array();
        
      
        while($row = mysqli_fetch_array($result))
        {
            $name = $row[1];
            $numberofmembers = $row[2];
            $country = $row[3];
            $image = $row[4];
            
            $bts = new BtsEntity(-1,$name,$numberofmembers,$country,$image);
            array_push($btsArray,$bts); 
            
                     
        }
        mysqli_close($conn);
        return $btsArray;
    }
}
?>
