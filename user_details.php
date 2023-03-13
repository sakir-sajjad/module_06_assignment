<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
	<h2>Successfully Registered</h2>
	<p>Welcome <?php echo $_COOKIE["user_name"]; ?>!</p>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $file = fopen('users.csv', 'r');
                while(($info = fgetcsv($file)) !== FALSE) {
                    echo '<tr>';
                    foreach($info as $data) {
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }
                fclose($file);
            ?>
        </tbody>
    </table>
</body>
</html>

    