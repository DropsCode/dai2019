<?php include('connect.php') ?>
<div>
    <nav>
        <ul>
            <li>
                <?php
                    
                    $variable = 5;
                    if($variable > 5){
                        echo $variable;
                    }else{
                        echo "nada";
                    }
                ?>
            </li>
            <li>2</li>
            <li>3</li>
        </ul>
    </nav>
</div>