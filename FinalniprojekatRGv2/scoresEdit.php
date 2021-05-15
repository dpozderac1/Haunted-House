<?php
	$user = $_POST["user"];
	$score = $_POST["score"];
	$file_handle = fopen('scores.csv', 'r');
	while(!feof($file_handle)){
        //citamo csv i guramo u niz
        //fgetcsv po defaultu razdvaja na zarez
        $niz[] = fgetcsv($file_handle);
    }
	fclose($file_handle);

	foreach($niz as $value){
		if($value[0] == $user){
			$value[1] = $score;
			break;
		}
	}
	//upisemo ponovo u file
	$file_handle = fopen('scores.csv', 'w+');
	//nije gotovo
	
?>
