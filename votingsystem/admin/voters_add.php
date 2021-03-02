<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$lrn = $_POST['lrn'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$grade = $_POST['grade'];
		$section = $_POST['section'];
		$track = $_POST['track'];
		$strand = $_POST['strand'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//generate voters id
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$voter = substr(str_shuffle($set), 0, 15);

		$sql = "INSERT INTO voters (voters_id, password, lrn, firstname, middlename, lastname, grade, section, track, strand, photo) VALUES ('$voter', '$password', '$lrn', $firstname', '$middlename', '$lastname', '$grade','$section','$track','$strand','$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>