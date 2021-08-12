
<div class="PageHeader">
	<div class="Headingbg"><h1>Careers</h1></div>

	<div class="container">
	<div class="SpacingBox"></div>
	<div class="row">
		
	<div class="SpacingBox"></div>
<script type="text/javascript" src="_admin/jscripts/tiny_mce/tiny_mce.js"></script>
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

<?php
//        include './libraries/config.php';
//        
//
//	  $GetPageContents = mysqli_query($login_db,"SELECT * FROM im_page_content WHERE page_id='2'") or die("Error with querry");
//				if ($row = mysqli_fetch_assoc($GetPageContents))
//				{
//				$cont_heading    = $row['cont_heading'];
//				$page_heading    = $row['page_heading'];
//				$page_content    = $row['page_content'];
//	            $content_image   = $row['content_image'];
//				
//				
//
//	echo $page_content;
//		}
//        
//        mysqli_close($login_db);
	  
	  ?>
<BR><BR>
<?php 
$_POST['submit'] = false;
if ($_POST['submit']){
$FullName = $_POST['full_name'];
$EMail = $_POST['email'];
$ContactNo = $_POST['contact_no'];
$CVData = $_POST['cv_data'];
if ($FullName&&$EMail&&$ContactNo&&$CVData){
$headers = array(
	'Form: $EMail',
	'Content-Type: text/html'
);
mail("contact@recent.com.pk", "Contact Us - Recent Construction","
<TABLE style='BORDER-RIGHT: #CCCCCC 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #CCCCCC 1px solid; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; BORDER-LEFT: #CCCCCC 1px solid; PADDING-TOP: 0px; BORDER-BOTTOM: #CCCCCC 1px solid'
height=238 cellSpacing='0' cellPadding='0' width='800'>
  <tr>
    <td bgcolor='#EEEEEE'><font color='#FF0000' size='6'>RC > Careers - CV Data</font></td>
  </tr>
  <tr>
    <td height='37'><p>CV Details</p></td>
  </tr>
  <tr>
    <td height='83' bgcolor='#EEEEEE'>Full Name: $FullName<br />
    Contact No. $ContactNo<br />
    E-Mail: $EMail<br /></td>
  </tr>
  <tr>
    <td height='40'>CV Data:<br /><br /> $CVData</td>
  </tr>
  <tr>
    <td height='40' valign='bottom'>This E-Mail Powered by <a href=;http://swismax.com;>Swis MAX Solutions</a></td>
  </tr>
</table>", implode("\r\n", $headers));
}
else {
echo "Please fill required fileds";
}
}
?>'
<div class="col-xs-12 col-md-8">
<form id="form1" name="form1" method="post" action="index.php?view=careers">
  <div>
    <div>
     <label for="full_name">Full Name:</label>
      <input type="text" name="full_name" id="full_name" required>
    </div>
    <div>
     <label for="email">E-Mail:</label>
      <input type="text" name="email" id="email" required>
    </div>
    <div>
      <label for="contact_no">Contact No.</label>
      <input type="text" name="contact_no" id="contact_no" required>
    </div>
    <div>
      <label for="cv_data">CV Data: (Past CV data here)</label>
      <textarea name="cv_data" id="cv_data" required style="height: 500px;width:auto"></textarea>
    </div>
      <br/>
    <div>
      <input type="submit" name="submit" id="submit" value="Ok - Send">
    </div>
  </div>
</form>
</div>

	</div>
	<div class="SpacingBox"></div>

	</div>
	
	
</div>