<?php

session_start();

require_once "connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

if($connection->connect_errno!=0){
    echo "Error: ".$connection->connect_errno;
}
else
{
    $html = $_SESSION['html'];
    $css = $_SESSION['css'];
    $js = $_SESSION['js'];

    $id = $_SESSION['id'];

   $sql = "UPDATE uzytkownicy SET html='$html', css='$css', js='$js' WHERE id='$id'";

   if(@$connection->query($sql)){
       
        header('Location: ../index.php');
       }
       else {
        
        $_SESSION['blad'] = "<span style='color:red'>Nieprawidłowy login lub hasło</span>";
        header('Location: index.php');

       } 
       $connection->close();
} 

session_unset();
$_SESSION['logged'] = false;
//header('Location: index.php');

?>