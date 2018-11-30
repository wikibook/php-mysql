<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <li><a href="index.php?id=HTML">HTML</a></li>
            <li><a href="index.php?id=CSS">CSS</a></li>
            <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?php
                만약에 id 값이 있다면
                    echo $_GET['id'];가 실행되고
                없다면
                    echo "Welcome";
            ?>
        </h2>
        <?php
            echo file_get_contents("data/".$_GET['id']);
        ?>
    </body>
</html>
