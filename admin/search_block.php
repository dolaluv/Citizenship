
 <script src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{   
  // function to get all records from table
  function getAll(){
    
    $.ajax
    ({
      url: 'getproducts.php',
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
      url: 'getproducts.php',
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
//$dt="Select * from hostel ";
//$dept = mysqli_query($conn,$dt);
	//  while($det=mysqli_fetch_array($dept))
 //{
	//  $a[]= $det['code'];
//}
 //$a[0];
  

if(isset($_POST['submit']))
{
 
 // $_SESSION['hostel'] = $_POST['h'];

 // $hos =  $_SESSION['hostel'];
  $state=  $_POST['state'];
  $loc=  $_POST['loc'];
 // echo '<h2 style="color:#00FFCC">Student in Block '.$block.'</h2>';
  //echo '<form method="post">';
   
 

//$res=mysqli_query($conn,"SELECT * from citizen where state= '$state' AND local= '$loc'  ");
    //$row=mysqli_fetch_array($res);
 echo '<table class="table table-bordered">
  <Tr class="success">
    <th>Sr.No</th>
    <th>Citizen ID</th>
    <th>Surname</th>
    <th>FirstName</th>
    <th>State</th>
    <th>Local</th>
     
  </Tr>';
  $s_find=mysqli_query($conn,"SELECT * from state where cat_id='$state'  ");
   $n_state=mysqli_fetch_array($s_find); 
   $state_name =$n_state['cat_name'];

  $f_state=" SELECT * from citizen where state= '$state_name' AND local= '$loc'   ";
$f_loc = mysqli_query($conn,$f_state);
     

//$rs=mysqli_query($conn,"SELECT * from student where hostel= '$hos' AND block='$block' ");
$i=1;
    while($state_loc=mysqli_fetch_array($f_loc)){

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td><a href='bio.php?qid=$state_loc[citizen_id]'>".$state_loc['citizen_id']."</a></td>";
echo "<td>".$state_loc['name']."</td>";
echo "<td>".$state_loc['fname']."</td>";
echo "<td>".$state_loc['state']."</td>";
echo "<td>".$state_loc['local']."</td>";
//echo "<td>".$row['WES']."</td>";
    // echo $row[$hostel]; 
 // echo "<input type='hidden' class='form-control' name='h[]' value='$hostel'>";
 //$_SESSION['hostel'] = $hostel;
$i++;
      } 
    
      echo "</tr></table>";
      echo ' <br>';

  }
 ?>

<form method="post">
        States 
           <select name="state" class="form-control" id="getProducts" required><option selected="selected"><br>Select State</option>
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
           Local Govt</td>
          <div id="display"> </div><br>
        <input type="submit" class="btn btn-success" value="SUBMIT" name="submit"/></form>