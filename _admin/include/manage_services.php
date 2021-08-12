<?php
include '../libraries/config.php';
				require "libraries/loginchecker.php";
									
?>
<div class="account_auctionlist_content">
	<div class="back_icon"><table width="100%" border="0">
  <tr class="back_icon_text">
    <td width="46"><a href="index.php?view=home"><img src="images/back_icon.png" border="0"></a></td>
    <td width="20">|</td>
    <td width="98%">Manage Services</td>
  </tr>
</table></div>



<style type="text/css" title="currentStyle">
			@import "css/list_page.css";
			@import "css/list_table.css";
		</style>
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
		</script>
<?php
if(isset($_POST['delete_service'])){
$delete_service = $_POST['delete_service'];
if ($delete_service){

$delete = mysqli_query($login_db,"DELETE FROM sm_services WHERE sr_id='$delete_service'") or die (mysqli_error());
echo "<div class='WebPageBoxSuccess'>DELETE - Item has been deleted.</div>";

}
}


if(isset($_POST['edit_service'])){
if ($_POST['edit_service']){

		$service_id 	= $_POST['service_id'];
		$service_name 	= $_POST['service_name'];
		$service_text 	= $_POST['service_text'];
		
		$content_texts = mysqli_real_escape_string($login_db,$service_text);
		
			if ($service_id){
			
			
			$change = mysqli_query($login_db,"UPDATE sm_services SET sr_name='$service_name', sr_text='$content_texts' WHERE sr_id='$service_id'") or die (mysqli_error());
			echo "<div class='WebPageBoxSuccess'>UPDATE - service has been updated.</div>";
			
			
			}
			
		
		
}
}


?>

<table width="100%" border="0" class="TableColor">
      <tr>
        <td width="2%"><a href="index.php?view=manage_services_new"><img src="images/icon_add_service.png" border="0"></td>
        <td width="97%" align="center" valign="middle">&nbsp;</td>

      </tr>
    </table>
	<BR>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
	
		<tr>
			<th width='10%'>News ID</th>
			<th width='80%'>Type</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php

	
	$GetProducts = mysqli_query($login_db,"SELECT * FROM sm_services") or die("Error with querry");
				while ($row = mysqli_fetch_assoc($GetProducts))
				{
				$sr_id 			= $row['sr_id'];
				$sr_name 		= $row['sr_name'];
				$sr_text 		= $row['sr_text'];

				
			echo "<tr class='Default'>
			<td class='center'>$sr_id</td>
			<td>$sr_name</td>
			<td class='center'><a href='index.php?view=manage_services_edit&ServiceID=$sr_id'><img src='images/edit_admin.png'></a></td>
			
			
			<form id='form1' name='form1' method='post' action='index.php?view=manage_services'>
			<td class='center'><input type='image' src='images/delete_admin.png' id='delete_service' name='delete_service' title='Delete Course' alt='Delete Course' value='$sr_id'></td>
			</form>
		</tr>";

		
	}
        mysqli_close($login_db);
	
	?>
	
	
	</tbody>
	<tfoot>
		<tr>
			<th>News ID</th>
			<th>Type</th>
	
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</tfoot>
</table>






			</div>
	
			