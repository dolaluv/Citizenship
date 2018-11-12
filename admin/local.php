 
<?php 




extract($_POST);
if(isset($add))
{

	if($dept=="")
	{
	$err="<font color='red'>Pls input department</font>";	
	}
	else
	{
		$Dept = explode(",", strtoupper(substr($dept, 0,1)). strtolower(substr($dept, 1)));
		//$Dept = explode(",", $dept);


mysqli_query($conn,"INSERT into local(product_name,cat_id) values('" . implode("'), ('", $Dept) . "','$state')");

//mysqli_query($conn,"INSERT into local(cat_id) values('" . implode("'), ('", 1) . "')");
	 
		
		$err="<font color='green'>States added  successfully</font>";	
	}
}



?>
<form method="post">
<h2>Input Local Govt</h2>

	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Select State</div>
		<div class="col-sm-6">
		<select name="state" class="form-control" >
			<?php  $q=mysqli_query($conn,"SELECT * from state ORDER BY cat_name ASC  ");
            while($row=mysqli_fetch_assoc($q))
            {
            echo "<option value=$row[cat_id]>$row[cat_name]</option>";   

          }

            ?>

		</select></div>
	</div><br>

	
	<div class="row">
		<div class="col-sm-4">Enter Local Govt</div>
		<div class="col-sm-6">
		<input type="text" name="dept" class="form-control" ></div>
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
		<input type="submit" value="Add  Local Govt" name="add" class="btn btn-success"/></center>
		 
		</div>
	</div>
</form>	