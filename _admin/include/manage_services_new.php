<?php
include "../libraries/config.php";
				require "libraries/loginchecker.php";
									
?>
	<div class="account_auctionlist_content">
	<div class="back_icon"><table width="300" border="0">
  <tr class="back_icon_text">
    <td width="46"><a href="index.php?view=manage_services"><img src="images/back_icon.png" border="0"></a></td>
    <td width="20">|</td>
    <td width="212">Add Service</td>
  </tr>
</table></div>

<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		// using false to ensure that the default browser settings are used for best Accessibility
		// ACCESSIBILITY SETTINGS
		content_css : false,
		// Use browser preferred colors for dialogs.
		browser_preferred_colors : true,
		detect_highcontrast : true,

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<div class="wrapper">
<?php

//PHP GuestBook using mysqli databae

 //connect to the data base
		

 if ($_POST)
{
$service_name = $_POST['service_name'];
$service_text = $_POST['service_text'];
$service_url = $_POST['service_url'];
$service_image = $_POST['service_image'];
$service_desc = $_POST['service_desc'];

    $image = addslashes(file_get_contents($_FILES['service_image']['tmp_name']));
	$image_name = addslashes($_FILES['service_image']['name']);
	$image_size = getimagesize($_FILES['service_image']['tmp_name']);
	$file_tmp = $_FILES['service_image']['tmp_name'];
    $randomNumber = rand(0000, 99999); 
	//give the random name image
	$newName = $randomNumber . $image_name;

if ($service_name&&$service_text)
{
	$content_texts = mysqli_real_escape_string($login_db,$service_text);
 
  //adds feeds
  $querypost = mysqli_query($login_db,"INSERT INTO sm_services (sr_name,sr_text, sr_url,sr_image,sr_desc) VALUES ('$service_name','$content_texts','$service_url', '$newName','$service_desc')") or die(mysqli_error());
    $lastid = mysqli_insert_id($login_db);
    if (move_uploaded_file($file_tmp, '../_img/services/resized/'.$newName) ){
				include "../_img/services/resized/imageinc.php";
				create_thumbnail('../_img/services/resized/'.$newName, '../_img/services/'.$newName, 400, 600);
				unlink ('../_img/services/resized/'.$newName);
	echo "<div class='WebPageBoxStepTwo'><center>Services has been uploaded</div>";}
    if (move_uploaded_file($file_tmp, '../_img/services/'.$newName) ){
	echo "<div class='alert alert-success'><p>Your Service image has been uploaded.</p></div>";
    }
    else{
        echo "<div class='alert alert-danger'><p>Your Service Image has not been uploaded.</p></div>";
    }
  echo "<span class='index_heading'>service added successfully. </span>";

}
 else
     echo"<table width='600' border='0'>
  <tr>
    <td width='97' class='details'><font color='#ff0000'>Error</td>
    <td width='487' class='details' bgcolor='#DDD' ><font color='#ff0000'>Please fill out all fields!</span></td>
  </tr>
</table>";
}
 
 
 
mysqli_close($login_db);
?>
<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?view=manage_services">

<input type="hidden" name="service_id" id="service_id" />
  <table width="100%" border="0">
    <tr>
      <td width="16%"><label for="service_name">Service Name:</label></td>
      <td width="84%"><input type="text" name="service_name" id="service_name" /></td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td colspan="2"><label for="service_text">Text of Page</label>
            <textarea name="service_text" id="service_text" cols="60"  style="width: 950px; height: 500px;"></textarea></td>
    </tr>
    <tr>
      <td width="16%"><label for="service_name">Service URL:</label></td>
      <td width="84%"><input type="text" name="service_url" id="service_url" /></td>
    </tr>
    <tr>
      <td width="16%"><label for="service_name">Service Image:</label></td>
      <td width="84%"><input type="file" name="service_image" id="service_image" /></td>
    </tr>
    <tr>
      <td colspan="2"><label for="service_text">Service Description</label>
      <textarea name="service_desc" id="service_desc" cols="60" style="width: 950px; height: 500px;"></textarea></td>
    </tr>
      <tr>
          <td>
      <input type="submit" name="add_service" id="add_service" value="Save Service" /></td>
      </tr>
  </table>
        </form>
			</div></div>
	
			