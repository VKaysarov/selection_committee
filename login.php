<?php
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if(empty($phone)) {
        var_dump($_POST);
        exit();
    }

    $mysqli = new mysqli('localhost', 'root', 'root', 'selection_committee');
    $sql_query = 'SELECT * FROM `enrollee` WHERE phone="'.$phone.'" AND password="'.$password.'"';
    $result = $mysqli->query($sql_query);
    if ($result->num_rows == 1) {
        echo "Все ок";
        // echo json_encode("Все ок");
        // header('Location: profile.html');
    } else {
        echo 'Неверный логин или пароль';
        // echo json_encode('Неверный логин или пароль');
    }

    // var_dump($result->fetch_row());
?>