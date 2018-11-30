<?php
    $sql = "
        INSERT INTO topic
            (title, description, created)
            VALUES(
                '{$_POST['title']}',
                '{$_POST['description']}',
                NOW()
            )
    ";
    echo $sql;
?>
