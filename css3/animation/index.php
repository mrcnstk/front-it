<?php
session_start(); //Rozpoczęcie sesji

//Sprawdzenie, czy użytkownik jest zalogowany - jeśli nie to powrót do strony logowania
if(((isset($_SESSION['logged'])) && ($_SESSION['logged']==false)) || (!isset($_SESSION['logged']))) {
    
    header('Location: ../../logowanie/index.php');
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
    <link rel="stylesheet" href="../../style/kurs.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../../images/favicon_transparent.png">
    <script src="../../script/jquery_3_3_1.js"></script>
    <script src="../../script/course_menu.js"></script>
    <script>var CSSprogress = '<?php echo $_SESSION["css"]; ?>'; </script>
    <script src="../../script/spis_tresci.js"> </script>
    
</head>

<body>
    <div id="main">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle" />
        <div class="top_bar">
            <a href="../../index.php"><img src="../../images/tylko_logo.png" alt="logoFrontIT"></a>
            <div class="profile">
               <img src="../../images/acc_image.png" alt="account image">
               <div class="php_user">
               <?php
                    echo"<p>Witaj ".$_SESSION['imie']."!";
                    echo" ( <i>".$_SESSION['email']."</i> )<a href='../../logowanie/logout.php'>&nbsp;-&nbsp;<span style='color:red;'>Wyloguj się</span></a><br/>";
                    echo"<br/> Twój postęp w nauce: <br/><br/>";
                    echo"<span style='color:#41BB45;'>HTML: </span> ".(floor(($_SESSION['html'] *100) / $_SESSION['nocHTML']))."%   |  ";
                    echo"<span style='color:#11B3F0;'>CSS: </span>".(floor(($_SESSION['css'] *100) / $_SESSION['nocCSS']))."%    |  ";
                    echo"<span style='color:#F37321;'>JavaScript: </span>".(floor(($_SESSION['js'] *100) / $_SESSION['nocJS']))."%"; 
                ?>
                </div>
            </div>
        </div>
        <nav class="nav_bar">
        <a class="home" href="../../index.php"><img id="home_image" src="../../images/home png.png" alt="homepng"></a>
            <a class="black" href="../../kurs_poczatek/index.php">Jak zacząć</a>
            <a class="green" href="../../html/spis_tresci/index.php">HTML</a>
            <a class="green" href="../../html5/spis_tresci/index.php">HTML5</a>
            <a class="blue" href="../../style_wprowadzenie/index.php">Style</a>
            <a class="blue" href="../../css/spis_tresci/index.php">CSS</a>
            <a class="blue" href="../spis_tresci/index.php">CSS3</a>
            <a class="orange" href="../../javascript/spis_tresci/index.php">JavaScript</a>
            <a class="orange" href="../../co_dalej/index.php">Co dalej?</a>
        </nav>
        <div class="mainbox">
            <div class="course">
                <h2>Właściwość ANIMATION</h2>
                <hr>
                <p>Właściwość ta pozwala na animowanie elementów HTML bez użycia zewnętrznych skryptów JavaScript. Animacja to tak naprawdę przejście z jednego stylu do drugiego przy pomocy KEYFRAMES, które będą omówione poniżej.</p> 
                <p> <b>@keyframes</b> jest to sekcja w pliku CSS, która mówi nam z jakich stylów i do jakich stylów przechodzimy. Przykładowo, jeśli chcemy zmienić kolor tekstu z czerwonego na zielony, to tworzymy następującą definicje:</p>
               <br/>
              <div class="code_box"><br/><p>
                @keyframes MojaNazwa {<br/>
                from {color: red; }<br/>
                to {color: green; }<br/>
                }<br/>
                </p></div><br/>
               <p> Następnie mając stworzoną definicję KEYFRAMES, możemy dodać właściwość ANIMATION do stylów elementu, który chcemy animować:</p><br/>
               <br/>
               <div class="code_box"><br/><p>
                p {<br/>
                border:2px solid green;<br/>
                animation: MojaNazwa 3s infinite;<br/>
                }<br/>
                </p></div><br/>
                <p>Pierwsza wartość, to nazwa KEYFRAMES, która ma zostać wykonana. Druga wartość to czas trwania animacji, a trzecia mówi o tym, że ma być ona wykonywana cały czas. Jest jeszcze kilka własności, które warto doczytać w dokumentacji.</p>
                <br/><br/><br/>    
                <div class="bottom_buttons">
                <a href="../gradient/pytanie/index.php"><button class="btn-primary">Wstecz</button></a>
                <a href="pytanie/index.php"><button class="btn-primary" >Dalej</button></a>
               </div>  
            </div>
            <div class="content_list" id="css3_spis_tresci"> </div>
        </div>
    </div>

</body>

</html>