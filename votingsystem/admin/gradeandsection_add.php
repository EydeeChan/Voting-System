<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$grade = $_POST['grade'];
		$section = $_POST['section'];
		
		$sql = "INSERT INTO gradeandsection (grade, section) VALUES ('$grade', '$section')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Grade & Section added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: gradeandsection.php');
?>