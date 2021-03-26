<?php
    $full_name = $_POST['FIO'];
    $number_passport = $_POST['number_passport'];
    $series_passport = $_POST['series_passport'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $special = $_POST['special'];
    $scanfile = $_FILES['scanfile'];

    if(empty($scanfile['name'])) {
        echo 'Скан аттестата является обязательным';
        exit();
    }
    $filename = $scanfile['name'];
    $allowed = array('jpeg', 'png', 'jpg', 'PNG');
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        echo 'Скан аттестата должен быть только jpeg, png или jpg формата ';
        exit();
    }
    $uploadfile = './scan_img/' . $filename;
    move_uploaded_file($scanfile['tmp_name'], $uploadfile);

    $mysqli = new mysqli('localhost', 'root', 'root', 'selection_committee');
    $sql_query = 'INSERT INTO `enrollee` (`full_name`, `phone`, `password`, `address`)
                  VALUES ("'.$full_name.'", "'.$phone.'", "1234", "'.$address.'")';
    $mysqli->query($sql_query);
    echo 'Заявка успешно отправлена';

?>