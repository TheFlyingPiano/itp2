<?php
header("Content-Type: text/html; charset=utf-8");  

//connect to DB
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "itp2";
	$charset="utf8";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

//load data from db
	
if($_POST['action'] == 'load') {

	$ID = $_POST['UID'];
	$sql = "SELECT content FROM content WHERE UID = ";
	$sql= $sql . $ID;
	
	$result = mysqli_query($conn, $sql);
	

    
		while($row = mysqli_fetch_assoc($result)) {
		
			echo $row["content"];
			}	
}

//load user selection


//CHANGE THIS SO CONTENT GOES INTO CONTENT AND EACH USER GETS ITS OWN DIV WITH ITS USER ID
if($_POST['action'] == 'users') {

	$ID = $_POST['UID'];
	$sql = "SELECT content FROM content WHERE UID = ";
	$sql= $sql . $ID;
	
	$result = mysqli_query($conn, $sql);	
 
		while($row = mysqli_fetch_assoc($result)) {
		
			echo $row["content"]."<br>"."<br>";
			}	
		
	$sql2 = "SELECT Name FROM users";
	
	$result2 = mysqli_query($conn, $sql2);	
	
			while($row = mysqli_fetch_assoc($result2)) {
		
			echo $row["Name"]."<br>";
			
			}	
			
			
			
			
}


?>