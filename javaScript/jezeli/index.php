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
    <script>var JSprogress = '<?php echo $_SESSION["js"]; ?>'; </script>
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
            <a class="blue" href="../../css3/spis_tresci/index.php">CSS3</a>
            <a class="orange" href="../spis_tresci/index.php">JavaScript</a>
            <a class="orange" href="../../co_dalej/index.php">Co dalej?</a>
        </nav>
        <div class="mainbox">
            <div class="course">
            <h2>Instrukcja warunkowa</h2>
                <hr>
                <p>Często kiedy piszemy kod spotykamy się z sytuacją, gdy chcemy wykonać daną część kodu na podstawie pewnej zależności np. Jeżeli x jest równe 5 to wypisz na ekran "x jest równe 5". To tylko prosty przykład, ale właśnie o coś takiego nam chodzi.
                Pozwalają nam na to <b> instrukcje warunkowe</b> które opierają się o słowo kluczowe <b>if</b>: </p> 
               <br/>
               <div class="code_box"><br/><p>
                &lt;head&gt; &lt;/head&gt; <br/>
                &lt;body&gt;<br/>
                &lt;script&gt;<br/>
                if (warunek) { <br/>
                // Jeżeli warunek jest spełniony, to wykonuje kod pomiędzy klamrami<br/>
                }<br/>
                &lt;/script&gt;<br/>
                &lt;/body&gt;<br/>
                </p></div>
                <br/>
                <p> Powyższy przykład wykona kod pomiędzy klamrami, tylko gdy warunek jest spełniony. W przeciwnym razie przejdzie do dalszego wykonywania kodu strony. A co jeśli w razie niespiełnionego warunku chcemy wykonać daną czynność?</p>
                <br/>
                <div class="code_box"><br/><p>
                &lt;head&gt; &lt;/head&gt; <br/>
                &lt;body&gt;<br/>
                &lt;script&gt;<br/>
                if (warunek) { <br/>
                // Jeżeli warunek jest spełniony, to wykonuje kod pomiędzy klamrami<br/>
                }<br/>
                else {<br/>
                    //Jeżeli warunek nie jest spełniony, wykonana zostaje ta częśc kodu<br/>
                }<br/>
                &lt;/script&gt;<br/>
                &lt;/body&gt;<br/>
                </p></div>
                <br/>
                <p>Tutaj z pomocą przychodzi słowo <b>else</b>, dzięki któremu, w razie niespełnionego warunku wykonamy zadany kod. </p>
                <br/><br/><br/>    
                <div class="bottom_buttons">
                <a href="../logiczne/index.php"><button class="btn-primary">Wstecz</button></a>
                <a href="pytanie/index.php"><button class="btn-primary" >Dalej</button></a>
               </div>  
            </div>
            <div class="content_list" id="js_spis_tresci"> </div>
        </div>
    </div>

</body>

</html>