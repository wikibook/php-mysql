<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $list = '';

    while( $row = mysqli_fetch_array($result) ) {
        $list = $list."<li>{$row['title']}</li>";
    }
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
        <h2>Welcome</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    </body>
</html>
