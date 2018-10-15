<?php

class DataAccess{
    private $SERVER = "127.0.0.1";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DATABASE = "test";
    private $LINK = null;
    
    function __construct(){
        try{
            $this->LINK = mysqli_connect($this->SERVER, $this->USERNAME, $this->PASSWORD, $this->DATABASE);
        }catch(Exception $ex){
            echo "ERROR IN THE DATABASE CONNECTION\n{$ex}";
        }
        
    }

    public function closeDataBase(){
        $this->LINK->close();
    }

    public function insertStudent($id,$first_name,$last_name,$email_address){
        try{
            $query = "INSERT INTO `students`(`id`, `name`, `last_name`, `email_address`) VALUES ('{$id}', '{$first_name}', '{$last_name}', '{$email_address}');"; 
            if($this->LINK->query($query))
            {
                echo "Student saved successfully";
            }
            
        }catch(Exception $ex){
            echo "ERROR IN THE DATABASE INSERT\n{$ex}";
        }
    }

    public function readStudent($id){
        try{
            $query = "SELECT id, name, last_name, email_address FROM students WHERE id = {$id};"; 
            if ($resultado = $this->LINK->query($query)) {
                while($fila = mysqli_fetch_assoc($resultado)){
                    echo "{$fila['id']}\t{$fila['name']}\t{$fila['last_name']}\t{$fila['email_address']}\n";
                }
            }
        }catch(Exception $ex){
            echo "ERROR IN THE DATABASE SELECT\n{$ex}";
        }
    }

    public function updateStudent($id,$params){
        try{
            $query = "UPDATE students SET {$params} WHERE id = {$id};"; 
            if (mysqli_query($this->LINK, $query)) {
                echo "Successfully modified student";
            }
        }catch(Exception $ex){
            echo "ERROR IN THE DATABASE UPDATE\n{$ex}";
        }
    }

    public function deleteStudent($id){
        try{
            $query = "DELETE FROM students WHERE id = {$id}"; 
            if (mysqli_query($this->LINK, $query)) {
                echo "Student successfully removed";
            }
        }catch(Exception $ex){
            echo "ERROR IN THE DATABASE DELETE\n{$ex}";
        }
    }
}

?>