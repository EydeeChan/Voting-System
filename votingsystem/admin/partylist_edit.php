<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$partylist = $_POST['partylist'];

		$sql = "UPDATE partylist SET partylist = '$partylist' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Partylist updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: partylist.php');

?>