<?php
    $conn = mysqli_connect ('localhost', 'root', '111111', 'opentutorials');

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $list = '';

    while( $row = mysqli_fetch_array($result) ) {
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }

    $sql = "SELECT * FROM author";
    $result = mysqli_query($conn, $sql);
    $select_form = '<select>';
    while($row = mysqli_fetch_array($result)) {
        $select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
    $select_form .= '</select>';
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
        <form action="process_create.php" method="POST">
            <p><input type="text" name="title" placeholder="title"></p>
            <p><textarea name="description" placeholder="description"></textarea></p>
            <?= $select_form ?>
            <p><input type="submit" value="Submit"></p>
        </form>
    </body>
</html>
