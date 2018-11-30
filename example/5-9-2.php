<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <?php
                $conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

                $sql = "SELECT * FROM topic";
                $result = mysqli_query($conn, $sql);

                while( $row = mysqli_fetch_array($result) ) {
                    echo "<li>{$row['title']}</li>";
                }
            ?>
        </ol>
        <a href="create.php">create</a>
        <h2>Welcome</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    </body>
</html>
