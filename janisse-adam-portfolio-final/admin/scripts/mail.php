<?php

    function redirect_to($location){
        if(isset !=null){
            header('Location: {$location}');
            exit;
        }
    }

    //echo "From mail file.";
    function submitMessage($direct,$name,$email,$message){
        //echo "From submiMessage()";
        $to = "cole@colegeerts.com";
        $subject = "Message from site";
        $extra = "Reply to: ".$email;
        $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
        mail($to,$subject,$msg,$extra);
        $direct = $direct."?name={$name}";
    }
?>