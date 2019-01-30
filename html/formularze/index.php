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
    <script>var HTMLprogress = '<?php echo $_SESSION["html"]; ?>'; </script>
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
            <a class="green" href="../spis_tresci/index.php">HTML</a>
            <a class="green" href="../../html5/spis_tresci/index.php">HTML5</a>
            <a class="blue" href="../../style_wprowadzenie/index.php">Style</a>
            <a class="blue" href="../../css/spis_tresci/index.php">CSS</a>
            <a class="blue" href="../../css3/spis_tresci/index.php">CSS3</a>
            <a class="orange" href="../../javascript/spis_tresci/index.php">JavaScript</a>
            <a class="orange" href="../../co_dalej/index.php">Co dalej?</a>
        </nav>
        <div class="mainbox">
            <div class="course">
                <h2>Formularze</h2>
                <hr>
                <p> Formularze to elementy strony, dzięki którym możemy pobrać od użytkownika konkretne dane np. w celu rejestracji konta lub zalogowania na stronę.</p>
                <p>Formularz jest definiowany za pomocą tagu FORM, który posiada również swój tag zamykający:
                <br/><br/>
                <div class="code_box"><br/><p>&lt;html&gt;<br/>
                &lt;head&gt;<br/>
                &lt;title&gt; Tabela &lt;/title&gt;<br/>
                &lt;/head&gt;<br/><br/>
                &lt;body&gt;<br/>
                &lt;form&gt; <br/><br/>
                &lt;/form&gt;<br/>
                &lt;/body&gt;<br/>
                &lt;/html&gt;<p></div>
                <br/><br/>
                <p>Wraz z otwierającym tagiem formularza występuje atrybut ACTION, który mówi nam o tym, gdzie mamy się udać po zatwierdzeniu formularza przyciskiem SUBMIT.</p>
                <p>Samo w sobie przekierowanie często nie wystarcza, ponieważ celem formularza jest zebranie danych i przesłanieich w odpowiednie miejsce w celu przetworzenia ich. Dlatego też po atrybucie ACTION występuje atrybut METHOD, który przyjmuje zazwyczaj dwie wartości: GET lub POST.
                   Metoda GET przesyła pobrane wartości formularza poprzez dołączenie do linku strony odpowiednich wartości. Metoda ta nie jest odpowiednia, jeśli zależy nam na bezpieczeństwie danych.
                   Metoda POST z kolei korzysta z bezpieczniejszych sposobów przesyłania danych, co czyni ją lepszą w przypadku, gdy zależy nam na bezpieczeństwie użytkownika.</p>
                <br/>
                <p> Dobrze, wiemy już, że formularz jest w stanie przesyłać dane, lecz co dokładnie znajduje się w formularzu i jak to umieścić? Tutaj z pomocą przychodzi znacznik INPUT, który jest jednym ze znaczników, które nie mają swojego "zamykającego brata bliźniaka".
                    Całość najlepiej zobrazuje przykład:
                </p>
                <br/>
                <form align="center">
                   Imię:     <input type="text" name="imie"/><br/>
                   Nazwisko: <input type="text" name="nazwisko"/><br/>
                   Płeć: <br/>
                   <input type="radio" name="plec" value="mezczyzna"/> Mężczyzna <br/>
                   <input type="radio" name="plec" value="kobieta"/> Kobieta <br/>
                   <input type="submit" value="Wyślij" /><br/>
                </form>
                <br/>  
                <p> Kod powyższego formularza:</p>  
                <div class="code_box"><br/><p>&lt;html&gt;<br/>
                &lt;head&gt;<br/>
                &lt;title&gt; Lista nienumerowana &lt;/title&gt;<br/>
                &lt;/head&gt;<br/><br/>
                &lt;body&gt;<br/>
                &lt;form &gt;<br/>
                   Imi&eogon;:     &lt;input type=&quot;text&quot; name=&quot;imie&quot;/&gt;&lt;br/&gt;<br/>
                   Nazwisko: &lt;input type=&quot;text&quot; name=&quot;nazwisko&quot;/&gt;&lt;br/&gt;<br/>
                   P&lstrok;e&cacute;: &lt;br/&gt;<br/>
                   &lt;input type=&quot;radio&quot; name=&quot;plec&quot; value=&quot;mezczyzna&quot;/&gt; M&eogon;&zdot;czyzna &lt;br/&gt;<br/>
                   &lt;input type=&quot;radio&quot; name=&quot;plec&quot; value=&quot;kobieta&quot;/&gt; Kobieta &lt;br/&gt;<br/>
                   &lt;input type=&quot;submit&quot; value=&quot;Wy&sacute;lij&quot; /&gt;&lt;br/&gt;<br/>
                &lt;/form&gt;<br/>
                &lt;/body&gt;<br/>
                &lt;/html&gt;<p></div>
                <br/>  
                <p> Jak można zauważyć, wszystko opiera się o elementy INPUT, które są róznego typu. W zależności od potrzeb może to być np. pole edycyjne, checkbox, radio button, pole z ukrytym hasłem (password) i wiele innych. INPUT posiada również nazwę, choć nie jest ona obowiązkowa. Przydaje się ona w celu odczytania danych z poszczególnych elementów INPUT</p>
                <br/><br/>
                <div class="bottom_buttons">
                <a href="../tabele/pytanie/index.php"><button class="btn-primary">Wstecz</button></a>
                <a href="pytanie/index.php"><button class="btn-primary">Dalej</button></a>
               </div>  
            </div>

            <div class="content_list" id="html_spis_tresci"></div>
        </div>
    </div>

</body>

</html>