<?php 

$db = require 'app/bootstrap.php';




$employees = $db->selectAll();
dd($employees);