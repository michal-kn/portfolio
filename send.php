<?php
session_start();
if(isset($_POST['email'])){
    
    $email = "Wiadomość od: ".$_POST['email'];
    $tresc = $_POST['tresc'];
    $do = "michalkna01@gmail.com";
    
    if($_POST['temat']!=""){
        $temat = "Temat: ".$_POST['temat'];
    }else{
        $temat="Nie podano tematu";
    }
    
    if(mail($do,$temat,$tresc,$email)) {
     $_SESSION['error']="Wiadomość została wysłana";
    }else{
      $_SESSION['error']="Wystąpił błąd";
    }
}
header("Location: contact.php");
die();
?>