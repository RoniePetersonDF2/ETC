<?php

    $dbh = new \PDO("mysql:host=127.0.0.1;dbname=escolabd;","root", "");

    $query = "SELECT * FROM usuarios";

    $stmt = $dbh->query($query);

    echo '<pre>';
    print_r($stmt->fetchAll());

