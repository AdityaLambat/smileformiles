<?php 
$database = "sfmt";
$conn = mysqli_connect('localhost','root','',$database);
if (!$conn) 
{
    die("<script>alert('Connection Failed.')</script>");
}
?>