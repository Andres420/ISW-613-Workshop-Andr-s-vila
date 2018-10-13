<?php

class DataAccess{
    private $SERVER = "127.0.0.1";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DATABASE = "university";
    private $TABLE = "students";
    private $LINK;
    
    function __constructor(){
        $LINK = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);
    }

    public function insertStudent(){

    }

    public function readStudent(){

    }

    public function updateStudent(){

    }

    public function deleteStudent(){

    }
    
}


?>