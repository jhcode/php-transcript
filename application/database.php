<?php
/* PDO Database connection */
try {
    $conn = new PDO('mysql:host='.$dbconfig['host'].';dbname='.$dbconfig['database'], $dbconfig['username'], $dbconfig['password']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $errors = $e->getMessage();
    $__e = 'Database Error';
    require 'application/errors.php';
    die();
}