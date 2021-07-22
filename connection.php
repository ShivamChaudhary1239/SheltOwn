<?php

$con=mysqli_connect("localhost", "root", "", "testing");

if(mysqli_connect_error()){
    echo"<script>alert('Can not connect to database');</script>";
    exit();
}


?>