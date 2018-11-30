<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $list = '';

    while( $row = mysqli_fetch_array($result) ) {
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }

    $article = array(
        'title' => 'Welcome',
        'description' => 'Hello, web'
    );
    if( isset($_GET['id'])) {
        $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol><?= $list ?></ol>
        <form action="process_update.php" method="POST">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <p><input type="text" name="title" placeholder="title" value="<?= $article['title'] ?>"></p>
            <p><textarea name="description" placeholder="description"><?= $article['description'] ?></textarea></p>
            <p><input type="submit" value="Submit"></p>
        </form>
    </body>
</html>
