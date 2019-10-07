<?php
    $to_email =$_POST["email"];
    $subject= "Tantalize2018";
    $body="Testing...";
    $headers="From:info@tantaize.lk";

    if(mail($to_email,$subject,$body,$headers)){
        echo("Successfully sent to $to_email");
    }else{
        echo("Failed");
    }
?>