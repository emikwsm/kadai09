<?php

session_start();


$name = 'かわしま';
$age = '12';
// echo $name . $age;

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;

$id = session_id();
echo $id;
