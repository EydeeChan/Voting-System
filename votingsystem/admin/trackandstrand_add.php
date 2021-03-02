<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$track = $_POST['track'];
		$strand = $_POST['strand'];
		
		$sql = "INSERT INTO trackandstrand (track, strand) VALUES ('$track', '$strand')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Position added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: trackandstrand.php');
?>