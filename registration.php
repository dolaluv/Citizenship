
<script type="text/javascript">
$(document).ready(function()
{   
  // function to get all records from table
  function getAll(){
    
    $.ajax
    ({
      url: 'getstate.php',
      data: 'action=showAll',
      cache: false,
      success: function(r)
      {
        $("#display").html(r);
      }
    });     
  }
  
  getAll();
  // function to get all records from table
  
  
  // code to get all records from table via select box
  $("#getProducts").change(function()
  {       
    var id = $(this).find(":selected").val();

    var dataString = 'action='+ id;
        
    $.ajax
    ({
      url: 'getstate.php',
      data: dataString,
      cache: false,
      success: function(r)
      {
        $("#display").html(r);
      } 
    });
  })
  // code to get all records from table via select box
});
</script>
<?php 
require('connection.php');
extract($_POST);
  
 //$f = substr('string', 1);

if(isset($save))
{
//check user alereay exists or not
//$sql=mysqli_query($conn,"select * from student where matric_no='$mat'");

//$r=mysqli_num_rows($sql);

$c_email=mysqli_query($conn,"select * from citizen_login where email='$email'");

$y_email=mysqli_num_rows($c_email);

if($y_email==true)
{
$err= "<font color='red'>This user already exists  <a href='com.php'> Login</a> </font>";
}
 
else
{
 
if (strlen($pass) < 8) { $err= "<font color='red'>Password is too weak. It must be atleast 8 characters </font>"; }
else { 
if($pass==$cpass)
{

	 

$up="insert into citizen_login(email,pass) values('$email','$pass')";
mysqli_query($conn,$up);}

else {$err= "<font color='red'>Password does not match <a href='com.php'> Login</a> </font>";}

//$name = strtoupper($name);
$a=time();
//$state ="LAGOS";
//$loc ="APAPA";
 $s_find=mysqli_query($conn,"SELECT * from state where cat_id='$state'  ");
   $n_state=mysqli_fetch_array($s_find); 
$state_name =$n_state['cat_name'];
$b = substr($state_name, 0,3);
$c = substr($loc, 0,3);
$d= $a."-".$b."-".$c;
$name = strtoupper($name);
$fname = strtoupper(substr($fname, 0,1)). strtolower(substr($fname, 1));
$lname = strtoupper(substr($fname, 0,1)). strtolower(substr($fname, 1));
$query="insert into citizen(citizen_id,name,fname,lname,dob,mobile,state,local,email,sex) values('$d','$name','$fname','$lname','$dob','$tel','$state_name','$loc','$email','$sex')";
mysqli_query($conn,$query);



//$_SESSION['user'] = $mat;



$err="<font color='blue'>Registration successfull !!</font>";
//header('location:index.php?option=complete');

}
}
}




?>
 
<h2>Citizen Form</h2>
<?php    
 //for ($i=1; $i < 5; $i++) { 

	
//echo $sum;
?>

		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="4" align="center"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Surname</td>
					<td><input  type="name"  class="form-control" name="name" placeholder="surname" required/></td>
					<td>FirstName</td>
					<Td><input  type="name"  class="form-control" name="fname" placeholder="First name" required/></td>
				</tr>
				<tr>
					<td>Lastname</td>
					<td><input  type="name"  class="form-control" name="lname" placeholder="Lastname" required/></td>
					<td>DOB</td>
					<Td><input  type="date"  class="form-control" name="dob" placeholder="Date of Birth" required/></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input  type="email"  class="form-control" name="email" placeholder=" Email" required/></td>
					<td>Phone Number</td>
					<Td><input  type="tel"  class="form-control" name="tel" placeholder=" Phone Number" required/></td>
				</tr>
				<tr>
					<td>State</td>
					<td><select name="state" class="form-control" id="getProducts" ><option value="showAll" selected="selected">Select State</option>
					 <?php
        $stmt =mysqli_query($conn,'SELECT * FROM  state');
        while($row=mysqli_fetch_assoc($stmt))
        {
            extract($row);
            ?>
            <option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
            <?php
        }
        ?>


					</select></td>
					<td>Local Govt</td>
					<Td id="display"> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input  type="password"  class="form-control" name="pass" placeholder="Password" required/></td>
					<td>Confirm Password</td>
					<Td><input  type="password"  class="form-control" name="cpass" placeholder="Confirm Password" required/></td>
				</tr>
				
				 
				
				 
				
				<tr>
					<td>Sex</td>
					<Td><select name="sex"><option value="M">M</option><option value="F">F</option></select></td>
				</tr> 
					 
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="SUBMIT" name="save"/>
 
				
					</td>
				</tr>
			</table>
		</form>
		 
    
	</body>
</html>
