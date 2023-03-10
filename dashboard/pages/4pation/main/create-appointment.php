<?php

require_once("../../../../db/db.php");

session_start();
if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../../../../login/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/main/style.css">
    <link rel="stylesheet" href="../style/main/reset.css">
    <link rel="stylesheet" href="../style/main/media.css">
    <title>Мой Кабинет | Все Доктора</title>
</head>
<body>
    <main>
        <header>
            <div class="company">
                <a href="index.php">Lorem</a>
            </div>
            <div class="logo"></div>
            <button class="header-humburger">
                <img src="../img/humburger.png">
            </button>
        </header>
        <aside>
            <nav class="nav-menu">
                <p class="nm-panel">Панель управления</p>
                <ul class="nm-url" style="margin-top: 24px;">
                    <a href="index.php" class="nm-url-link">Консоль</a>
                    <a href="create-appointment.php" class="nm-url-link">Записаться на прием</a>
                </ul>
                <ul class="nmu-i" style="margin-top: 24px;">
                    <a href="index.php" class="nm-url-link nmul-i"><i class="fa-solid fa-house fa-lg"></i></a>
                    <a href="create-appointment.php" class="nm-url-link nmul-i"><i class="fa-solid fa-user-doctor fa-lg"></i></a>
                </ul>
            </nav>
        </aside>
        <article>
            <div class="main-info mi-pat-doc">
                <a href="page-doctors/doctor-1.php" class="adoc-url">Василий Пупкин Максимович <br><br> Фельдшер</a>
                <a href="page-doctors/doctor-2.php" class="adoc-url">Алексей Буняев Кирилович <br><br> Окушер</a>
                <a href="page-doctors/doctor-3.php" class="adoc-url">Милай Алексей Николаевич <br><br> Хирург</a>
                <a href="page-doctors/doctor-4.php" class="adoc-url">Воробьёва Татьяна Владимировна <br><br> Врач УЗИ</a>
                <a href="page-doctors/doctor-5.php" class="adoc-url">Нестерова Инна Ивановна <br><br> Эндокринолог</a>
                <a href="page-doctors/doctor-6.php" class="adoc-url">Курыгина Лариса Николаевна <br><br> Терапевт</a>
                <a href="page-doctors/doctor-7.php" class="adoc-url">Куликова Ольга Михайловна <br><br> Невролог</a>
                <a href="page-doctors/doctor-8.php" class="adoc-url">Шанько Наталья Владимировна <br><br> Пульмонолог</a>
                <a href="page-doctors/doctor-9.php" class="adoc-url">Патока Алексей Федорович <br><br> ЛОР</a>
                <a href="page-doctors/doctor-10.php" class="adoc-url">Серебряков Игорь Николаевич <br><br> Гастроэнтеролог</a>
            </div>
        </article>
    </main>

    <div class="mobile-menu">
        <div class="header-humburger header-humburger-close">
            <img src="../img/humburger.png" id="closeMobileNav">
        </div>
        <nav class="mobile-nav">
            <ul>
                <li><a href="index.php">Консоль</a></li>
                <li><a href="create-appointment.php">Записаться на прием</a></li>
            </ul>
        </nav>
    </div>

    <script src="../script/main/humburger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
</body>
</html>