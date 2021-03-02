<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$lrn = $_POST['lrn'];
		$firstname = $_POST['firstname'];
		$middlename= $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$grade = $_POST['grade'];
		$section = $_POST['section'];
		$track = $_POST['track'];
		$strand = $_POST['strand'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM voters WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		$sql = "UPDATE voters SET lrn = '$lrn', firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', grade = '$grade', section = '$section', track = '$track', strand = '$strand', password = '$password' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: voters.php');

?>