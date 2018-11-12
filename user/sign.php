<?php 
 if (empty($_SESSION['image'])) {

extract($_POST);
if(isset($update))
{
	 
  $imageName=$_FILES['img']['name'];

    
		$imgSize = $_FILES['img']['size'];

//$imageName=$_FILES['img']['name'];
//echo $img; 
if($imgSize < 50000)	
{
$sql=mysqli_query($conn,"select * from citizen where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);
if (empty($res['sign'])){

if (empty($res['image'])) {$err="<font color='blue'>Pls update your profile pic first</font>";}
else {
//if (empty($res['']))
$query="update citizen set sign='$imageName' where email ='".$user."'";
mysqli_query($conn,$query);

//mkdir("../admin/images/");


$sign = move_uploaded_file($_FILES['img']['tmp_name'],"../admin/images/$user/".$_FILES['img']['name']);

//if ($sign) {
	

$err="<font color='blue'>Signature updated successfully !!</font>";}
//else {$err="<font color='blue'>Pls update your profile pic first</font>";}
//}
//}
//else
//{

 }
else  {$err="<font color='red'>Picture already exist</font>";}
}
 
 else { $err="<font color='red'>Image must be less than 50kb</font>"; }

}



?>
<h2 align="center">Upload Your Signature</h2>

		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2" style="text-align:center"><?php if(isset($err)) {echo @$err;}  else {echo "You must have uploaded your profile pic before your sign ";} ?></Td>
	</Tr>
				
				<tr>
					<td>Choose Your pic</td>
					<Td><input class="form-control" type="file" name="img" required/></td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Submit Sign" name="update"/>
				
					</td>
				</tr>
			</table>
		</form>


<?php
}
		else { header('Location:index.php'); }
		?>
	
 