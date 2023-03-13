<?php
	session_start();
	if(isset($_POST['submit'])) {
		$user_name = $_POST['name'];
		$user_email = $_POST['user_email'];
		$password = $_POST['pass'];
		$user_profile_pic = $_FILES['profile_pic']['name'];
		$upload_directory = "uploads/";

		if(empty($user_name) || empty($user_email) || empty($password) || empty($user_profile_pic)) {
			echo "Please fill all the fields.";
			exit();
		}

		if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
			echo "Invalid email format.";
			exit();
		}

		$timestamp = time();
		$profile_pic_filename = $timestamp . '_' . $user_profile_pic;

		if(move_uploaded_file($_FILES['profile_pic']['tmp_name'], $upload_directory.$profile_pic_filename)) {
			echo "Profile picture uploaded successfully.";
		} else {
			echo "Failed to upload profile picture.";
			exit();
		}

		$user_data = array($user_name, $user_email, $profile_pic_filename);
		$file = fopen('users.csv', 'a');
		fputcsv($file, $user_data);
		fclose($file);

		setcookie("user_name", $user_name, time()+60, '/');

		header("Location: user_details.php");
		exit();
	}
?>