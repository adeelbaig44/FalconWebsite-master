<?php
include '../libraries/config.php';
require "libraries/loginchecker.php";
									
?>


<div class="HomeHeading">
<div class="container-fluid">
  <div class="row">

  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
   <h1><a href="index.php?view=home"><img src="images/back_icon.png" border="0"></a> | Manage Faculty</h1>
  </div> 
  
  <div class="TabLinks"><br>
  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
  <a href="index.php?view=add_faculty">Add New Faculty</a>
  </div>
  
  </div>
</div></div>


<?php

if($_POST){
$fc_id = $_POST['fc_id'];
}
if(isset($_POST['delete_faculty'])){
    $del=$_POST['delete_faculty'];
if ($del){

$delete = mysqli_query($login_db,"DELETE FROM sm_faculty WHERE fc_id='$fc_id'") or die (mysqli_error());
echo "<div class='alert alert-success'><p>DELETE - Data has been deleted.</p></div>";

}
}
    
if(isset($_POST['Deactivate'])){
  if ($_POST['Deactivate']){

$Update1 = mysqli_query($login_db,"UPDATE sm_faculty SET fc_end='0' WHERE fc_id='$fc_id'") or die (mysqli_error());
echo "<div class='alert alert-success'><p>Deactivate - Your Member has been deactivated.</p></div>";

}
}
    if(isset($_POST['Activate'])){
  if ($_POST['Activate']){

$Update1 = mysqli_query($login_db,"UPDATE sm_faculty SET fc_end='1' WHERE fc_id='$fc_id'") or die (mysqli_error());
echo "<div class='alert alert-success'><p>Activate - Your Member has been activated.</p></div>";

}
    }

?>
<div class="SpacingBox"></div>
         	  
	 <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
         <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Delete</th>
      <th scope="col">Acitave/Deactivate</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>	
	
	
	<?php
				
$GetData = mysqli_query($login_db,"SELECT * FROM sm_faculty")or die("Error Fetching");
while ($row = mysqli_fetch_array($GetData)){
	
	
$fc_id             =	$row['fc_id'];
$fc_name           =	$row['fc_name'];
$fc_image          =	$row["fc_image"];
$fc_description    =	strip_tags($row['fc_description']);
$fc_end            =	$row['fc_end'];

  $fc_description = substr($fc_description,0,40);
	 					
				?>
					
	<tbody>
    <tr>
      <td><?php echo $fc_id ?></td>
      <td><?php echo $fc_name ?></td>
	  <td><img src="../_img/faculty/<?php echo $fc_image;?>" height="150"></td>
      <td><?php echo $fc_description ?></td>
      <form id='form1' name='form1' method='post'>
	  <td>
		<input type='hidden' id='fc_id' name='fc_id' value='<?php echo $fc_id;?>'>
		<input type='submit' id='btn' name='delete_faculty' value='Delete'>
		</td>
		<td><?php if($fc_end==1){ ?>
		<input type='hidden' id='fc_id' name='fc_id' value='<?php echo $fc_id;?>'>
		<input type='submit' id='btn' name='Deactivate' value='Deactivate'>
		<?php } 
		if($fc_end==0){ ?>
		<input type='hidden' id='fc_id' name='fc_id' value='<?php echo $fc_id;?>'>
		<input type='submit' id='btn' name='Activate' value='Activate'>
		<?php } ?></td>
		<td><br><a href="index.php?view=edit_faculty&FCID=<?php echo $fc_id; ?>" id='btn'>Edit</a></td>
		
		</form>
		</tr>
  </tbody>
				<?php }
            mysqli_close($login_db);
            ?>
				
				</table>
</div></div></div></div></div>
			
			