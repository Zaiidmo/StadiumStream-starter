<?php 
require '../../../app/Classes/Crud.php';
// require '../../../app/core/Config.php';

//Acceding the table
$tablename = 'teams';
$team = new Crud($db);
$team->read($tablename);