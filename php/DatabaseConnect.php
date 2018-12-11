<?php
Class DatabaseHandler
{
private $servername = 'localhost';
private $username = 'brandon';
private $password = 'P@ssword';
private $database = 'wedding_database';
public $connection = null;

	function Connect()
	{
            try 
            {
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
	
	function WriteUserToDatabase($user)
	{
            $date = date('Y-m-d');

            //$stmt = $this->connection->prepare("INSERT INTO users (first_name, surname, cell, attending, mail, join_date, bran_acq, kaj_acq)
            //VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            //$stmt->bind_param("ssibsdbb", $firstname, $lastname, $cell, $attending, $email, $joinDate,$bKnows,$kKnows);
            $stmt = $this->connection->prepare("INSERT INTO users (first_name, surname, cell, attending, mail, join_date, bran_acq, kaj_acq, family, image_name)
            VALUES (:firstname, :lastname, :cell, :attend, :mail, :jDate, :bKn, :kKn, :family, :imgName)");
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
            //Array('FirstName'=>$_POST['firstName'],'surname'=>$_POST['surname'],'cell'=>$_POST['cell'],'mail'=>$_POST['mail'],'comment'=>$_POST['comment'],'kAcq'=>$_POST['kAcq'],'bAcq'=>$_POST['bAcq'])
            // set parameters and execute
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

            try{
                $stmt->execute();
                $userID = $this->connection->lastInsertId();
                $test = $this->writeComment($userID,$user['comment']);

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
        
}
?>