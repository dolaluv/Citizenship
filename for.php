<?php
require('connection.php');
//extract($_POST);
if(isset($_POST['search']))
{
//check user alereay exists or not
$_SESSION['matric_no']= $_POST['for'];
$sql=mysqli_query($conn,"SELECT *  from citizen_login  where email='$_SESSION[matric_no]'   ");

$r=mysqli_fetch_array($sql);
if ($r) {
	//mail(to, subject, message)
	mail($r['email'],'Citizen Password',"Your password for citizen card system is: $r[pass]");
	$err = "<font color='red'>Your password has been sent to $r[email] </font>";
}
else
{
$err = "<font color='red'>E-mail does not exist</font>";
}
 

 }
?>

<h2>Forget Password</h2>
<form method="post"  enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your E-mail Account</td>
					<Td><input  type="text"  class="form-control" name="for" required/></td>
				</tr>
				 
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="SUBMIT" name="search"/>
 
				
					</td>
				</tr>
			</table>
		</form>