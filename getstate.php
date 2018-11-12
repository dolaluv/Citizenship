<?php

	//include('config.php');
	include('connection.php');
	 $action = $_REQUEST['action'];
	//$origin =1;
	 
		$stmt=mysqli_query($conn,"SELECT product_id, product_name FROM local WHERE cat_id ='$action' ORDER BY product_name");
		//$stmt->execute(array(':cid'=>$action));
 
	?>
	 
		<select name="loc" class="form-control"><option>Select Local Govt</option>
	<?php
	//if($stmt){
		
		while($row= mysqli_fetch_array($stmt))
		{
			//extract($row);

	
			?>
			 
			<option value='<?php echo $row['product_name']; ?>' ><?php echo $row['product_name']; ?></option></div> 
			 
			<?php		
		}
		
	 
	?>
	</select>
 