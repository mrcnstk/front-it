<?php

session_start();

require_once "connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

if($connection->connect_errno!=0){
    echo "Error: ".$connection->connect_errno;
}
else
{
    $email = $_POST['email'];
    $password = $_POST['password'];

   $sql = "SELECT * FROM uzytkownicy WHERE email='$email'";

   if($result = @$connection->query($sql)){
       $how_many_users = $result->num_rows;
       if($how_many_users>0) {
        $line = $result->fetch_assoc();     //Utworzenie tablicy asocjacyjnej i pobranie danych
        if(password_verify($password, $line['password']))
            {

            $_SESSION['logged'] = true;
            $_SESSION['id'] = $line['id'];
            $_SESSION['imie'] = $line['imie'];
            $_SESSION['email'] = $line['email'];
            $_SESSION['html'] = $line['html'];
            $_SESSION['css'] = $line['css'];
            $_SESSION['js'] = $line['js'];
            
            //Zmienne przechowujace liczbe częsci danego kursu
            $_SESSION['nocHTML'] = 21;
            $_SESSION['nocCSS'] = 16;
            $_SESSION['nocJS'] = 11;
            
            unset($_SESSION['blad']); //Usuń z sesji informację o niepoprawnym logowaniu jeżeli zalogowano poprawnie
            $result->free_result();

            header('Location: ../kurs_poczatek/index.php');
            }
            else {
        
                $_SESSION['blad'] = "<span style='color:red'>Nieprawidłowy login lub hasło</span>";
                header('Location: index.php');
        
               }
       }
       else {
        
        $_SESSION['blad'] = "<span style='color:red'>Nieprawidłowy login lub hasło</span>";
        header('Location: index.php');

       }
   } 

   $connection->close();
}


?>