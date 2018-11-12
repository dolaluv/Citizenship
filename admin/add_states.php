 
<?php 

extract($_POST);
if(isset($add))
{

	if($dept=="")
	{
	$err="<font color='red'>Pls input state</font>";	
	}
	else
	{
		//strtoupper($name);
		$Dept = explode(",", strtoupper($dept));
		//$Dept = explode(",", $dept);


mysqli_query($conn,"INSERT into state(cat_name) values('" . implode("'), ('", $Dept) . "')");

 
		
		$err="<font color='green'>States added  successfully</font>";	
	}
}



?>
<form method="post">
<h2>Input States  seperated with comma</h2>

	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	 <br>

	
	<div class="row">
		<div class="col-sm-4">Enter States</div>
		<div class="col-sm-6">
		<textarea name="dept" class="form-control" ></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	 
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
			<center>
		<input type="submit" value="Add States" name="add" class="btn btn-success"/></center>
		 
		</div>
	</div>
</form>	