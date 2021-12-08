<?php

include_once('db.php');



$brand = $_POST['brand']; $model = $_POST['model'];$equipment = $_POST['equipment'];$cost = $_POST['cost']; $id = $_POST['id'];

$sql = "UPDATE cars SET brand='$brand', model ='$model',equipment ='$equipment',cost ='$cost' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showCars.php");
?>
