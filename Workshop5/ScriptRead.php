<?php

require 'Student.php';
if($argc <= 1){
    echo "Insufficient parameters\nphp ScriptRead.php id";
    exit;
}
try{
    if(!is_int(intval($argv[1]))){
        echo "Not number";
        exit;
    }
    $student = new Student($argv[1]);
    $student->readStudentChild();
}catch(Exception $ex){
    echo "ERROR IN THE SCRIPT {$ex}";
}
?>