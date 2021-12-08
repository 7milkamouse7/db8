<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showCars.php")    
    ?>

    <form action="insertIntoCars.php" method="post">
        <label>Brand</label><input name="brand" type="text"><br>
        <label>Model</label><input name="model" type="text"><br>
        <label>Equipment</label><input name="equipment" type="text"><br>
        <label>Cost</label><input name="cost" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
