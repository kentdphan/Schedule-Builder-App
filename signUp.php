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
</style>
<body>
<?php
	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","pas1","P@a0107230810","pas1");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

	#get the parameter from the HTML form that this PHP program is connected to
	#since data from the form is sent by the HTTP POST action, use the $_POST array here
	
	$fname = $_POST['fnam'];
	$lname = $_POST['lnam'];	
	$email = $_POST['emai'];
	$username = $_POST['uname'];
	$password = $_POST['psw'];
?>
<p>
Welcome 
<?php echo $fname ?>
&nbsp Please click the log in button to return to the login page

 <div class="home">
	<a href="loginPage.html">Login Page</a>
  </div> 
</p>

<?php 

	$constructed_query = "INSERT INTO Users (First_Name, Last_Name, Email, Username, Password) values ('$fname', '$lname', '$email', '$username', '$password')";
	
	$result = mysqli_query($db, $constructed_query);



?>










</body>
</html>