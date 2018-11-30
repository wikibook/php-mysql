<?php
    unlink('data/'.$_GET['id']);
    header('Location: /index.php');
?>
