<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Cars</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM cars ORDER BY id';


    /* Надсилаємо запит серверу */
    if($result = $mysqli->query($sql)) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Cars: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ID</th><th>Brand</th><th>Model</th><th>Equipment</th><th>Cost</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['brand'], $row['model'], $row['equipment'], $row['cost']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoCarsForm.php">Вставити рядок</a><br></li>
        <li><a href="updateCarsForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromCarsForm.php">Видалити рядок</a><br></li>
        <li><a href="showAll.php">Звіт</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
