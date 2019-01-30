<?php
session_start();

if(((isset($_SESSION['logged'])) && ($_SESSION['logged']==false)) || (!isset($_SESSION['logged']))) {
    
    header('Location: ../logowanie/index.php');
    exit(); //Nie wykonuje pozostałej części kodu po przekierowaniu poprzez header
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontIT - Kurs HTML CSS oraz JavaScript</title>
    <link rel="stylesheet" href="../style/main_page_style.css">
    <link rel="stylesheet" href="../style/kurs.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../images/favicon_transparent.png">
    <script src="../script/jquery_3_3_1.js"></script>
    <script src="../script/course_menu.js"></script>
</head>

<body>
    <div id="main">
            <label for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle" />
        <div class="top_bar">
            <a href="../index.php"><img src="../images/tylko_logo.png" alt="logoFrontIT"></a>
            <div class="profile">
               <img src="../images/acc_image.png" alt="account image">
               <div class="php_user">
               <?php
                    echo"<p>Witaj ".$_SESSION['imie']."!";
                    echo" ( <i>".$_SESSION['email']."</i> )<a href='../logowanie/logout.php'>&nbsp;-&nbsp;<span style='color:red;'>Wyloguj się</span></a><br/>";
                    echo"<br/> Twój postęp w nauce: <br/><br/>";
                    echo"<span style='color:#41BB45;'>HTML: </span> ".(floor(($_SESSION['html'] *100) / $_SESSION['nocHTML']))."%   |  ";
                    echo"<span style='color:#11B3F0;'>CSS: </span>".(floor(($_SESSION['css'] *100) / $_SESSION['nocCSS']))."%    |  ";
                    echo"<span style='color:#F37321;'>JavaScript: </span>".(floor(($_SESSION['js'] *100) / $_SESSION['nocJS']))."%"; 
                ?>
                </div>
            </div>
        </div>
        <nav class="nav_bar">
            <a class="home" href="../index.php"><img id="home_image" src="../images/home png.png" alt="homepng"></a>
            <a class="black" href="index.php">Jak zacząć</a>
            <a class="green" href="../html/spis_tresci/index.php">HTML</a>
            <a class="green" href="../html5/spis_tresci/index.php">HTML5</a>
            <a class="blue" href="../style_wprowadzenie/index.php">Style</a>
            <a class="blue" href="../css/spis_tresci/index.php">CSS</a>
            <a class="blue" href="../css3/spis_tresci/index.php">CSS3</a>
            <a class="orange" href="../javascript/spis_tresci/index.php">JavaScript</a>
            <a class="orange" href="../co_dalej/index.php">Co dalej?</a>
        </nav>
        <div class="mainbox">
            <div class="course">
                <h2>Od czego zacząć?</h2>
                <hr>
                <p>Osoba początkująca, która nigdy nie miała styczności z tworzeniem stron internetowych, najczęściej przeszukując wyszukiwarkę <i>Google</i> natknie się na mnóstwo stron opisujących pracę i zadania "front-end developera". Tak na prawdę na początkowym etapie nauki nie ma sensu zawracać sobie głowy informacjami o frameworkach czy npm'ach. Skupmy się na podstawach, a podstawą jest HTML, który odpowiada za strukturę strony. Na początku warto nauczyć się budowy dokumentu HTML, poznać podstawowe tagi oraz stworzyć kilka własnych, prostych w budowie stron. Następnie warto zapoznać się z arkuszami stylów, czyli CSS, dzięki któremu stworzone wcześniej strony uzyskają świetny wygląd oraz responsywność. Mając podstawowe umiejętności wcześniej wymienionych języków w kieszeni warto poznać język JavaScript, który pozwala na tworzenie świetnych aplikacji.</p>
               <br/> <p>Nie pozostaje nic innego, jak tylko zabrać się do pracy. Kliknij w przycisk poniżej, aby przejść do kursu HTML i rozpocząć swoją przygode z programowaniem.</p>
               <br/> <br/> <br/>
               <div class="bottom_buttons">
               <a href="../html/czym_jest_html/index.php"><button class="btn-primary">Przejdź do kursu</button></a>
               </div>
            </div>
        </div>
    </div>

</body>

</html>