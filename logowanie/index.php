<?php
session_start();

if((isset($_SESSION['logged'])) && ($_SESSION['logged']==true)) {
    
    header('Location: ../kurs_poczatek/index.php');
    exit(); //Nie wykonuje pozostałej części kodu po przekierowaniu poprzez header
}

if(isset($_POST['r-email'])){

    
    $validation = true; //Udana walidacja?

    //Spradzenie poprawności imienia
    $name = $_POST['r-imie'];
    if((strlen($name)<3) || (strlen($name)>20)) {
        $validation = false;
        $_SESSION['e_name'] = "Imię musi mieć od 3 do 20 znaków";
    }

    //Sprawdzenie poprawności adresu email
    $email = $_POST['r-email'];
    $SafeEmail = filter_var($email, FILTER_SANITIZE_EMAIL); //filtrowanie niechcianych znaków np. polskie znaki, znaki specjalne

    if((filter_var($SafeEmail,FILTER_VALIDATE_EMAIL)==false) || ($SafeEmail!=$email)){ //kontrola poprawnosci maila oraz porownanie z wprowadzonym adresem e-mail
        $validation = false;
        $_SESSION['e_email'] = "Wprowadź poprawny adres e-mail";
    }

    //Sprawdzenie poprawnosci hasła
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if((strlen($password1)<8) || (strlen($password1)>20)) {
        $validation = false;
        $_SESSION['e_password'] = "Hasło musi mieć od 8 do 20 znaków";
    }
    if($password1 != $password2){
        $validation = false;
        $_SESSION['e_password'] = "Hasło w obu polach musi być takie same";
    }

    $pass_hash = password_hash($password1, PASSWORD_DEFAULT); //Hashowanie hasła i przypisanie zwróconej wartości do zmiennej

    //Sprawdzenie czy captcha została poprawnie rozwiązana
    $secretKey = "6LcMuYUUAAAAAHxirdJHzJzNheBz2vJNuQfShJ0r";
    //Sprawdzenie poprzez serwer google
    $check = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);

    $answer = json_decode($check);

    if($answer->success==false){
        $validation = false;
        $_SESSION['e_captcha']= "Rozwiąż poprawnie captcha";
    }

    require_once "connect.php";
    mysqli_report(MYSQLI_REPORT_STRICT); //Funkcja dzięki której widzimy na ekranie tylko wyjątki - ostrzeżenia zostają wyłączone

    try {
        $connection = new mysqli($host, $db_user, $db_password, $db_name);

        if($connection->connect_errno!=0){
            throw new Exception(mysqli_connect_errno()); //wyrzuca wyjątek dla sekcji catch
        }
        else {  //
            //Sprawdzenie czy email juz widnieje w bazie
            $result = $connection->query("SELECT id FROM uzytkownicy WHERE email='$email'");

            if(!$result) throw new Exception($connection->error);

            $how_many_emails = $result->num_rows;
            if($how_many_emails>0){
                $validation = false;
                $_SESSION['e_email']= "Taki adres email istnieje już w bazie!";
            }
            
            if($validation==true) {
                if($connection->query("INSERT INTO uzytkownicy VALUES (NULL,'$email','$pass_hash','$name',0,0,0)")){
                    $_SESSION['correctRegistration'] = true;
                }
                else {
                    throw new Exception($connection->error);
                }
            }
            
            $connection->close();
        }

    } 
    catch(Exception $e) {
        echo'<span class="error">Błąd serwera - przepraszamy za niedogodności</span>';
       // echo'<br/> Informacja deweloperska: '.$e; //  linia do celów weryfikacji błędów
    }

    
}   

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontIT - Kurs HTML CSS oraz JavaScript</title>
    <link rel="stylesheet" href="../style/logowanie.css">
    <link rel="stylesheet" href="../style/main_page_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../images/favicon_transparent.png">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <div class="container">
        <a href="../index.php"><img class="logo" src="../images/tylko_logo.png" alt="logoFrontIT"></a>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 login-left">
                        <h2>Logowanie</h2>
                        <p>Nie posiadasz konta? Wypełnij formularz obok!</p>
                        <div class="register-form">
                            <form action="login.php" method="POST">

                                <input type="email" name="email" class="form-control" placeholder="E-mail"><br />
                                <input type="password" name="password" class="form-control" placeholder="Hasło"><br />
                                <button type="submit" class="btn btn-primary">Zaloguj się</button>

                            </form>
                            <?php 
                            if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
                                ?>
                        </div>
                    </div>
                    <div class="col-md-5 register-right">
                        <h2>Rejestracja</h2>
                        <p>Utwórz konto aby otrzymać dostęp do kursów</p>
                        <div class="register-form">
                            <form action="" method="POST">
                                <input type="text" name="r-imie" class="form-control" placeholder="Imię">
                                <?php
                                    if(isset($_SESSION['e_name'])) {
                                        echo '<div class="error">'.$_SESSION['e_name'].'</div>';
                                        unset($_SESSION['e_name']);
                                    }
                                ?>
                                <br /><input type="email" name="r-email" class="form-control" placeholder="E-mail">
                                <?php
                                    if(isset($_SESSION['e_email'])) {
                                        echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                                        unset($_SESSION['e_email']);
                                    }
                                ?>
                                <br /><input type="password" name="password1" class="form-control" placeholder="Hasło">
                                <?php
                                    if(isset($_SESSION['e_password'])) {
                                        echo '<div class="error">'.$_SESSION['e_password'].'</div>';
                                        unset($_SESSION['e_password']);
                                    }
                                ?>
                                <br /><input type="password" name="password2" class="form-control" placeholder="Powtórz hasło">
                                <br /><div class="g-recaptcha" data-sitekey="6LcMuYUUAAAAAIuH9xQXGiYxvcHhgAC6agsbTfJx"></div>
                                <?php
                                    if(isset($_SESSION['e_captcha'])) {
                                        echo '<div class="error">'.$_SESSION['e_captcha'].'</div>';
                                        unset($_SESSION['e_captcha']);
                                    }
                                ?>
                                <button type="submit" class="btn btn-primary">Zarejestruj się</button>
                                <?php
                                    if(isset($_SESSION['correctRegistration'])){
                                        echo '<div style="color:green">Rejestracja przebiegła pomyślnie</div>';
                                        unset($_SESSION['correctRegistration']);
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="contact" style="position:absolute;margin-top: 50px; ">
        <br />
        <p>Kontakt</p>
        <div id="contact_info">
            <ul>
                <li>Marcin Sitko</li>
                <li><b>e-mail:</b> marcsit080@student.polsl.pl</li>
            </ul>
            <a href="../index.php"><img src="../images/Logo FrontIT.PNG" alt="frontit_logo"></a>
        </div>
        <div id="contact_adnotation">
            <p><b>FrontIT 2018</b> - strona stworzona na potrzeby pracy inżynierskiej</p>
        </div>
    </div>
</body>

</html>