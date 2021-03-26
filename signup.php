<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body align="center" width="100%">
    <h2>Регистрация</h2>
        
    <form method="post" align="center" name="form" enctype="multipart/form-data" style="margin: 0 auto;">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="secname" placeholder="Фамилия">
        <input type="tel" name="Telephon" placeholder="Телефон" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" value="+7">
        <input type="password" name="password" placeholder="Пароль">
        <input type="password" name="repassword" placeholder="Повторите пароль">
        <input type="submit" name="insert" value="зарегистрироваться"> 
        <a href="index.php">На главную</a>
    </form><br>

<?php

if (isset($_POST["insert"])) {
    if (isset($_POST["insert"]) && $_POST["password"] == $_POST["repassword"]) {
        $mysqli = new mysqli('localhost', 'root', 'root', 'selection_committee');
        $login=$_POST["login"];
        $password=$_POST["password"];
        $name=$_POST["name"];
        $secname=$_POST["secname"];
        $repassword=$_POST["repassword"];
        $Telephon=$_POST["Telephon"];
        $E_MAIL=$_POST["E_MAIL"];
        if (strlen($login)==0 || strlen($password)==0 || strlen($name)==0 || strlen($secname)==0 || strlen($repassword)==0) {
            echo "не все поля запоненны";
        }else{
            $link=mysqli_connect($host, $user, $pass, $bdName) or die (mysqli_error());
            $sql="INSERT INTO User (login, password,name,secname,Telephon,E_MAIL) VALUES ('$login', '$password','$name','$secname','$Telephon','$E_MAIL')";
            $result=mysqli_query($link,$sql);
        }
    }
    else{
        echo "пороли не совпадают";
    }
}
?>


</body>
</html> 