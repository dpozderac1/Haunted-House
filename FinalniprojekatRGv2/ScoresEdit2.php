<?php

	$user = $_POST["user"];
	$score = $_POST["score"];
	$new_line = $user.",".$score."\r\n";
	$contents = file_get_contents('scores.csv');
	$new_contents= "";
		
    	$niz = explode(',', $contents);
    	foreach ($niz as $record) {    // for each line
        if (strpos($record, $user) !== false) { // if we have found the correct line
            $new_contents .= $new_line; // change record to new record
        }else{
            $new_contents .= $record."\r\n";
        }
    
    file_put_contents('scores.csv', $new_contents); // save the records to the file
    echo "Uspjesno azuriranje scores.csv!";
}
else{
    echo "tugi, neupsjesno";
}
?>