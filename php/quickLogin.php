<?php
$server = 0;
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

$username = "brandon";
$password = "bran-%4(6_$3^5!8";
require_once('./DatabaseConnect.php');
$db = New DatabaseHandler;
$db->Connect();
$result = "invalid";
if (!empty($_POST))
{
    if(!empty($_POST['Login'])){
        if($_POST['Login'] == 'Login' && $_POST['loginU'] == $username && $_POST['loginP'] == $password){
            $result = $db->fetchDatabaseTableValues();
            
        }
        else{
            $result = "FAIL";
        }
    }else{
        $result = "FAIL";
    }
    
}
//print_r($result);
$result = json_encode($result);
$db = null;
echo $result;