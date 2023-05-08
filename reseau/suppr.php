<?php

    require "base.php";
    $suppr = $base->prepare("DELETE FROM tweet WHERE id_tweet = :id_tweet");
    $suppr->execute([
        "id_tweet" => $_POST['del'],
    ]);

    header("Location: twitter.php");
?>