<?php 
include('../connection.php');
$nid=$_GET['id'];

$save=mysqli_query($conn,"select * from complain where notice_id='$nid'  ");
$r=mysqli_fetch_array($save);

$user = $r['citizen_id'];
$ht = $r['email'];
$state = $r['state'];
$local = $r['local'];
$sub = $r['subject'];
//$user = $r['user'];
$details = $r['Description'];
$d = $r['date'];
 


mysqli_query($conn,"insert into solved values('','$user','$ht','$state','$local','$sub','$details','$d',now())");


$q=mysqli_query($conn,"delete from complain where notice_id='$nid'");

header('location:index.php?page=complain');

?>