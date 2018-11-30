<?php
    require('lib/print.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
                print_title();
            ?>
        </title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
                print_list();
            ?>
        </ol>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])) { ?>
            <a href="update.php?id=<?= $_GET['id']; ?>">update</a>
        <?php } ?>
        <form action="update_process.php" method="post">
            <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>" />
            <p>
                <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>" />
            </p>
            <p>
                <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
            </p>
            <p>
                <input type="submit" value="Submit" />
            </p>
        </form>
    </body>
</html>
