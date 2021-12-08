<?php

include_once('db.php');


$brand = $_POST['brand']; $model = $_POST['model'];$equipment = $_POST['equipment'];$cost = $_POST['cost'];

$sql = "INSERT INTO cars (brand, model,equipment,cost) VALUES ('$brand', '$model','$equipment','$cost' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showCars.php");

?>
