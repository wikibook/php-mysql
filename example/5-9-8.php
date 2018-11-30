<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $list = '';

    while( $row = mysqli_fetch_array($result) ) {
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }

    $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article = array(
        'title' => $row['title'],
        'description' => $row['description']
    );
    print_r($article);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol><?= $list ?></ol>
        <a href="create.php">create</a>
        <h2><?= $article['title'] ?></h2>
        <?= $article['description'] ?>
    </body>
</html>
