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
if (!empty($_POST))
{
    if(!empty($_POST['Refresh'])){
        if($_POST['Refresh'] == 'Home'){
            $result = $db->fetchNamesOfAttendingUsers();
            $result = json_encode($result);
        }
        else{
            $result = "Value is: ".$_POST['Refresh'];
        }
    }else{
        $result = "Unexpected Post";
    }
    
}
$db = null;
echo $result;