<!DOCTYPE html>
<?php
function ae_detect_ie()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== false))
        return true;
    else
        return false;
}

if (ae_detect_ie()) { 
    include_once './homePage.php';
}else{
    include_once './homePage.php';
}
?>
