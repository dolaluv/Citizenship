<?php 
$_SESSION['status'] = $users['status'];
if ($_SESSION['status']==1 || $_SESSION['status']==2) 
{
	 
$q=mysqli_query($conn,"SELECT * from notice WHERE grp=1 OR grp=2  ");
}
else {
	$q=mysqli_query($conn,"SELECT * from notice WHERE grp=3 OR grp=1 ");
}
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>
<h2>All Notification</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td><textarea name='dept' class='form-control' >".$row['Description']."</textarea></td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>