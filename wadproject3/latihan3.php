<?php
    $coon = mysqli_connect ("localhost:3306" , "root", "", "wadproject3");
    $result = mysqli_query($coon, "SELECT * FROM student");
?>