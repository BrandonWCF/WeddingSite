<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$result = "invalid";
if (!empty($_POST))
{
    if(!empty($_POST['Refresh'])){
        if($_POST['Refresh'] == 'Home'){
            $result = "Expected Post";
        }
        else{
            $result = "Value is: ".$_POST['Refresh'];
        }
    }else{
        $result = "Unexpected Post";
    }
    
}

echo $result;