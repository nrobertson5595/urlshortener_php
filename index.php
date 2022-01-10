<?php
    include 'db.php';

    $db = new Database("localhost", "url_short", "root", "root" );
    $db = $db->connect();

    $stmt = $db->query("SELECT * FROM urls");
    $urls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
</head>
<body>

    <main>
<section>
<form action="/add/index.php" method="post">
    <input type="text" name="long_url" id="long_url" placeholder="https://example...." />
<input type="submit" value="SHORTEN" />
</form>
</section>
<section>
<?php foreach ($urls as $url) : ?>
    <div>
        <div>
<?= $url['ID']; ?>
</div>
<div>
    <a href="http://localhost/r?c=<?= $url['ID']; ?>" target="_blank">http://localhost/r?c=<?= $url['ID']; ?></a>
</div>
<div>
    <a href="<?= $url['long_url'] ?>" target="_blank"><?= $url['long_url']?></a>
    </div>
    <?php endforeach; ?>
    
    
</section>
</main>
</body>
</html>

