<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Звіт</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT s.brand, s.model,e.equipment,c.cost FROM cars AS s LEFT JOIN equipment AS e ON s.equipment = e.id INNER JOIN cost AS c ON s.cost = c.id ORDER BY s.id';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт</h3><br>");   
        printf("<table><tr><th>Brand</th><th>Model</th><th>Equipment</th><th>Cost,$</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['brand'], $row['model'], $row['equipment'], $row['cost']);
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showCars.php">Таблиця cars</a><br></li>
        <li><a href="showCost.php">Таблиця cost</a><br></li>
        <li><a href="showEquipment.php">Таблиця equipment</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
