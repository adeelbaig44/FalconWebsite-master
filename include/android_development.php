
<?php
include './libraries/config.php';
 $GetPageContents = mysqli_query($login_db,"SELECT * FROM im_page_content WHERE page_id='3'") or die("Error with querry");
				if ($row = mysqli_fetch_assoc($GetPageContents))
				{
				$cont_heading    = $row['cont_heading'];
				$page_heading    = $row['page_heading'];
				echo $page_content    = $row['page_content'];
	            $content_image   = $row['content_image'];
				
				
				}
mysqli_close($login_db);

?>