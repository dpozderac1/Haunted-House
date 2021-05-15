<?php

$file_handle = fopen('scores.csv', 'r');
echo fread($file_handle, filesize('scores.csv'));
    fclose($file_handle);
	
?>