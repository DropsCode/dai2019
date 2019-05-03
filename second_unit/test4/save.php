<?php
    include 'funciones.php';

    $name = $_POST['name'];

    
    $sql = "SELECT id, name FROM person";
    $resp = todo($sql, 'select');

    foreach ($resp as $key => $row) {
        echo "<br>".$row['name'];
    }
    

    /*
    $sql = "INSERT INTO person (name) VALUES ('".$name."')";
    $resp = todo($sql, 'insert');

    if($resp){
        echo "Todo ok";
    }else{
        echo "Todo mal";
    }
    */
    
?>