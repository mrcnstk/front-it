<?php
session_start(); 

if(((isset($_SESSION['logged'])) && ($_SESSION['logged']==false)) || (!isset($_SESSION['logged']))) {
    
    header('Location: ../../../logowanie/index.php');
    exit(); //Nie wykonuje pozostałej części kodu po przekierowaniu poprzez header
}

if($_SESSION['css'] < 3){
    $_SESSION['css'] = $_SESSION['css'] +1;
    }
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontIT - Kurs HTML CSS oraz JavaScript</title>
    <link rel="stylesheet" href="../../../style/kurs.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../../../images/favicon_transparent.png">
    <script src="../../../script/jquery_3_3_1.js"></script>
    <script src="../../../script/course_menu.js"></script>
    <script>var CSSprogress = '<?php echo $_SESSION["css"]; ?>';</script>
    <script src="../../../script/spis_tresci.js"></script>
    <script>
            $(document).ready(function() {  //jeżeli strona jest wczytana wykonaj kod

                var flag = true; 

                    //po kliknięciu na odpowiedź pobiera informację, który radio button jest zaznaczony
                    //oraz pobiera przyciski powrotu i przejścia dalej
                    //jeżeli odpowiedź jest prawidłowa - zostaje wyświetlony odpowiedni komunikat i przycisk Dalej
                    //jeżeli odpowiedź jest błędna - zostaje wyświetlony odpowiedni komunikat i przycisk wstecz
                    //Flaga zapobiega wielokrotnemu odpowiadaniu
                    $('#answer').click(function(){

                        var radioValue = $('.course').find('input[name="question"]:checked').val();
                        var goButton = $('.bottom_buttons').find('button[name="go"]');
                        var backButton = $('.bottom_buttons').find('button[name="back"]');                        
                        
                        if(radioValue == 3){
                            if(flag == true){
                                goButton.removeClass('hidden');
                                $('.course').append("<p class='good_answer'>Dobrze! Możesz przejść dalej</p>"); 
                                flag = false;         
                            }
                        }
                        else {
                            if(flag == true){
                            backButton.removeClass('hidden');
                            $('.course').append("<p class='bad_answer'>Zła odpowiedź - przeczytaj lekcję jeszcze raz</p>");
                            flag = false;
                            }
                        }
                    });
            });
        </script>
</head>

<body>
    <div id="main">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle" />
        <div class="top_bar">
            <a href="../../../index.php"><img src="../../../images/tylko_logo.png" alt="logoFrontIT"></a>
            <div class="profile">
               <img src="../../../images/acc_image.png" alt="account image">
               <div class="php_user">
               <?php
                    echo"<p>Witaj ".$_SESSION['imie']."!";
                    echo" ( <i>".$_SESSION['email']."</i> )<a href='../../../logowanie/logout.php'>&nbsp;-&nbsp;<span style='color:red;'>Wyloguj się</span></a><br/>";
                    echo"<br/> Twój postęp w nauce: <br/><br/>";
                    echo"<span style='color:#41BB45;'>HTML: </span> ".(floor(($_SESSION['html'] *100) / $_SESSION['nocHTML']))."%   |  ";
                    echo"<span style='color:#11B3F0;'>CSS: </span>".(floor(($_SESSION['css'] *100) / $_SESSION['nocCSS']))."%    |  ";
                    echo"<span style='color:#F37321;'>JavaScript: </span>".(floor(($_SESSION['js'] *100) / $_SESSION['nocJS']))."%"; 
                ?>
                </div>
            </div>
        </div>
        <nav class="nav_bar">
            <a class="home" href="../../../index.php"><img id="home_image" src="../../../images/home png.png" alt="homepng"></a>
            <a class="black" href="../../../kurs_poczatek/index.php">Jak zacząć</a>
            <a class="green" href="../../../html/spis_tresci/index.php">HTML</a>
            <a class="green" href="../../../html5/spis_tresci/index.php">HTML5</a>
            <a class="blue" href="../../../style_wprowadzenie/index.php">Style</a>
            <a class="blue" href="../../spis_tresci/index.php">CSS</a>
            <a class="blue" href="../../../css3/spis_tresci/index.php">CSS3</a>
            <a class="orange" href="../../../javascript/spis_tresci/index.php">JavaScript</a>
            <a class="orange" href="../../../co_dalej/index.php">Co dalej?</a>
        </nav>
        <div class="mainbox">
            <div class="course">
                <h2>Styl zewnętrzny  - pytanie</h2>
                <hr>
                <h3> Co podajemy na stronie, na której chcemy użyć zewnętrznych stylów?</h3>  
                <br/>
                <form>
                    <input type="radio" name="question" value="1">Rozszerzenie pliku<br/>
                    <input type="radio" name="question" value="2">Tagi elementów, które mają być stylowane<br/>
                   <input type="radio" name="question" value="3">Link do pliku ze stylami<br/>
                   <!--  <input type="radio" name="question" value="4">Pierwszą linię po otwierającym znaczniku P<br/> -->
                </form>
                <br/><br/><br/>    
                <div class="bottom_buttons">
                <a href="../index.php"><button name="back"class="btn-primary hidden">Wstecz</button></a>
                <button id="answer" class="btn-primary">Sprawdź</button>
                <a href="../../selektory/index.php"><button name="go" class="btn-primary hidden">Dalej</button></a>
               </div>  
            </div>
            <div class="content_list" id="css_pytanie_spis_tresci"></div>
        </div>
    </div>

</body>

</html>