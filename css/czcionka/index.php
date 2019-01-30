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
            <a class="blue" href="../spis_tresci/index.php">CSS</a>
            <a class="blue" href="../../css3/spis_tresci/index.php">CSS3</a>
            <a class="orange" href="../../javascript/spis_tresci/index.php">JavaScript</a>
            <a class="orange" href="../../co_dalej/index.php">Co dalej?</a>
        </nav>
        <div class="mainbox">
            <div class="course">
                <h2>Edycja tekstu</h2>
                <hr>
                <p>Poniżej wymienione i opisane zostaną własności, które pozwolą edytować tekst:</p> 
                <p><br/>
                <b>font-family</b> - pozwala na wybór czcionki np. Arial, Times New Roman itp.
                <br/>
                <b>font-size</b> - pozwala na dopasowanie rozmiaru czcionki np. 20px, 30px, 40px
                <br/>
                <b>font-style</b> - Pozwala na podkreślenie / przekreślenie / pogrubienie tekstu
                <br/>
                <b>color</b> - Zmienia kolor tekstu
                <br/>
                <b>text-align</b> - przyjmuje wartości: left, center, right  |  wyrównują one tekst do lewej, do środka i do prawej strony
                <br/>
                <b>vertical-align</b> - przyjmuje wartości: top, middle, bottom   |  Wyrównuje tekst do góry, do srodka, do dołu
                <br/>
                <b>text-decoration</b> - przyjmuje wartości: none, inherit, overline, underline, line-through   |  dekoracja tekstu np. linia na dole lub górze
                </p><br/> <br/> <br/>
                <p>Powyżej wymienione zostało jedynie kilka własności. Zagłębiając się w dokumentację CSS oraz inne kursy poznasz o wiele więcej możliwości modyfikacji. W tym kursie skupimy jeszcze na kilku istotnych kwestiach.
                
                <br/><br/><br/>    
                <div class="bottom_buttons">
                <a href="../komentarze/pytanie/index.php"><button class="btn-primary">Wstecz</button></a>
                <a href="pytanie/index.php"><button class="btn-primary" >Dalej</button></a>
               </div>  
            </div>
            <div class="content_list" id="css_spis_tresci"> </div>
        </div>
    </div>

</body>

</html>