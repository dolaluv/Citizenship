<?php 
$q=mysqli_query($conn,"select * from citizen where status =0 ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Pending Approval !!!</h2>";
}
else
{
?>
<script>
	function AcceptCitizen(id)
	{
		//if(confirm("You want to delete this record ?"))
		//{
		window.location.href="delete_user.php?id="+id;
		//}
	}
</script>
<h2 style="color:#00FFCC">CITIZENS APPROVAL</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Citizen ID</th>
		<th>SurName</th>
		<th>FirstName</th>
		<th>State</th>
		<th>L.G.A</th>
		<th>Sex</th>
		<th>Email</th>
		<th>Address</th>
		<th>Image</th>
		
		<th>Accept</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td><a href='bio.php?qid=$row[citizen_id]'>".$row['citizen_id']."</a></td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['local']."</td>";
echo "<td>".$row['sex']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['addr']."</td>";
 
 ?>
 <td><img   src="images/<?php echo $row['email'];?>/<?php echo $row['image'];?>" width="150" height="80" alt="not found"/></td>
 <Td><a href="javascript:AcceptCitizen('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-ok'></span></a></td>
 
 <?php

echo "</Tr>";
$i++;
}
		 
		
echo "</table>";
 } 
 

 ?>