<?php
$name = $_POST['name'];
$email = $_POST['email'];
$telnum = $_POST['telnum'];
$text = $_POST['text'];


$db_host = "localhost";
$db_user = "root"; 
$db_password = ""; 
$db_base = 'Bebra8'; 
$db_table = "otzivi"; 

try {
    // Бд коннект
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Менендез ты покойник!
    $db->exec("set name utf8");

    $data = array('name' => $name, 'email' => $email, 'telnum' => $telnum, 'text' => $text );
    // Zapros
    $query = $db->prepare("INSERT INTO $db_table (name, email, telnum, text) values (:name, :email, :telnum, :text)");
    // work zaprosas
    $query->execute($data);
    // Херня?
    $result = true;
} catch (PDOException $e) {
    // Если есть ошибка kek
    print "Ошибка!: <br/>";
}

if ($result) {
    echo "Успех. Информация занесена в базу данных";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Live</title>
    <link href="style.css" rel="stylesheet">
    <link href="img/3.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
<section class="header">
        <nav class="navbar">
            <a href="index.php" title="Главная">
                <img src="img/logo52.png">
                <p>Главная</p>
            </a>
            <a href="#about">О нашей пекарнии</a>
            <a href="#production">Наши преимущества</a>
            <a href="#why-us">Хиты продаж</a>
            <a href="#consultation">Лучшие повара</a>
            <a href="#contacts">Контакты</a>
        </nav>
    </section>

    <section class="form">
        <div class="cons-panel">
            <label for="name">ФИО:</label>
            <input id="name" name="name">

            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email">

            <label for="phonenum">Номер телефона:</label>
            <input type="tel" id="phoenum" name="telnum">

            <label for="appeal">Причина обращения:</label>
            <input class="big-input" id="appeal" name="text">
        </div>

        <form action="style.css">
            <button class="hero-btn">Отправить данные</button>
        </form>
        
        <label class="check-label" for="check">Согласие на обработку персональных данных</label>
        <input class="check" type="checkbox">
    </section>

    <img src="img/gruz1.gif">
    <section class="footer">
        <p>Новиков Олег Алексеевич <br>
        ИС-4-2 <br>
        2024 <br>
        Все права защищены</p>
    </section>
</body>