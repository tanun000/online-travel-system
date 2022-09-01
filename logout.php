<?php
session_start();
session_destroy();
header("location:index.php?mah=".sha1('root'));
?>