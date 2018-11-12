 
<style>
.card {
    
    transition: 0.3s;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    width: 60%;
    height: 30%;
    border-radius: 15px;
    background-color:#008000 ;
    color: white;


}

 

.ig {
    border-radius: 5px 5px 0 0; float: right;
}

.con {
    padding: 2px 16px;
    width: 100%;




}
</style>


 
 <div style="width:70%;  border-radius:13%; ">
<div class="card">
  
  <div style="width:"><div class="container con"  >
    <h4 style="text-align: center"><b><?php echo $_SESSION['citizen_id'];?></b></h4><div style="text-align: center; float:right; margin-top: -42px;"> <img class="ig" src="images/logo.jpeg" alt="logo" style="width:60%"></img></div>
    <div style="float:left; margin-top: -42px;">Date Issued <br><?php echo $_SESSION['date'];?><br></div>
    <br></div>

     
     <div> <img src="../admin/images/<?php echo $_SESSION['user'];?>/<?php echo $_SESSION['sign'];?>" alt="Sign" style="width:18%;  height:70px; background-color:white; margin-top:4%; float:left;"></img>&nbsp;&nbsp;&nbsp;<div style="float:left; margin-left:4%; ">Name: <?php echo $_SESSION['name'];?>,<?php echo $_SESSION['fname'];?> <?php echo substr($_SESSION['lname'], 0,1) ;?><br>State:&nbsp; <?php echo $_SESSION['state'];?><br>L.G.A: <?php echo $_SESSION['local'];?><br>Mobile: +234<?php echo $_SESSION['mobile'];?></div><img calss="ig" title="image"  src="../admin/images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="24%"  style="margin-left:8%; height:80px; margin-top:3%;"  alt="not found"/>
 
  </div></div>
</div></div>

</body>
</html> 


