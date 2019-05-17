<?php

class Person{
    var $id;
    var $name;
    
    function __construct($name) {
        $this->name = $name;
    }

    function save(){
        $sql = "INSERT INTO person (name) VALUES ('".$this->name."')";
        $link = connect();
        if ($link->query($sql) === TRUE) {
            $id = mysqli_insert_id($link);
            $this->id = $id;
            return $this;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }
    }
}

?>