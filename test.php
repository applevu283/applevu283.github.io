<?php
	$DB_server = "localhost";
	$DB_user = "root";
	$DB_password = "sQ25wesdF";
	$DB_name = "githubdb";
	$githubdb = new mysqli($DB_server, $DB_user, $DB_password, $DB_name);

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		echo "連線成功!";
		$githubdb->close();
	}
?>