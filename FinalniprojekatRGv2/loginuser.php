<?php
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $file_handle = fopen('spisak_igraca.csv', 'r');
    
    while(!feof($file_handle)){
        //citamo csv i guramo u niz
        //fgetcsv po defaultu razdvaja na zarez
        $niz[] = fgetcsv($file_handle);
    }
    fclose($file_handle);
    //sada trebamo pretraziti niz da vidimo ima li ovog usera
    //spisak 0-136, zadnji je empty entry
    foreach($niz as $value){
        //value je je ustv niz sa 2 elementa kroz svaku iteraciju
        if($value[0] == $username && $value[1] == $password){
            //nasli usera
            unset($value);
            //echo 'Uspjesno ste logovani!';
            return;
        }
    }
    //sklonimo referencu na value
    unset($value);
    echo 'Pogresni podaci!';
?>