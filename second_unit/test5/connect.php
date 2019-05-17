<?php
    function connect(){
        $database_name = "test1";
        $username = "test1";
        $password = "test1";
        $server = "localhost";

        $link = mysqli_connect($server, $database_name, $username, $password);

        
        if (!$link) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        }

        return $link;
    }
?>