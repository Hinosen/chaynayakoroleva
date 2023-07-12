<html>
    <head>
    <title>Страница авторизации</title>
    </head>
    <body>
    <link rel="stylesheet" href="../CSS/reset.css">
    <div class="form_page">
        <a  class="logo-index" href="./index.html"></a>
        <form action="reg.php" method=post enctype="multipart/form-data">
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
    </body>
</html>
