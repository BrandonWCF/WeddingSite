<?php
$server = 1;
if($server){
$origin = $_SERVER['HTTP_ORIGIN'];
$pattern = '@^http://(www\.)?faulinginlove\.co\.za.*$@i';
    if (preg_match($pattern,$origin, $matches)) {
        header('Access-Control-Allow-Origin: ' . $origin);
    }
}
//Useful for printing out array values to the UI so that you can see there layout... Used it on the select statements of fetchNamesOfAttendingUsers()
//print_r($users);
Class DatabaseHandler
{

private $servername = 'localhost';
public $connection = null;
private $username = '';
private $password = '';
private $database = '';
private $server = 0;
//private $username = 'brandon';
//private $password = 'P@ssword';
//private $database = 'wedding_database';


	function Connect()
	{
            try 
            {
                    if($this->server){
                        $this->username = 'faulingi_brandon';
                        $this->password = 'bran-5496_436518';
                        $this->database = 'faulingi_wedding_database';
                    }else{
                        $this->username = 'brandon';
                        $this->password = 'P@ssword';
                        $this->database = 'wedding_database';
                    }
                    $this->connection = new PDO("mysql:host=".$this->servername.";dbname=".$this->database, $this->username, $this->password);
                    // set the PDO error mode to exception
                    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //echo "Connection Successful"; 
            }
            catch(PDOException $e)
            {
                    //echo "Connection failed: " . $e->getMessage();
            }
	}
	function writePlusOneToDatabase($user,$rowId){
            //echo "pFirstName: ".$user['pFirstName']." "."psurname: ".$user['psurname']." "."pCell: ".$user['pCell']." "."pMail: ".$user['pMail']." ";
            $stmt = $this->connection->prepare("INSERT INTO plusones (plusones_first_name,user_id, plusones_surname, plusones_cell, plusones_mail)
            VALUES (:pfirstname,:uid, :plastname, :pcell, :pmail)");
            $stmt->bindParam(':pfirstname', $fName);
            $stmt->bindParam(':plastname', $lName);
            $stmt->bindParam(':uid', $row);
            $stmt->bindParam(':pcell', $cell);
            $stmt->bindParam(':pmail', $email);
            //Array('FirstName'=>$_POST['firstName'],'surname'=>$_POST['surname'],'cell'=>$_POST['cell'],'mail'=>$_POST['mail'],'comment'=>$_POST['comment'],'kAcq'=>$_POST['kAcq'],'bAcq'=>$_POST['bAcq'])
            // set parameters and execute
            $fName = $user['pFirstName'];
            $lName = $user['psurname'];
            $cell = $user['pCell'];
            $email = $user['pMail'];
            $row = $rowId;
            try{
                $stmt->execute();
                return true;
            }
            catch (Exception $e){               
                return $e;
            }
        }
	function WriteUserToDatabase($user)
	{
            $date = date('Y-m-d');

            //$stmt = $this->connection->prepare("INSERT INTO users (first_name, surname, cell, attending, mail, join_date, bran_acq, kaj_acq)
            //VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            //$stmt->bind_param("ssibsdbb", $firstname, $lastname, $cell, $attending, $email, $joinDate,$bKnows,$kKnows);
            $stmt = $this->connection->prepare("INSERT INTO users (first_name, surname, cell, attending, mail, join_date, bran_acq, kaj_acq, family, image_name, number_children,hurdee)
            VALUES (:firstname, :lastname, :cell, :attend, :mail, :jDate, :bKn, :kKn, :family, :imgName, :attendingChildren, :hurdee)");
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':cell', $cell);
            $stmt->bindParam(':attend', $attending);
            $stmt->bindParam(':mail', $email);
            $stmt->bindParam(':jDate', $joinDate);
            $stmt->bindParam(':bKn', $bKnows);
            $stmt->bindParam(':kKn', $kKnows);
            $stmt->bindParam(':family', $family);
            $stmt->bindParam(':imgName', $img);
            $stmt->bindParam(':attendingChildren', $children);
            $stmt->bindParam(':hurdee', $hurd);
            //Array('FirstName'=>$_POST['firstName'],'surname'=>$_POST['surname'],'cell'=>$_POST['cell'],'mail'=>$_POST['mail'],'comment'=>$_POST['comment'],'kAcq'=>$_POST['kAcq'],'bAcq'=>$_POST['bAcq'])
            // set parameters and execute
            //echo "First Name: ".$user['FirstName']."surname: ".$user['surname'];
            $firstname = $user['FirstName'];
            $lastname = $user['surname'];
            $cell = $user['cell'];
            $attending = $user['attending'];
            $email = $user['mail'];
            $joinDate = $date;
            $bKnows = $user['bAcq'];
            $kKnows = $user['kAcq'];
            $family = $user['family'];
            $img = $user['imageName'];
            $children = $user['child'];
            $hurd = $user['hurdee'];
            
            try{
                $stmt->execute();
                $userID = $this->connection->lastInsertId();
                $test = $this->writeComment($userID,$user['comment']);
                //echo "The following is the count ".count($user);
                if(count($user) > 12)
                {
                    $test = $this->writePlusOneToDatabase($user,$userID);
                }
                return $test;
            }
            catch (Exception $e){                    
                return $e;
            }
            //$conn->close();
	}
        function writeComment($userID,$comment){
            $stmt1 = $this->connection->prepare("INSERT INTO comments (user_id, comment_made, comment_date)
            VALUES (:userId, :comment, :date)");
            $stmt1->bindParam(':userId', $id);
            $stmt1->bindParam(':comment', $words);
            $stmt1->bindParam(':date', $d);
            $id = $userID;
            $words = $comment;
            $d = date('Y-m-d');
            try{
                $stmt1->execute();
                return true;
            }
            catch (Exception $e){                    
                return $e;
            }
        }
        
        function fetchNamesOfAttendingUsers(){
            try{
                $stmt = $this->connection->prepare("SELECT family,number_children,plusones_id FROM users LEFT JOIN plusones ON users.user_id = plusones.user_id where attending = 1"); 
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $p = 0;
                $users = $stmt->fetchAll();
                
                if(count($users) > 0)
                    return $users;
                else
                    return false;
            }
            catch(PDOException $e) {
                return "Error: " . $e->getMessage();
            }
        }
        
        function fetchDatabaseTableValues(){
            try{
                $stmt = $this->connection->prepare("SELECT * FROM users LEFT JOIN plusones ON users.user_id = plusones.user_id LEFT JOIN comments ON users.user_id = comments.user_id where attending = 1"); 
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $p = 0;
                $users = $stmt->fetchAll();
                //print_r($users);
                if(count($users) > 0)
                    return $users;
                else
                    return false;
            }
            catch(PDOException $e) {
                return "Error: " . $e->getMessage();
            }
        }
        
        function deleteUserFromDB($userId){
            // sql to delete a record
            try{
                $sqlComment = "DELETE FROM comments WHERE user_id=".$userId;
                $sqlPlusOne = "DELETE FROM plusones WHERE user_id=".$userId;
                $sqlUser = "DELETE FROM users WHERE user_id=".$userId;
                // use exec() because no results are returned
                $this->connection->exec($sqlComment);
                $this->connection->exec($sqlPlusOne);
                $this->connection->exec($sqlUser);
                return "Record deleted successfully";
            }
            catch(PDOException $e)
            {
                return $sql . "<br>" . $e->getMessage();
            }
        }
}
?>

















































