<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$grade = $_POST['grade'];
		$section = $_POST['section'];
		$track = $_POST['track'];
		$strand = $_POST['strand'];
		$partylist = $_POST['partylist'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];

		$sql = "UPDATE candidates SET firstname = '$firstname', middlename = '$middlename' ,lastname = '$lastname', grade = '$grade', section = '$section', track = '$track', strand = '$strand', partylist = '$partylist', position_id = '$position', platform = '$platform' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>