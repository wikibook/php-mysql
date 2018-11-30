<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <p><a href="index.php">topic</a></p>
        <table border="1">
            <tr>
                <td>id</td><td>name</td><td>profile</td><td></td>
            </tr>
            <?php
                $sql = "SELECT * FROM author";
                $result = mysqli_query($conn, $sql);
                while( $row = mysqli_fetch_array($result) ) {
                    $filtered = array(
                        'id' => htmlspecialchars($row['id']),
                        'name' => htmlspecialchars($row['name']),
                        'profile' => htmlspecialchars($row['profile'])
                    );
            ?>
            <tr>
                <td><?= $filtered['id'] ?></td>
                <td><?= $filtered['name'] ?></td>
                <td><?= $filtered['profile'] ?></td>
                <td><a href="author.php?id=<?= $filtered['id'] ?>">update</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <?php
            $escaped = array(
                'name' => '',
                'profile' => ''
            );
            if( isset($_GET['id'])) {
                $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
                settype($filtered_id, 'integer');
                $sql = "SELECT * FROM author WHERE id = {$filtered_id}";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                $escaped['name'] = htmlspecialchars($row['name']);
                $escaped['profile'] = htmlspecialchars($row['profile']);
            }

        ?>
        <form action="process_create_author.php" method="post">
            <p><input type="text" name="name" placeholder="name" value="<?= $escaped['name'] ?>"></p>
            <p><textarea name="profile" placeholder="profile"><?= $escaped['profile'] ?></textarea></p>
            <p><input type="submit" value="Create author"></p>
        </form>
    </body>
</html>
