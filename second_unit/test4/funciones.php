<?php
    include 'connect.php';

    function insert($sql){
        $link = connect();
        return $link->query($sql) === TRUE;
    }

    function select($sql){
        $link = connect();
        $result = $link->query($sql);
        $resp = array();

        while($row = $result->fetch_assoc()) {
            array_push($resp, $row);
        }

        return $resp;
    }

    function todo($sql, $type){
        if($type == 'insert'){
            return insert($sql);
        }elseif($type == 'select'){
            return select($sql);
        }
    }
?>