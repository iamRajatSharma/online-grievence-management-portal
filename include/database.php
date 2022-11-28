<?php
$conn = mysqli_connect("localhost", "root", "", "miniproject");
if(!$conn){
    echo "Database not connected";
    exit();
}