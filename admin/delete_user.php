<?php 
include('../connection.php');
$nid=$_GET['id'];
$today = date('Y-m-d');
$q=mysqli_query($conn,"update  citizen set status=1, date='$today' where id='$nid'");

header('location:index.php?page=manage_users');

?>