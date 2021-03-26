<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h2>Профиль</h2>
    <?php
        $mysqli = new mysqli('localhost', 'root', 'root', 'selection_committee');
        $sql = 'SELECT * FROM `enrollee` ORDER BY `Средний балл` DESC';
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_assoc($query);
        echo $row["ФИО"];
        
    ?>
    <div class="table">

    </div>
</body>
</html>