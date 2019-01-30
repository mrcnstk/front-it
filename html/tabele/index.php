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
                <h2>Tabele</h2>
                <hr>
                <p> Tabele są definiowane przez tag TABLE. Jak wszyscy wiemy każda tabela posiada wiersze i kolumny. Aby zdefiniować wiersz korzystamy z tagu TR. Zdefiniowany wiersz możemy podzielić na kolumny za pomocą tagu TD. Poniżej znajduje się przykład tabeli z dwoma wierszami i trzema kolumnami:</p>
                <br/>
                <table style="margin-left:150px;" align="center" border="2">
                <tr>
                    <td> Hello </td>
                    <td> World </td>
                    <td> ??? </td>
                </tr>
                <tr>
                    <td> Hello </td>
                    <td> World </td>
                    <td> ! </td>
                </tr>
                </table>
                <br/>
                <br/>
                <p>Kod tabeli wygląda tak:</p> 
                <div class="code_box"><br/><p>&lt;html&gt;<br/>
                &lt;head&gt;<br/>
                &lt;title&gt; Tabela &lt;/title&gt;<br/>
                &lt;/head&gt;<br/><br/>
                &lt;body&gt;<br/>
                &lt;table border="2"&gt;<br/>
                &lt;tr&gt;<br/>
                    &lt;td&gt; Hello &lt;/td&gt;<br/>
                    &lt;td&gt; World &lt;/td&gt;<br/>
                    &lt;td&gt; ??? &lt;/td&gt;<br/>
                &lt;/tr&gt;<br/>
                &lt;tr&gt;<br/>
                    &lt;td&gt; Hello &lt;/td&gt;<br/>
                    &lt;td&gt; World &lt;/td&gt;<br/>
                    &lt;td&gt; ! &lt;/td&gt;<br/>
                &lt;/tr&gt;<br/>
                &lt;/table&gt;<br/>
                &lt;/body&gt;<br/>
                &lt;/html&gt;<p></div>
                <br/><br/>
                <p>Jak widać na powyższym przykładzie, wartości pomiędzy tagami TD to wartości występujące w tabeli. Na uwagę zasługuje również fakt, że został użyty atrybut BORDER, który definiuje nam grubość ramek. Jeśli nie dodalibyśmy tego atrybutu, to obramowania tabeli nie byłyby widoczne.</p>
                <br/>
                <p> Wartym uwagi atrybutami w przypadku tabeli są także COLSPAN i ROWSPAN, które pozwalają na scalanie komórek ze sobą. Poniższy przykład zobrazuje działanie tych atrybutów:</p>
                <br/>
                <table style="margin-left:150px; vertical-align:middle; text-align:center;" align="center" border="1">
                <tr>
                    <td> Hello </td>
                    <td colspan="2"> Colspan! </td>
                </tr>
                <tr>
                    <td> Hello </td>
                    <td> World </td>
                    <td rowspan="2"> Rowspan! Yea! </td>
                </tr>
                <tr>
                    <td> Hello </td>
                    <td> World </td>
                </tr>
                </table>
                <br/>  
                <p> Kod powyższej tabeli:</p>  
                <div class="code_box"><br/><p>&lt;html&gt;<br/>
                &lt;head&gt;<br/>
                &lt;title&gt; Lista nienumerowana &lt;/title&gt;<br/>
                &lt;/head&gt;<br/><br/>
                &lt;body&gt;<br/>
                &lt;table&gt;<br/>
                &lt;tr&gt;<br/>
                    &lt;td&gt; Hello &lt;/td&gt;<br/>
                    &lt;td colspan=&quot;2&quot;&gt; Colspan! &lt;/td&gt;<br/>
                &lt;/tr&gt;<br/>
                &lt;tr&gt;<br/>
                    &lt;td&gt; Hello &lt;/td&gt;<br/>
                    &lt;td&gt; World &lt;/td&gt;<br/>
                    &lt;td rowspan=&quot;2&quot;&gt; Rowspan! Yea! &lt;/td&gt;<br/>
                &lt;/tr&gt;<br/>
                &lt;tr&gt;<br/>
                    &lt;td&gt; Hello &lt;/td&gt;<br/>
                    &lt;td&gt; World &lt;/td&gt;<br/>
                &lt;/tr&gt;<br/>
                &lt;/table&gt;<br/>
                &lt;/body&gt;<br/>
                &lt;/html&gt;<p></div>
                <br/>  
                <p> Poza powyższymi przykładami możemy również używać innych atrybutów, jak np. bgcolor, width, height itp.</p>
                <br/><br/>
                <div class="bottom_buttons">
                <a href="../listy/pytanie/index.php"><button class="btn-primary">Wstecz</button></a>
                <a href="pytanie/index.php"><button class="btn-primary">Dalej</button></a>
               </div>  
            </div>

            <div class="content_list" id="html_spis_tresci"></div>
        </div>
    </div>

</body>

</html>