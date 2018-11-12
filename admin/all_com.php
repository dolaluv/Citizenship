
<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete all record ?"))
		{
		window.location.href="delete_all_com.php?id="+id;
		}
	}
</script>
<?php 


$q=mysqli_query($conn,"select * from solved  ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Complain</h2>";
}
else
{
?>
<h2>Solved Complains</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Citizen ID</th>
		<th>E-mail</th>
		<th>State</th>
		<th>Local Govt</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		<th>Solved</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['citizen_id']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['local']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td><textarea name='dept' class='form-control' readonly='true' >".$row['Description']."</textarea></td>";
echo "<td>".$row['Date']."</td>";
echo "<td>".$row['s_date']."</td>";

?>

<?php
echo "</Tr>";
$i++;
}
		?>
		
</table><h1><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></h1>
<?php }?>