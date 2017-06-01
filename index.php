<?php 

$db = require_once 'app/bootstrap.php';

$db->selectAll()->from('employees');
$employees = $db->execute();

