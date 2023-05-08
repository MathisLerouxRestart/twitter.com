<?php

try {
    $base = new PDO(
        "mysql:host=localhost;dbname=twitter",
        "root",
        ""
    );
} catch(PDOException $error) {
    die("$error");
}

?>