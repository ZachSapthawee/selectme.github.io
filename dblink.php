<?php 
    $dbcon = mysqli_connect("localhost","root","","tbl")or die("Error: ".mysqli_error($dbcon));
    mysqli_set_charset($dbcon,"utf8");
?>