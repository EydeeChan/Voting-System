<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$partylist = $_POST['partylist'];

		$sql = "SELECT * FROM partylist ";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		
		$sql = "INSERT INTO partylist (partylist) VALUES ('$partylist')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Partylist added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: partylist.php');
?>