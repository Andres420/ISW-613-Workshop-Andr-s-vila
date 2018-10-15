<?php

require 'Student.php';
if($argc < 4){
    echo "Insufficient parameters\nphp ScriptUpdate.php id n newname [name(n),last_name(l),email_address(e)]";
    exit;
}
function nameValue($value){
    switch($value){
        case 'n':
            return 'name';
            break;
        case 'l':
            return 'last_name';
            break;
        case 'e':
            return 'email_address';
            break;
    }
}
try{
    if(!is_int(intval($argv[1]))){
        echo "Not number";
        exit;
    }
    
    $student = new Student($argv[1]);
    switch($argc){
        case 4:
            $arg1 = nameValue($argv[2]);
            $student->editStudent("{$arg1}='{$argv[3]}'");
            break;
        case 6:
            $arg1 = nameValue($argv[2]);
            $arg2 = nameValue($argv[4]);
            $student->editStudent("{$arg1}='{$argv[3]}', {$arg2}='{$argv[5]}'");
            break;
        case 8:
            $arg1 = nameValue($argv[2]);
            $arg2 = nameValue($argv[4]);
            $arg3 = nameValue($argv[6]);
            $student->editStudent("{$arg1}='{$argv[3]}', {$arg2}='{$argv[5]}', {$arg3}='{$argv[7]}'");
            break;
        default:            
            break;
    }
}catch(Exception $ex){
    echo "ERROR IN THE SCRIPT {$ex}";
}

?>