<?php
    if(count($argv) <= 2){
        echo "faltan parametros";
        exit;
    }   
    $pathfile = $argv[1];
    $namefile = $argv[2];
    $persons = array();


    try{
        $file = fopen($pathfile, "r");
        for ($i = 0; $row = fgetcsv($file); ++$i) {
            if($i != 0){                
                $person_info = array();
                for ($c=0; $c < count($row); $c++) {
                    array_push($person_info, $row[$c]);
                }
                $person = "$person_info[0] $person_info[1] lives in $person_info[3] and his phone number is $person_info[2]\r\n";
                array_push($persons, $person);
            }
        }
        fclose($file);
    }catch(Exception $e){
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }

    $handle = fopen($namefile, 'w') or die('Cannot open file:  '.$namefile);
    foreach ($persons as $valor) {
        fwrite($handle, $valor);
    }
    fclose($handle);
/*
php script.php C:\Documents\input.csv output.txt
*/
?>
