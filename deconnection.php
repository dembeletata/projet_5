<?php
$submit=$_POST['submit'];
    if (isset($submit)) {
        session_start();
        session_destroy();
        header('location:index.php');
        exit;
    }

?>