<?php
$server = 0;
if($server){
$origin = $_SERVER['HTTP_ORIGIN'];
$pattern = '@^http://(www\.)?faulinginlove\.co\.za.*$@i';
    if (preg_match($pattern,$origin, $matches)) {
        header('Access-Control-Allow-Origin: ' . $origin);
    }
}
require_once('./DatabaseConnect.php');
require_once('./email.php');
$mail = New Mailer;
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
                        $hAttending = false;
                        if(!empty($_FILES['photo'])){
                            //picture was included
                            $pic = SavePicture();
                            if($pic == 'invalid file extension'){
                                echo 'invalid file extension';                                
                            }
                            else if($pic == 'No file attached'){
                                echo 'No file attached';                                
                            }                    
                            else if($pic == FALSE){
                                echo 'Failed to upload file';                                
                            }                            
                            else{
                                echo 'File uploaded successfully';
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
                        
                        if(!empty($_POST['hurdeeAt'])){
                            $size = count($_POST['hurdeeAt']);
                            $hAtt = $_POST['hurdeeAt'];
                            for($i=0;$i < $size;$i++){
                                if($hAtt[$i] == 'hAtt'){
                                    $hAttending = true;
                                }
                            }
                        }
                            
                        $user = Array('FirstName'=>$_POST['firstName'],
                            'surname'=>$_POST['surname'],
                            'cell'=>$_POST['cell'],
                            'attending'=>$attending,
                            'mail'=>$_POST['mail'],
                            'comment'=>$_POST['comment'],
                            'kAcq'=>$kAcq,
                            'bAcq'=>$bAcq,
                            'family'=>$family,
                            'imageName'=>$image,
                            'hurdee'=>$hAttending);
                        $mail->sendMessage($_POST['firstName'], $_POST['mail'], "The following user ".$_POST['firstName']." tried to RSVP, check the database to ensure that they are in and see if they are attending", "RSVP");
                        if(isset($_POST['cAttending'])){
                            $user['child'] = $_POST['cAttending'];
                        }                        
                        if(!empty($_POST['pRSVP'])){
                            $size = count($_POST['pRSVP']);
                            $cacq = $_POST['pRSVP'];
                            if($size == 0)
                                echo 'no partner rsvp';
                            for($i=0;$i < $size;$i++){
                                if($cacq[$i] == 'pRSVP'){
                                    //User is signing up for additional partner too
                                    if(!empty($_POST['pfirstName']) && !empty($_POST['psurname']) && !empty($_POST['pCell']) && !empty($_POST['pMail'])){
                                        if($_POST['pfirstName'] != "" && $_POST['psurname'] != "" && $_POST['pCell'] != "" && $_POST['pMail'] != ""){
                                            $user['pFirstName'] = $_POST['pfirstName'];
                                            $user['psurname'] = $_POST['psurname'];
                                            $user['pCell'] = $_POST['pCell'];
                                            $user['pMail'] = $_POST['pMail'];
                                        }
                                        else{
                                            echo 'no partner rsvp';
                                        }
                                        
                                        //echo "pFirstName: ".$user['pFirstName']." "."psurname: ".$user['psurname']." "."pCell: ".$user['pCell']." "."pMail: ".$user['pMail']." ";
                                        
                                    }
                                    else{
                                        //echo 'RSVPing for partner but no details provided on form';
                                        //This is the case where the post does not contain partner rsvp details which it should always they may just be blank
                                    }
                                    
                                }
                                else{
                                    echo 'no partner rsvp';
                                }
                            }
                        }
                        else{
                            echo 'no partner rsvp';
                        }
                        
                        
                        $result = json_encode($db->WriteUserToDatabase($user));
                        
		}
		else
		{
			$result .= 'Unexpected Post';
		}
	}
        $db = null;
        echo $result;	
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
    $uploadOk = 1;
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

    // can upload same image using rand function
    $final_image = rand(1000,1000000).$img;
    // Check file size
    if ($_FILES["photo"]["size"] == 0) {
        return "No file attached";
        $uploadOk = 0;
    }
    // check's valid format
    if(in_array($ext, $valid_extensions)) 
    { 
            $path = $path.strtolower($final_image); 

            if(move_uploaded_file($tmp,$path)) 
            {
                return $path;
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