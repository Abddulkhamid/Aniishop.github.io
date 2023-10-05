<?php

    $Name = $_POST['Name'];
    $Phone_number = $_POST['Phone_number'];
    $Email = $_POST['Email'];
    $Comments = $_POST['Comments'];



    $Name = htmlspecialchars($Name);
    $Phone_number = htmlspecialchars($Phone_number);
    $Email = htmlspecialchars($Email);
    $Comments = htmlspecialchars($Comments);


    $Name = urldecode($Name);
    $Phone_number = urldecode($Phone_number);
    $Email = urldecode($Email);
    $Comments = urldecode($Comments);


    $Name = trim($Name);
    $Phone_number = trim($Phone_number);
    $Email = trim($Email);
    $Comments = trim($Comments);



    if (mail("market_test999@mail.ru", 
             "Новое письмо  с сайта", 
             "Name: " .$Name."\n".
             "Phone_number " .$Phone_number."\n".
             "Email" .$Email."\n". 
             "Comments" .$Comments,
             "From: fipofo5125@fitwl.com \r\n")


    ) {
        echo ("Письмо отправлено");
    }
    else{
        echo ("Письмо не отправлено");
    }

    

?>