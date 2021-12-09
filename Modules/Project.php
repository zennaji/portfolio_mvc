<?php
include "Database.php";

function getProject(){

    global $pdo;
    $query = $pdo->prepare("SELECT * FROM project ");
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_CLASS, 'Project');

    return $request;
}



function getProject1(){

    global $pdo;
    $query = $pdo->prepare("SELECT * FROM project LIMIT 2");
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_CLASS, 'Project');

    return $request;
}
