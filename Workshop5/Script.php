<?php
require 'student.php';

try{
    $command = $argv[0];
    switch ($command) {
        case 'i':
            $id = $argv[1];
            $first_name = $argv[2];
            $last_name = $argv[3];
            $email_address = $argv[4];
            $student = new Student();
            break;
        case 'r':
            break;
        case 'u':
            break;
        case 'd':
            break;    
        default:
            exit(
                "Example: php script.php i[insert] id name lastname email\n"
            );
            break;
    }
}catch(Exception $ex){
        echo $ex;
}





?>