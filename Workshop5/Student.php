<?php
 require 'DataAccess.php'; 

 class Student extends DataAccess{ 
   
    private $id;
    

    function __construct($id){
        parent::__construct();
        $this->id = $id;
    }

    public function addStudent($first_name,$last_name,$email_address)
    {        
        $this->insertStudent($this->id,$first_name,$last_name,$email_address);
    }

    public function editStudent($params)
    {
        $this->updateStudent($this->id, $params);
    }

    public function deleteStudentChild()
    {
        $this->deleteStudent($this->id);
    }

    public function readStudentChild()
    {
        $this->readStudent($this->id);
    }
    public function closeDataBaseChild(){
        $this->closeDataBase();
    }
}

?>