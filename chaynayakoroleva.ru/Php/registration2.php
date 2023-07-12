<?php
$conn=mysqli_connect("localhost", "u1734831_bdadmin", "Xt@Kww67YqaV", 'u1734831_chk');
if (!$conn) {
      die("Connection failed:" . mysqli_connect_error());
}
 echo "Connected successfully";
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $date = date('Y-m-d H:i:s');
    $sql ="INSERT INTO Forum (username, comment, date) VALUES ('$username', '$comment', '$date')";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
}
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="default-style" content="ie=edge">
    <link rel="icon" href="img/icon.ico" type "image/x-icon">
    <link rel="stylesheet" href="CSS/forum.css">
    <title>КТ ФОРУМ</title>
  </head>

  <body>
    <h1>Добро пожаловать на наш форум!</h1>
      <form action="" method="POST">
        <input type="text" name="username" placeholder="ваше имя" required>
        <textarea name="comment" rows="10" cols="300" placeholder="Ваш коментарий" required></textarea>
        <input type="submit">
      </form>

    <hr>

    <h2>Форум</h2>
    
    <?
    $sql = "SELECT * FROM `Forum`";
    if($result = mysqli_query($conn, $sql)){
        $rowsCount = mysqli_num_rows($result); // ���������� ���������� �����
    echo "<p>�������� ��������: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>���</th><th>�������</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["comment"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
    }
    ?>
 
    <p>Здесь пока нет комментариев :(</p>

  </body>

</html>
	