<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$track = $_POST['track'];
		$strand = $_POST['strand'];

		$sql = "UPDATE trackandstrand SET track = '$track', strand = '$strand' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Track & Strand updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: trackandstrand.php');

?>