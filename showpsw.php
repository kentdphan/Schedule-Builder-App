<!DOCTYPE html>
<html lang="EN"><head>
	<title>Log in Page Info</title>
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

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
?>


<?php
	$constructed_query = "SELECT * FROM Users WHERE First_Name ='$fname' and Last_Name = '$lname' and Email = '$email' " ;
	$constructed_query2 = "SELECT Password FROM Users WHERE First_Name ='$fname' and Last_Name = '$lname' and Email = '$email' " ;
		#Execute query
	$result = mysqli_query($db, $constructed_query);
	$result2 = mysqli_query($db, $constructed_query2);


	#if result object is not returned, then print an error and exit the PHP program
	if(! $result){
		print("Error - query could not be executed");
		$error = mysqli_error();
		print "<p> . $error . </p>";
		exit;
	}
?>					  
<?php
	#check how many rows have been returned by the query
	$num_rows = mysqli_num_rows($result);

	#check how many fields are returned by the query
	$num_fields = mysqli_num_fields($result);

	$row=mysqli_fetch_array($result2,MYSQLI_NUM);
	#for all the rows as returned by the query, go through each row
	#and use the mysql_fetch_array function to return an array of the next row
	#field values can be obtained by subscripting the returned aray with the column names
?>	

<?php
	if ($num_rows == 0){
		print("Invalid, username or password. Please return to the log in page and try again.");
	}
	else{
		print("Your Password is: ");
		printf ($row[0]);

		}
?>
  <div class="home">
	<a href="loginPage.html">Login Page</a>
  </div> 

</body>
</html>