<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontIT - Kurs HTML CSS oraz JavaScript</title>
    <link rel="stylesheet" href="style/strona_glowna.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/favicon_transparent.png">
    <script src="script/jquery_3_3_1.js"></script>
    <script src="script/main_page_script.js"></script>
</head>

<body>
    <div id="main">

        <nav>
            <a href="index.php"><img src="images/Logo FrontIT.PNG" alt="xxx" /></a>
            <label for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle" />
            <div class="menu">
                <a href="#frontit">Czym jest FrontIT</a>
                <a href="html/czym_jest_html/index.php">Kursy</a>
                <a href="#contact">Kontakt</a>
                <a href="logowanie/index.php"><span>Zaloguj się</span></a>
            </div>
        </nav>
        <div class="middle_screen">
            <img src="images/screen_with_code.png" alt="monitor">
            <div>
                <p>Witaj na stronie poświęconej nauce języka HTML, CSS oraz JavaScript</p>
                <ul>
                    <li>Poznaj podstawy tworzenia stron www</li>
                    <li>Naucz się upiększać stronę za pomocą styli CSS</li>
                    <li>Stwórz dynamiczne elementy strony za pomocą Javascript</li>
                </ul>
            </div>
        </div>
        <div class="middle_screen_floor"></div>
        <span id="frontit"></span>
        <div class="main_info_frontit">
            <p>Czym jest <span>FrontIT</span></p>
            <hr />
            <p class="main_info_text"><i>FrontIT</i> to strona internetowa przeznaczona dla osób rozpoczynającyh swoją
                przygodę z programowaniem stron internetowych.
                Zawiera w sobie podstawowe informacje na temat języka HTML, CSS oraz JavaScript, które pozwolą na
                tworzenie responsywnych i nowoczesnych stron www.
                Platforma ta została stworzona również w oparciu o wyżej wymienione technologie, dzięki temu można
                dostrzec jak duży potencjał drzemie w podanych metodach tworzenia stron.
                Kursy zawarte na stronie pozwolą wdrożyć się w tworzenie stron internetowych także osobom, które
                dopiero zaczynają swoją przygodę z progamowaniem.
                W przyszłości strona będzie rozwijana oraz dostosowywana do najnowszych trendów panujących na rynku
                technologii webowych.
            </p>
        </div>
        <hr />
        <div class="main_courses">
            <div class="main_courses_html main_courses_style">
                <p>Kurs HTML</p><br />
                <img src="images/html icon.png" alt="html icon"><br /><br />
                <p>HTML (HyperText Markup Language) jest językiem opisowym, w którym za pomocą specjalnych znaczników
                    (zwanych również tagami) określa się zawartość danej strony. Począwszy od prostych paragrafów,
                    nagłówków czy list, a na hiperłączach, obrazkach oraz polach edycyjnych kończąc. Kurs pozwoli ci
                    poznać podstawowe zagadnienia związane z tym językiem oraz pozwoli wypracować dobre praktyki
                    budowania stron internetowych</p><br />
                <a href="html/czym_jest_html/index.php"><button class="main_courses_button">Przejdź do kursu</button></a>
            </div>
            <div class="main_courses_css main_courses_style">
                <p>Kurs CSS</p><br />
                <img src="images/css icon.png" alt="html icon"><br /><br />
                <p>CSS czyli kaskadowe arkusze stylów są odpowiedzialne za stronę wizualną poszczególnych elementów na
                    stronie. Pozwalają na szczegółowe dostosowanie każdego z elementów witryny poprzez odwołanie się do
                    znaczników, identyfikatorów lub klas i określenie wyglądu w oddzielnym pliku lub sekcji. Dzięki
                    kursowi dowiesz się jak w prosty sposób upiększyć swoją stronę </p><br /><br /><br />
               <a href="css/spis_tresci/index.php"><button class="main_courses_button">Przejdź do kursu</button></a>
            </div>
            <div class="main_courses_js main_courses_style">
                <p>Kurs JavaScript</p><br />
                <img src="images/js icon.png" alt="html icon"><br /><br />
                <p>JavaScript to język programowania, który pozwala wprowadzić na stronie internetowej skomplikowane
                    elementy, dzięki którym strona może wyświetlać nie tylko statyczne informacje, lecz również m.in.
                    wyświetlać animacje 2D/3D czy reagować na zdarzenia. Kurs ten wprowadzi cię w podstawowe
                    zagadnienia języka JavaScript, co pozwoli ci na tworzenie dynamicznych i interaktywnych stron
                    internetowych </p><br /><br />
            <a href="javascript/spis_tresci/index.php"><button class="main_courses_button">Przejdź do kursu</button><a/>
            </div>
        </div>
        <span id="contact"></span>
        <div class="contact">
            <p style="font-size: 16px;font-weight: bold;">Kontakt</p>
            <div class="contact_info">
                <div>
                    <p>Marcin Sitko</p>
                    <p><b>e-mail:</b> marcsit080@student.polsl.pl</p>
                </div>
                <div><a href="index.php"><img src="images/Logo FrontIT.PNG" alt="frontit_logo"></a></div>
            </div>
            <p class="adnotation"><b>FrontIT 2018</b> - strona stworzona na potrzeby pracy inżynierskiej</p>
        </div>
    </div>
</body>

</html>