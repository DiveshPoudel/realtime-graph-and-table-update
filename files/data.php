<?php
	//setting header to json
	header('Content-Type: application/json');
	
	//database
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	//connection
	$conn = new mysqli($servername, $username, $password, "usdjpy");
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "select date,bid,ask,open from tick order by id desc";
	$result = $conn->query($sql);
 
	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
			//loop through the returned data
	$data = array();
	foreach ($result as $row){
		$data[] = $row;
	}
	}
	 }
	
	//free memory associated with result
	$result->close();

	//close connection
	$conn->close();
	

	//now print the data
	print json_encode($data);
?>