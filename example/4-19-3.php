<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Function</h1>
        <h2>Basic</h2>
        <?php
            function basic() {
                print("Lorem ipsum dolor1<br>");
                print("Lorem ipsum dolor2<br>");
            }

            basic();
            basic();
        ?>

        <h2>parameter &amp argument</h2>
        <?php
            function sum($left, $right) {
                print($left + $right);
                print("<br>");
            }

            sum(2,4);
        ?>
    </body>
</html>
