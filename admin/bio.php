<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Hostel Management</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">  <?php echo $admin; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			
            <li><a href="#"><img src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			
			
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Approve Citizens </a></li>
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Mange  Notification</a></li>
          <li><a href="index.php?page=complain"><span class="glyphicon glyphicon-user"></span>Complains</a></li>
             <li><a href="index.php?page=all_com"><span class="glyphicon glyphicon-user"></span>All Complains</a></li>
             <li><a href="index.php?page=search_student"><span class="glyphicon glyphicon-user"></span>Search Citizens</a></li>
              <li><a href="index.php?page=search_by_block"><span class="glyphicon glyphicon-user"></span>Search By State</a></li>
               <li><a href="index.php?page=matric"><span class="glyphicon glyphicon-user"></span>Search By Local Govt</a></li>
      


          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
      if($page=="matric")
      {
        include('student_matric.php');
      
      }
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
      if($page=="all_block")
      {
        include('all_block.php');
      
      }
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
        if($page=="add_sch")
      {
        include('add_school.php');
      
      }
			 if($page=="add_dept")
      {
        include('add_department.php');
      
      }
      if($page=="add_matric")
      {
        include('add_matric_no.php');
      
      }
			
			 if($page=="complain")
      {
        include('com.php');
      
      }
      if($page=="all_com")
      {
        include('all_com.php');
      
      }
       if($page=="search_student")
      {
        include('search.php');
      
      }
       if($page=="all_visitors")
      {
        include('all_visitors.php');
      
      }
       if($page=="visitors")
      {
        include('visit.php');
      
      }
      

			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
      if($page=="search_by_block")
      {
        include('search_block.php');
      
      }
      if($page=="block_room")
      {
        include('block.php');
      
      }
		  }
		  
		  else
		  {
		  
          
    
        if(isset($_GET['qid']))
{
 
 // $_SESSION['hostel'] = $_POST['h'];

 // $hos =  $_SESSION['hostel'];
  $cze= $_GET['qid'];
 // echo '<h2 style="color:#00FFCC">Student in Block '.$block.'</h2>';
  //echo '<form method="post">';
   
 

$res=mysqli_query($conn,"SELECT * from citizen where citizen_id= '$cze'  ");
    $row=mysqli_fetch_array($res);
//$row['hostel'];
   // $sq=mysqli_query($conn,"select * from dept where id='".$row['dept']."'");
//$rs=mysqli_fetch_assoc($sq);

 
     echo '<h2 align="center"> Profile</h2><table class="table table-bordered">';
     ?>
     <center><img   src="images/<?php echo $row['email'];?>/<?php echo $row['image'];?>" width="150" height="100" alt="not found"/></center>
     <?php


  
 echo '       
        <tr>
          <td>Citizen ID</td>
          <Td>'.$row['citizen_id'].'</td>
        </tr>
        <tr>
          <td>SurName</td>
          <Td>'.$row['name'].'</td>
        </tr>
        <tr>
        <td>OtherName</td>
          <Td>'.$row['fname'].'</td>
        </tr>
        <tr>
          <td>Lastname</td>
          <Td>'.$row['lname'].'</td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <Td>'.$row['dob'].'</td>
        </tr>
        <tr>
          <td>State</td>
          <Td>'.$row['state'].'</td>
        </tr>
        <tr>
          <td>Local Govt</td>
          <Td>'.$row['local'].'</td>
        </tr>
        
        <tr>
          <td>Sex</td>
          <Td>'.$row['sex'].'</td>
        </tr>
        <tr>
          <td>E-mail</td>
          <Td>'.$row['email'].'</td>
        </tr>
        <tr>
           
        <tr>
          <td>Address</td>
          <Td>'.$row['addr'].'</td>
        </tr>
         
         

        ';

    // echo $row[$hostel]; 
 // echo "<input type='hidden' class='form-control' name='h[]' value='$hostel'>";
 //$_SESSION['hostel'] = $hostel;
 
      echo "</tr></table>";
      echo ' <br> </form>';        
  }
       else
        {
        echo '<form method="post">';
      echo '<h2>Enter Citizen ID</h2><input type="text" class="form-control" name="citizen"/>';  
 
   echo ' <br><input type="submit" class="btn btn-success" value="SEARCH" name="submit"/></form>';      
        } 
      
    
       } ?>
		  

         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
