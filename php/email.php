<?php
set_include_path("c:/xampp/php/pear/");
require_once "Mail.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$result = "EMPTY";
if (!empty($_POST))
{
    if(!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Message'])){
        $result = 'Expected POST Values '.$_POST['Email'].' name'.$_POST['Name'].' message:'.$_POST['Message'];
        //Mail message:
        require_once "Mail.php";
        $from = "faulinginlove Website <site@faulinginlove.co.za>";
        $to = "bwcfaul@gmail";
        $email_subject = 'Hi! faulinginlove.co.za contact page by '.$_POST['Name'];
        $email_body = 'Reply to: '."\r\n".$_POST['Email']."\r\n".'The following is the message:'."\r\n".$_POST['Message'];
        $host = "ssl://cp17.domains.co.za";
        $username = "site@faulinginlove.co.za";
        $password = "bran-5496";
        $port = "465";
        error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
        $email_from =  "Site <site@faulinginlove.co.za>";
        $email_address = "site@faulinginlove.co.za";

        $headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
        $smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
        $mail = $smtp->send($to, $headers, $email_body);


        if (PEAR::isError($mail)) {
        echo("<p>" . $mail->getMessage() . "</p>");
        } else {
        echo("<p>Message successfully sent!</p>");
}
    }
    else{
        $result = 'Missing expected POST Values';
    }
}

echo $result;

?>