<?php
require 'Student.php';
if($argc <= 4){
    echo "Insufficient parameters\nphp ScriptAdd.php id name lastname email";
    exit;
}
try{
    $id = $argv[1];
    $first_name = $argv[2];
    $last_name = $argv[3];
    $email_address = $argv[4];
    echo is_int($argv[1]);
    if(!is_int(intval($argv[1]))){
        echo "Not number";
        exit;
    }
    if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format"; 
    }
    
    $student = new Student($id);
    $student->addStudent($first_name,$last_name,$email_address);
    $student->closeDataBaseChild();
}catch(Exception $ex){
    echo "ERROR IN THE SCRIPT {$ex}";
}


?>