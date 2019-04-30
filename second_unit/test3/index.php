<html>
    <head>
        <style>
            .row{
                border: 1px solid yellow;
                background-color: pink;
                padding: 10px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            $database_name = "test1";
            $username = "test1";
            $password = "test1";
            $server = "localhost";

            $link = mysqli_connect($server, $database_name, $username, $password);

            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }else{
                
                $sql = "SELECT id, name FROM person";
                $result = $link->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<div id=".$row["id"]." class='row'>id: " . $row["id"]. " - Name: " . $row["name"] . "</div>";
                    }
                } else {
                    echo "0 results";
                }


                /*
                echo "Successfull connect";

                $sql = "INSERT INTO person (name) VALUES ('John')"; 

                if ($link->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $link->error;
                }
                */
            }     
        ?>
    </body>
</html>