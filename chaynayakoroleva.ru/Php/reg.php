<?php
    if (isset($_POST['username'])) { $username = $_POST['username']; if ($username == '') { unset($username);} } //заносим введенный пользователем логин в переменную $username, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($username) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $username = trim($username);
    $password = trim($password);
 // добавляем данные пользователя
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $date = date('Y-m-d H:i:s');
 // подключаемся к базе
    include ("dbconnect.php");// файл dbconnect.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь проверка на существование пользователя с таким же логином
    mysqli_set_charset($db, "utf8");
    // проверка на отсутсвие данных в базе с идентичными параметрами
    $queryUser="SELECT username FROM Clients WHERE username='$username'";
    $resultUser = mysqli_query($db, $queryUser);
    $rowUsername = mysqli_fetch_array($resultUser, MYSQLI_ASSOC);
    if (!empty($rowUsername['username'])) {
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой.");
    }

    $queryMail="SELECT email FROM Clients WHERE email='$email'";
    $resultMail = mysqli_query($db, $queryMail);
    $rowMail = mysqli_fetch_array($resultMail, MYSQLI_ASSOC);
    if (!empty($rowMail['email'])){
        exit ("Извините, введённый вами адрес электронной почты уже зарегистрирован. Введите другой.");
    }

    $queryPhone="SELECT phone FROM Clients WHERE phone='$phone'";
    $resultPhone = mysqli_query($db, $queryPhone);
    $rowPhone = mysqli_fetch_array($resultPhone, MYSQLI_ASSOC);
    if (!empty($rowPhone['phone'])){
        exit ("Извините, введённый вами телефон уже зарегистрирован. Введите другой.");
    }
    // если такого нет, то сохраняем данные
    $result2 = "INSERT INTO Clients (username, email, phone, message, password, date) VALUES('$username', '$email', '$phone', '$message','$password', '$date')";
    // Проверяем, есть ли ошибки
    if ($db->query($result2))
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
    else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
?>