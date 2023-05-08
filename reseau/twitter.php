<?php require "base.php"; 

    $requete = $base->prepare("SELECT * FROM tweet");

    $requete->execute();
    
    $allTweets = $requete->fetchAll(PDO::FETCH_ASSOC);
    
    $name = "Twitter"
    
?>

<?php
echo "<h1>$name</h1>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link rel="stylesheet" href="ahah.css">
</head>
<body>

<form class="form" method="POST" action="id.php">
    <button type="submit">Compte</button>
</form>

<hr>

<form class="form" method="POST" action="insertt.php">
    <input type="text" name="user_id" placeholder="Pseudo">
    <input type="text" name="tweet_content" placeholder="Tweet">

    <button type="submit">Tweeter</button>
</form>

<hr>

    <?php foreach($allTweets as $tweets) { ?>
    <p><?= $tweets['tweet_content'] ?></p>
    <p><?= $tweets['date'] ?></p>

    <form action="suppr.php" method="POST">
        <input type="hidden" name="del" value=" <?= $tweets['tweets_id']; ?> ">
        <button class="btn-delete" type="submit">Supprimer</button>
    </form>

    <?php } ?>

</body>
</html>



 
