<?php
	function checkConnection(){
	    try{ 
    		$conn = openDatabaseConnection(); 
	       	$stmt = $conn->prepare("SHOW TABLES");
       		$stmt->execute();
       		$stmt->fetchAll();
       		
	    }catch(Exception $e){
			return false;
	    }

	    return true;
	}
	function getHorses(){
		try {
			$conn=openDatabaseConnection();
			$stmt = $conn->prepare("SELECT * FROM horses");
			$stmt->execute();
			$result = $stmt->fetchAll();
	 
		}
		catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}
		$conn = null;
		return $result;
	}