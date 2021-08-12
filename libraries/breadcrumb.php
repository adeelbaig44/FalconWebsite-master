<?php

 $MainID = $_GET['MainID'];
 $BookID = $_GET['BID'];
 $NotesID = $_GET['ID'];

?>

<div class="container">
	<ol class="breadcrumb">
	
		<li><a href="index.php">Home</a></li>
	  
	  <?php
	  include './libraries/config.php';
	  $GetCatSub = mysqli_query($login_db,"SELECT * FROM sm_optional_book_cat WHERE obc_id='$BookID'")or die("Error Category");
	  if ( $row = mysqli_fetch_array($GetCatSub)){
		  
	  $obc_id1      = $row['obc_id'];
	  $obc_name1    = $row['obc_name'];
	  $obc_catid    = $row['obc_catid'];
	  ?>
		
		
		 <?php 
	  $GetCat = mysqli_query($login_db,"SELECT * FROM sm_optional_book_cat WHERE obc_id='$obc_catid'")or die("Error Category");
	  if ( $row = mysqli_fetch_array($GetCat)){
		  
	  $obc_id      = $row['obc_id'];
	  $obc_name    = $row['obc_name'];
	  ?>
	  
		<li><a href="index.php?view=notes_group&MainID=<?php echo $obc_id; ?>"><?php echo $obc_name; ?></a></li>
		<li><a href="index.php?view=notes_group&MainID=<?php echo $obc_id1; ?>"><?php echo $obc_name1; ?></a></li>
		
	  <?php  
		
	  $GetCatgory = mysqli_query($login_db,"SELECT * FROM sm_optional_book WHERE ob_cat_id='$NotesID'")or die("Error Category");
	  while ( $row = mysqli_fetch_array($GetCatgory)){
		  
	  $ob_id      = $row['ob_id'];
	  $ob_book_name    = $row['ob_book_name'];
	 
	  ?>
		<li><?php echo $ob_book_name; ?></li>
		<?php 
	  }
	  }
	  }
        mysqli_close($login_db);
        ?>
	</ol>
	
</div>
