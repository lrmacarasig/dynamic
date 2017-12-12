<?php

//initializing variables...

$username= "";
$email="";
$id=0;
$edit_state=FALSE;

//Connect to database

$con = mysqli_connect("localhost", "root", "", "dorms");

if (!$con){

	echo "Connection to database unsuccessful!";
} else {

	echo "Connection to database successful!";


}

//Search
	if (isset($_POST['query'])) {
		$query = "SELECT * FROM students WHERE username LIKE '%{$_POST['query']}%'";

		$student_results = mysqli_query($con,$query);
		}


//CREATE Record
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password']; 

	$query = "INSERT INTO students(username, email,password) VALUES ('$username', '$email','$password')";

	mysqli_query($con, $query);
	$_SESSION['message'] = "Student record received";
	header("location: index.php");
}

//READ RECORDS
$student_records = mysqli_query($con, "SELECT * FROM students");

//UPDATE RECORDS
if (isset($_POST['update'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password']; //encrypt password
	$id = $_POST['id'];

	//Prepare a query

	$query = "UPDATE students SET
	username='$username',
	email='$email',
	password='$password',
	WHERE id=$id";

	mysqli_query($con, $query);
	$_SESSION['message'] = "Student record updated";
	header("location: index.php");
}

if (isset($_POST['update'])) {
		
		include 'server.php';
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$status = "Pending application";
		$id = $_POST['id'];
		
		echo $id;

		$query = "UPDATE students SET username = '$username', email = '$email' ,password = '$password' WHERE id = '$id' ";


		//Perform query
		mysqli_query($con,$query);

		//Set status message
		$_SESSION['message'] = "Student record updated";

		//Redirect to homepage
		header("location: index.php");
	} 

	if (isset($_POST['del'])) {
		 
		$id = $_POST['del'];
	}

//DELETE RECORD
if (isset($_GET['del'])) {
	$id = $_GET['del'];

	$query = "DELETE FROM students WHERE id=$id";

	mysqli_query($con, $query);
	$_SESSION['message'] = "Student record deleted";
	header("location: index.php");
}



?>