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
	
	function WriteUserToDatabase()
	{
            
            /*user_id int AUTO_INCREMENT,
	first_name varchar(50) not null,
	surname varchar(50) not null,
	cell int(50),
        attending boolean not null default false,
	mail varchar(150),
	password varchar(255) not null,
	image_name varchar(255),
	join_date date not null,
	bran_acq boolean default false not null,
	kaj_acq boolean default false not null,*/
                $date = date('Y-m-d');
                
                //$stmt = $this->connection->prepare("INSERT INTO users (first_name, surname, cell, attending, mail, join_date, bran_acq, kaj_acq)
                //VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                //$stmt->bind_param("ssibsdbb", $firstname, $lastname, $cell, $attending, $email, $joinDate,$bKnows,$kKnows);
                $stmt = $this->connection->prepare("INSERT INTO users (first_name, surname, cell, attending, mail, join_date, bran_acq, kaj_acq)
                VALUES (:firstname, :lastname, :cell, :attend, :mail, :jDate, :bKn, :kKn)");
                $stmt->bindParam(':firstname', $firstname);
                $stmt->bindParam(':lastname', $lastname);
                $stmt->bindParam(':cell', $cell);
                $stmt->bindParam(':attend', $attending);
                $stmt->bindParam(':mail', $email);
                $stmt->bindParam(':jDate', $joinDate);
                $stmt->bindParam(':bKn', $bKnows);
                $stmt->bindParam(':kKn', $kKnows);

                // set parameters and execute
                $firstname = 'Brandon';
                $lastname = 'Faul';
                $cell = 150;
                $attending = TRUE;
                $email = 'bwcfaul@gmail.com';
                $joinDate = $date;
                $bKnows = FALSE;
                $kKnows = TRUE;
                $stmt->execute();



                //$conn->close();
	}
}
?>