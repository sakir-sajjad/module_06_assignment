<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form action="registration_validation.php" method="POST" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br><br>

		<label for="email">Email:</label>
		<input type="email" name="user_email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="pass" required><br><br>

		<label for="profile_picture">Profile Picture:</label>
		<input type="file" name="profile_pic" accept="image/*" required><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>