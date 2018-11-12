<?php 

$res=mysqli_query($conn,"SELECT * from citizen where email= '$_SESSION[email]'  ");
    $row=mysqli_fetch_array($res);
//$row['hostel'];
   // $sq=mysqli_query($conn,"select * from dept where id='".$row['dept']."'");
//$rs=mysqli_fetch_assoc($sq);

 
     echo '<h2 align="center"> Profile</h2><table class="table table-bordered">';
     ?>
     <center><img   src="../admin/images/<?php echo $row['email'];?>/<?php echo $row['image'];?>" width="150" height="100" alt="not found"/></center>
     <?php

//<?php if($res['status']==0){ echo "";}  else{echo $res['citizen_id'];}  
  
 echo '       
        <tr>
          <td>Citizen ID</td>
          <Td>';
         if($row['status']==0){ echo "";}  else{echo $row['citizen_id'];}
          echo '    </td>
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
  
 ?>