<?php
session_start();
session_destroy();
print "<script>window.location='signin1.php';</script>";
?>