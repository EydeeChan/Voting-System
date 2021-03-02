<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$grade = $_POST['grade'];
		$section = $_POST['section'];

		$sql = "UPDATE gradeandsecton SET grade = '$grade', section = '$section' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Grade & Section updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: gradeandsection.php');

?>