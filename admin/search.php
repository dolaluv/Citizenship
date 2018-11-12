<?php 
//$dt="Select * from hostel ";
//$dept = mysqli_query($conn,$dt);
	//  while($det=mysqli_fetch_array($dept))
 //{
	//  $a[]= $det['code'];
//}
 //$a[0];
 //$a[1];
 


if(isset($_POST['submit']))
{
 
 // $_SESSION['hostel'] = $_POST['h'];

 // $hos =  $_SESSION['hostel'];
  $cze=  $_POST['citizen'];
 // echo '<h2 style="color:#00FFCC">Student in Block '.$block.'</h2>';
  //echo '<form method="post">';
   
 

$res=mysqli_query($conn,"SELECT * from citizen where citizen_id= '$cze'  ");
    $row=mysqli_fetch_array($res);
//$row['hostel'];
   // $sq=mysqli_query($conn,"select * from dept where id='".$row['dept']."'");
//$rs=mysqli_fetch_assoc($sq);

 include 'card.php';
     echo '<br><h2 align="center"> Profile</h2><table class="table table-bordered">';
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

 ?>