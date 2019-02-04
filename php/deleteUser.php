<?php
$server = 1;
if($server){
$origin = $_SERVER['HTTP_ORIGIN'];
$pattern = '@^http://(www\.)?faulinginlove\.co\.za.*$@i';
    if (preg_match($pattern,$origin, $matches)) {
        header('Access-Control-Allow-Origin: ' . $origin);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('./DatabaseConnect.php');
$db = New DatabaseHandler;
$db->Connect();
$result = "invalid";
$username = "brandon";
$password = "bran-%4(6_$3^5!8";
if (!empty($_POST))
{
    if(!empty($_POST['Delete'])){        
        if($_POST['Username'] == $username && $_POST['Password'] == $password)
            $result = $db->deleteUserFromDB($_POST['Delete']);
        else
            $result = "INNER FAIL"." ".$_POST['Username']." ".$_POST['Password'];
       
    }else{
        $result = "FAIL"." ".$_POST['Username']." ".$_POST['Password'];
    }
    
}
//print_r($result);
$result = json_encode($result);
echo $result;