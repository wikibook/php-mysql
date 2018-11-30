<?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $row = print_r(mysqli_fetch_array($result));
?>
