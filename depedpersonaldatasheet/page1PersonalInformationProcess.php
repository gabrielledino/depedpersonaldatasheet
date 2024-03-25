<?php
require_once('resource/php/init.php');
$insertStudent = new insertStudent(
    $_GET['surname'], 
    $_GET['firstname'], 
    $_GET['middlename'], 
    $_GET['date-of-birth'], 
    $_GET['place-of-birth'], 
    $_GET['gender-male'], 
    $_GET['gender-female'], 
    $_GET[''], 
    $_GET[''], 
    $_GET[''], 
    $_GET[''], 
    $_GET[''], 
    $_GET['']);
$insertStudent->insertStudent();

header('Location:insertStudentAdmin.php?status=Y')

 ?>
