<?php
function show_form()
{
?>
<link rel="stylesheet" href="../CSS/reset.css">
<div class="form_page">
      <a  class="logo-index" href="../index.html"></a>
      <form action="" method=post enctype="multipart/form-data">
        <div class="main_form">
            <div class="header_text">Введите ваши данные, в ответном письме вы получите ссылку
              на страницу с каталогами. Спасибо!
            </div>
            <div class="input_area">
              <br />Имя<br />
              <input type="text" name="username" maxlength="40" size="40">
              <br />Контактный телефон<br />
              <input type="phone" name="phone" size="40">
              <br />Контактный email<br />
              <input type="email" name="email" size="40">
              <br />Введите пароль<br />
              <input type="password" name="password" maxlength="15" size="15">
              <br />Сообщение<br />
              <textarea rows="3" name="message" cols="30" maxlength="500" size="50"></textarea>
            </div>
            <input class="form_button" type="submit" value="Отправить" name="submit">
        </div>
        </form>
    </div>
      <style>
        :root {
        --gold-theme-color: #F8B043;
        --blue-main-color: #5C98BD;
        --red-main-color: #da251d;
        --grey-main-color: #bdcad2;
        --background-gray:#E5E5E5;
        --background-transparency:rgba(12, 12, 12, 0.5);
}
        body{
          height: 100%;
          background: linear-gradient(121deg, #b2a4b9 0%, #a2a1a4 100%), linear-gradient(121deg, #a2a1a4 0%, rgba(0, 255, 71, 0) 100%), linear-gradient(127deg, #8c7e76 0%, #28201d 100%), radial-gradient(107% 142% at 15% 104%, #F3D0FC 0%, #7d7777 100%), radial-gradient(100% 100% at 50% 0%, #989699 0%, #8c7e76 100%), radial-gradient(100% 100% at 50% 0%, #989699 0%, #8c7e76 100%), linear-gradient(127deg, #a6acbd 0%, #F8B043 100%);
          background-blend-mode: overlay, color, overlay, difference, color-dodge, difference, normal;
        }
        .form_page{
          padding: 1%;
        }
        .logo-index{
          display: block;
          width: 5rem;
          height: 12vh;
          background:url(../Images/logo-clear.png);
          background-size: 5rem;
          background-repeat: no-repeat;
        }
        .main_form{
          margin: 0 10% 0 10%;
          border: 1rem outset var(--grey-main-color);
          border-radius: 2rem;
          background: linear-gradient(121deg, #b2a4b9 0%, #a2a1a4 100%), linear-gradient(121deg, #a2a1a4 0%, rgba(0, 255, 71, 0) 100%), linear-gradient(127deg, #8c7e76 0%, #28201d 100%), radial-gradient(107% 142% at 15% 104%, #F3D0FC 0%, #7d7777 100%), radial-gradient(100% 100% at 50% 0%, #989699 0%, #8c7e76 100%), radial-gradient(100% 100% at 50% 0%, #989699 0%, #8c7e76 100%), linear-gradient(127deg, #a6acbd 0%, #F8B043 100%);
          background-blend-mode: overlay, color, overlay, difference, color-dodge, difference, normal;
        }
        form{

        }
        .form_button{
          margin: 2% 5% 2% 5%;
          display: flex;
          width: 40%;
          height: 4rem;
          align-items: center;
          justify-content: center;
          border: 1px solid var(--gold-theme-color);
          background-color: transparent;
          background-image: none;
          color: var(--gold-theme-color);
          font-size: 1.5rem;
          font-weight: 500;
          text-decoration: none;
        }
        .form_button:hover{
          cursor: pointer;
          box-shadow: 0 0 2rem var(--gold-theme-color);
          border: 5px solid #B0CBC4;
          background-color: var(--background-transparency);
          border-top-left-radius: 100% 20px;
          border-bottom-right-radius: 100% 20px;
          font-size: 20px;
          color: var(--gold-theme-color);
          transition-duration: 1s;
        }
        @media all and (max-width: 500px){
          .form_button{
            margin: 5%;
            font-size: 1rem;
            width: 60%;
          }
          .main_form input{
            width: 90%;
          }
          .main_form textarea{
            width: 90%;
          }
          .logo-index{
            margin-left: 10%;
            width: 4rem;
            background-size: 4rem;
          }
        }

        .input_area{
          margin-left: 5%;
          color: var(--gold-theme-color);
        }
        input{
          background-color: var(--grey-main-color);
          width: 50%;
          height: 2em;
          border: 2px solid var(--blue-main-color);
          border-top-left-radius: 10px ;
        }
        textarea{
          background-color: var(--grey-main-color);
          width: 50%;
          border: 3px solid var(--blue-main-color);
          border-radius: 10px;
        }
        .header_text{
          margin: 0 5% 0 5%;
          text-align: center;
          /* font-family: 'Play', sans-serif; */
          font-size: 1.5rem;
          color: #F8B043;
        }
        
      </style>
<?
}
function complete_mail() {
       // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменных $_POST['mess'], $_POST['name'], $_POST['tel'], $_POST['email'] все аналогично
       $_POST['message'] =  substr(htmlspecialchars(trim($_POST['message'])), 0, 500);
       $_POST['username'] =  substr(htmlspecialchars(trim($_POST['username'])), 0, 30);
       $_POST['phone'] =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 30);
       $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50);
       // если не заполнено поле "Сообщение" - показываем ошибку 2
       if(empty($_POST['message']))
            output_err(2);
       // обратите внимание, теперь мы можем писать красивые письма, с помощью html тегов ;-)
       $mess = '
<a style="color:red; font-size:20px;" href="https://chaynayakoroleva.ru/Catalog/FULLcatalog.pdf">Ваша ссылка на каталог<a><br />
<b>Имя отправителя:</b>'.$_POST['username'].'<br />
<b>Контактный email:</b>'.$_POST['email'].'<br />
<b>Контактный телефон:</b>'.$_POST['phone'].'<br />
<b>Сообщение:</b>'.$_POST['message'].'<br />
<b>REMOTE_ADDR:</b>'.$_SERVER['REMOTE_ADDR'];

       // подключаем файл класса для отправки почты
    require '../phpmailer/PHPMailerAutoload.php';
    require '../Php/config.php';
    $mail = new PHPMailer;
 
    $mail->isSMTP();
 
    $mail->Host = 'mail.hosting.reg.ru';
    $mail->SMTPAuth = true;
    $mail->Username = $MAILNAME; // логин от вашей почты
    $mail->Password = $MAILPASS; // пароль от почтового ящика
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    $mail->From = 'mail@chaynayakoroleva.ru'; // адрес почты, с которой идет отправка
    $mail->FromName = 'Чайная королева'; // имя отправителя
    $mail->Subject = 'Ссылка на каталог';
    $mail->addAddress('mail@chaynayakoroleva.ru', 'Получатель');
    $mail->addAddress( $_POST['email'], 'Получатель 2');
    $mail->addBCC('chaynayakoroleva@gmail.com');
    $mail->IsHTML(true);  // отправка в виде HTML
   // Отсылаем копию если нужно.
   //  $mail->addCC('<кому>@yandex.ru');
   //              
   //              $mail->Subject = $_POST['title'];
 
             
      // если был файл, то прикрепляем его к письму
      //  if(isset($_FILES['attachfile1'])) {
      //           if($_FILES['attachfile1']['error'] == 0){
      //              $mail->AddAttachment($_FILES['attachfile1']['tmp_name'], $_FILES['attachfile1']['name']);
      //           }
      //           }
      //  if(isset($_FILES['attachfile2'])) {
      //           if($_FILES['attachfile2']['error'] == 0){
      //              $mail->AddAttachment($_FILES['attachfile2']['tmp_name'], $_FILES['attachfile2']['name']);
      //           }
      //           }
      //  if(isset($_FILES['attachfile3'])) {
      //           if($_FILES['attachfile3']['error'] == 0){
      //              $mail->AddAttachment($_FILES['attachfile3']['tmp_name'], $_FILES['attachfile3']['name']);
      //           }
      //  }
 
       $mail->Body = $mess;
       // отправляем наше письмо
       if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);
       echo '
       <div style="background-color:gray; color:gold; font-size:30px; display:flex; align-items: center;
       justify-content: center; block-size:100%;">Спасибо! Ваше письмо отправлено.
       <a href="../index.html">Нажмите для возврата на главную страницу</a></div>';
       
}
function output_err($num)
{
   $err[0] = 'ОШИБКА! Не введено имя.';
   $err[1] = 'ОШИБКА! Неверно введен e-mail.';
   $err[2] = 'ОШИБКА! Не введено сообщение.';
   echo '<p>'.$err[$num].'</p>';
   show_form();
   exit();
}
if (!empty($_POST['submit'])) 
complete_mail();
// Вносим данные в базу данных..
// $conn=mysqli_connect("localhost", "u1734831_bdadmin", "Xt@Kww67YqaV", 'u1734831_chk');
// $conn->set_charset('utf8mb4');
// if (!$conn) {
//       die("Connection failed:" . mysqli_connect_error());
// }
//  echo "Connected successfully";
// if (!empty($_POST['submit'])){
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $tel = $_POST['tel'];
//     $mess = $_POST['mess'];
//     $date = date('Y-m-d H:i:s');
//     $sql ="CREATE TABLE User_catalog (username, email, tel, mess, date) VALUES ('$username', '$email', '$tel', '$mess', '$date')";
// if (mysqli_query($conn, $sql)) {
//      echo "New record created successfully";
// }
// }
require '../Php/config.php'; 
if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])) {
      
    $conn = new mysqli("$HOST", "$USER", "$PASS", "$DB");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");
    $username = $conn->real_escape_string($_POST["username"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $password = $conn->real_escape_string($_POST["password"]);
    $message = $conn->real_escape_string($_POST["message"]);
    $date = date('Y-m-d H:i:s');
    // //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    // $username = stripslashes($username);
    // $username = htmlspecialchars($username);
    // $password = stripslashes($password);
    // $password = htmlspecialchars($password);
    // //удаляем лишние пробелы
    // $username = trim($username);
    // $password = trim($password);
    // //Проверка на уникальность имени пользователя
    // $myrow = mysqli_fetch_array($result);
    // if (!empty($myrow['id'])) {
    // exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    // }
    // // если такого нет, то сохраняем данные
    $sql = "INSERT INTO Clients (username, email, phone, password, message, date) VALUES ('$username', '$email', '$phone', '$password', '$message' '$date')";
    if($conn->query($sql)){
    echo "Данные успешно добавлены";
    } else{
    echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
else show_form();
?>