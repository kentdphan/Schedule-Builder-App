<!DOCTYPE html>
<html lang="EN"><head>
	<title>Thank You</title>
</head>
<style>
.home a {
    position: absolute;
    top: 8px;
    right: 16px;
    font-size: 18px;
	background-color: #ff8080;
    border: none;
    color: white;
    padding: 8px 32px;
    margin: 0px 16px 34px;
    position: absolute;
    top: 10px;
    right: 10px;
}
.home a:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.events a {
    position: absolute;
    top: 15px;
    right: 16px;
    font-size: 18px;
	background-color: #ff8080;
    border: none;
    color: white;
    padding: 8px 32px;
    margin: 0px 200px 45px;
    position: absolute;
    top: 10px;
    right: 10px;
}
.events a:hover {
  box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.2), 0 10px 30px 0 rgba(0, 0, 0, 0.19);
}
</style>
<body>
<?php
	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","pas1","P@a0107230810","pas1");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

	#get the parameter from the HTML form that this PHP program is connected to
	#since data from the form is sent by the HTTP POST action, use the $_POST array here
	
	$newEvent = $_POST['newEvent'];
	$timePeriod = $_POST['timePeriod'];	
	$location = $_POST['location'];
	$invite = $_POST['invite'];
	$color = $_POST['color'];
	$username = $_POST['username'];

?>
<p>
 <div class="home">
	<a href="../index.html">Home Page</a>
  </div>

 <div class="events">
	<a href="addEvent.html">Go Back</a>
  </div>  
</p>


<?php
	$constructed_query = "SELECT Username FROM Users WHERE Username ='$username'" ;
	$result = mysqli_query($db, $constructed_query);

	$row=mysqli_fetch_array($result,MYSQLI_NUM);
	if($row[0] == $username){
		$constructed_query3 = "INSERT INTO Events (event_id, time_period, location, invite_ppl, color, username) values ('$newEvent', '$timePeriod', '$location', '$invite', '$color', '$username')";
		echo("Your Event has been Added and here are your current events </br>");
		print("</br>");
		$result3 = mysqli_query($db, $constructed_query3);
		
	#Execute query
	$constructed_query2 = "SELECT * FROM Events " ;
	$result2 = mysqli_query($db, $constructed_query2);
	while ( $row_array2 = mysqli_fetch_array($result2) )
	{
		if( $row[0] == $username){
		#print("$row[0] </br>");
		#print("$username </br>"); 
		print("Event: $row_array2[0] </br>");
		print("Time Period: $row_array2[1] </br>");
		print("Location: $row_array2[2] </br>");
		print("Invite People: $row_array2[3] </br>");
		print("Color: $row_array2[4] </br>");
		print("</br>");
		}

	}
	
	}
	
	else{
		echo("There seems to be a problem Please go back and Check your Username");
	}




?>










</body>
</html>
