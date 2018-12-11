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
		if(!empty($_POST['firstName']) || !empty($_POST['surname']) || !empty($_POST['cell']) || !empty($_POST['mail']) || !empty($_POST['comment']))
		{
                        
			$result .= 'Expected Post';
                        $kAcq = False;
                        $bAcq = False;
                        $family = False;
                        $attending = False;
                        $image = 'none';
                        if(!empty($_FILES['photo'])){
                            //picture was included
                            $pic = SavePicture();
                            if($pic == 'invalid file extension'){
                                echo 'invalid file extension';
                                return 0;
                            }
                            else if($pic == FALSE){
                                echo 'Failed to upload file';
                            }                            
                            else{
                                $image = $pic;
                            }
                        }
                        
                        if(isset($_POST['attending'])){
                            if($_POST['attending'] == '1'){
                                $attending = True;
                            }
                            else if($_POST['attending'] == '2'){                                
                                $attending = False;
                            }
                        }
                        if(isset($_POST['family'])){
                            if($_POST['family'] == '1'){
                                $family = True;
                            }
                            else if($_POST['family'] == '2'){                                
                                $family = False;
                            }
                        }
                        if(!empty($_POST['p_acq'])){
                            $size = count($_POST['p_acq']);
                            $acq = $_POST['p_acq'];
                            for($i=0;$i < $size;$i++){
                                if($acq[$i] == 'bAcq'){
                                    $bAcq = True;
                                }
                                else if($acq[$i] == 'kAcq'){
                                    $kAcq = True;
                                }
                            }
                        }
                        $user = Array('FirstName'=>$_POST['firstName'],'surname'=>$_POST['surname'],'cell'=>$_POST['cell'],'attending'=>$attending,'mail'=>$_POST['mail'],'comment'=>$_POST['comment'],'kAcq'=>$kAcq,'bAcq'=>$bAcq, 'family'=>$family, 'imageName'=>$image);
                        $result = $db->WriteUserToDatabase($user);
                        
		}
		else
		{
			$result .= 'Unexpected Post';
		}
	}
        echo $result;
	$db = null;
}
else
{
	echo 'Database connection does not exist';
}

function SavePicture(){
    $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
    $path = '../uploads/';
    $img = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];

    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    // can upload same image using rand function
    $final_image = rand(1000,1000000).$img;

    // check's valid format
    if(in_array($ext, $valid_extensions)) 
    { 
            $path = $path.strtolower($final_image); 

            if(move_uploaded_file($tmp,$path)) 
            {
                return $final_image;
            }
            else
            {
                return false;
            }
    } 
    else 
    {
            return 'invalid file extension';
    }

                         
}
?>