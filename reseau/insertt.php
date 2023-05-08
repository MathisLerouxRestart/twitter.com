<?php

require 'base.php';

$insertt = $base->prepare("INSERT INTO tweet (id_tweet, tweet_content) VALUES (:id, :content)");
$insertt->execute(
    [
        "id" => null,
        "content" => $_POST ['tweet_content']
    ]
);

header("Location: twitter.php");

?>
