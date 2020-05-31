<?php
	
	require_once 'dbconfig.php';

	if($_POST)
	{
		$raison= $_POST['r'];
		$medecin= $_POST['m'];
		$dat= $_POST['dt'];
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['password'];
		
		$password = $user_password;
		
		try 
		{		
			$stmt = $db_con->prepare("INSERT INTO rdv() VALUES(NULL,?, ? ,? ,? , ?, ?)");
			$stmt->execute(array($raison,$medecin,$dat,$user_name,$user_email,$user_password));
					
				if($stmt->execute())
				{
					echo "registered";
				}
				else
				{
					echo "ne peut pas etre executée !";
				}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>