<?php 
    if(!empty($_POST['send'])){
        $name = $_POST['name'];
        $what = $_POST['what'];
        $email = $_POST['email'];
        $message = $_POST['message'];

    $to = 'olisehemeke37@gmail.com';
    $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
    mail($to, $what, $message, $mailHeaders);

    
    }
?>