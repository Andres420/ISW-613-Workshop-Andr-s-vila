<?php
class Student{
    private $id = 0;
    private $first_name = "nombre";
    private $last_name = "apellido";
    private $email_address = "@gmail.com";

    function __contructor($id,$first_name,$last_name,$email_address){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email_address = $email_address;
    }

    public function addStudent()
    {
        
    }

    public function editStudent()
    {
        
    }

    public function deleteStudent()
    {
        
    }

    public function readStudent()
    {
        
    }
    
}

?>