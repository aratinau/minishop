<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname='.DBNAME, USER, PASS);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
