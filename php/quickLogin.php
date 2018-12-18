<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$username = "brandon";
$password = "bran-5496";
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