<?php

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
        
    }
    else{
        $result = 'Missing expected POST Values';
    }
}

echo $result;

?>