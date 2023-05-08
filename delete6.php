<?php
$id = $_GET['id'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"province");
if (isset($_GET['delete'])){
    $query="delete from province6 where id= {$id}";
    $result=mysqli_query($connection,$query);
    header("Location: province6.php");
    die();}
    ?>