<?php
$origin = $_SERVER['HTTP_ORIGIN'];
$pattern = '@^http://(www\.)?faulinginlove\.co\.za.*$@i';
if (preg_match($pattern,$origin, $matches)) {
    header('Access-Control-Allow-Origin: ' . $origin);
}
        function uploadFile($file){
            $img = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];

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
                            echo "<img src='$path' />";
                            $name = $_POST['name'];
                            $email = $_POST['email'];

                            //include database configuration file
                            //include_once 'db.php';

                            //insert form data in the database
                            //$insert = $db->query("INSERT uploading (name,email,file_name) VALUES ('".$name."','".$email."','".$path."')");

                            //echo $insert?'ok':'err';
                    }
            } 
            else 
            {
                    $return .= ' invalid file extension';
            }
        }
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
	$path = '../uploads/'; // upload directory
        $return = '';
	if (!empty($_POST))
	{
            $return .= 'Post is not empty';
		if(!empty($_POST['firstName']) || !empty($_POST['attending']) || !empty($_POST['surname']) || !empty($_POST['cell']) || !empty($_POST['mail']) || !empty($_POST['comment']) || !empty($_POST['p_acq']) || !empty($_POST['gr']) || !empty($_POST['password']))
		{
                        $name = $_POST['firstName'];
                        $surname = $_POST['surname'];
                        $attending = $_POST['attending'];
                        $cell = $_POST['cell'];
                        $mail = $_POST['mail'];
                        $comment = $_POST['comment'];
                        $pAcq = $_POST['p_acq'];
                        $kAcq = FALSE;
                        $bAcq = FALSE;
                        
                        if (isset($pAcq[0]) == "kAcq"){
                            $kAcq = TRUE;
                        }
                        if(isset($pAcq[1]) == "bAcq"){
                            $bAcq = TRUE;
                        }                     
                        $group = isset($_POST['gr']);
			$return = 'expected post'.'</br> the size of the post is'. sizeof($_POST);
                        if($_FILES['photo']){
                            //Exists an image to upload
                            $return .= $_FILES['photo']['name'];
                            $return .= 'Image was included';
                        }
                        else{
                            //No image
                            
                            $return .= 'image was not included '.'name: '.$name.' '.'surname: '.$surname.' '.'attending: '.$attending.' '.'cell: '.$cell.' '.'email: '.$mail.' '.'comment: '.$comment.' '.'kajal acq: '.$kAcq.' '.'brandon acq: '.$bAcq.' '.'group: '.$group;
                        }
		}
                else{
                    $return .= 'Missing required arguments';
                }
	}
	else 
	{
		$return .= 'The Post is empty';
	}
        echo $return;
?>