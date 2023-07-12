<form action="" method=POST enctype="multipart/form-data">
    <div class="main_form">
        <div class="header_text">Введите ваши данные</div>
        <div class="input_area">
            <br />Имя<br />
            <input type="text" name="name" size="40">
            <br />Контактный email<br />
            <input type="email" name="email" size="40">
        </div>
        <input class="form_button" type="submit" value="Отправить" name="submit">
    </div>
</form>

<?php 
    require '../Php/config.php'; 
if (isset($_POST["name"]) && isset($_POST["email"])) {
      
    $conn = new mysqli("$HOST", "$USER", "$PASS", "$DB");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO Clients (name, email, date) VALUES ('$name', '$email', '$date')";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>