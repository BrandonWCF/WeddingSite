<?php
require_once('./DatabaseConnect.php');
$db = New DatabaseHandler;
$db->Connect();
$result = null;

if($db->connection != null)
{
	$result .= 'Database connection has been made';
	if (!empty($_POST))
	{
		if(!empty($_POST['firstName']) || !empty($_POST['surname']) || !empty($_POST['cell']) || !empty($_POST['mail']) || !empty($_POST['comment']) || !empty($_POST['kAcq']) || !empty($_POST['bAcq']) || !empty($_POST['group']))
		{
			$result .= 'Expected Post';
		}
		else
		{
			$result .= 'Unexpected Post';
		}
	}
	$db = null;
}
else
{
	echo 'Database connection does not exist';
}
?>