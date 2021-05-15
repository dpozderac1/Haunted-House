<?php
	$user = $_POST["user"];
	$score = $_POST["score"];
	$file_handle = fopen('scores.csv', 'a');
	fwrite($file_handle, $user.",".$score."\r\n");
	fclose($file_handle);
	echo "jej";
?>