<?php
    $to = 'scientisrpsm222@gmail.com';
    $firstname = $_POST["fname"];
    $email= $_POST["email"];
    $subj= $_POST["subj"];
    $text= $_POST["message"];
  
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>subject: '.$subj.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';
echo $message;
    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
        header("Location: http://magentacreate.php"); 
    }else{
        echo 'failed';
    }

?>
