<?php
include('connect.php');
include('models/person.php');
$person = new Person('Bob');
$person->save();
echo $person->id;
//include('vistas/home.php');
?>