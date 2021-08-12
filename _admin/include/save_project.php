<?php
include '../libraries/config.php';
require "libraries/loginchecker.php";
									


 //connect to the data base
$pr_id                  =   $_POST['pr_id'];
$pr_name                =	$_POST['pr_name'];
$pr_logo          =	$_FILES["pr_logo"]["tmp_name"];
$pr_main_image          =	$_FILES["pr_main_image"]["tmp_name"];
$pr_sec_image           =	count($_FILES["pr_sec_image"]["tmp_name"]);   
$pr_description         =	$_POST['pr_description'];
$pr_our_part            =	$_POST['pr_our_part'];
$pr_challenges          =	$_POST['pr_challenges'];
$sm_technologies        =	$_POST['sm_technologies'];
$sm_link                = $_POST['sm_link'];
//$pr_res_desc            =	$_POST['pr_res_desc'];
$en_name                =$_POST['en_name'];
$en_description         =$_POST['en_description'];
$en_our_part         =$_POST['en_our_part'];
$en_technologie         =$_POST['en_technologie'];
$en_chalanges         =$_POST['en_chalanges'];

     echo "
     <div class='HomeHeading'>
<div class='container-fluid'>
  <div class='row'>
   <h1><a href='index.php?view=home'><img src='images/back_icon.png' border='0'></a> | Save Page</h1>
  </div>
</div></div>";
		
if ($pr_id)
{
	if ($pr_name&&$pr_description){
	
	if($pr_main_image){
	//get data form main image with extension
	$image = addslashes(file_get_contents($_FILES['pr_main_image']['tmp_name']));
	$image_name = addslashes($_FILES['pr_main_image']['name']);
	$image_size = getimagesize($_FILES['pr_main_image']['tmp_name']);
	$file_tmp = $_FILES['pr_main_image']['tmp_name'];
	
	
	
	
	//give the random name genator
	$randomNumber = rand(0000, 99999); 
	//give the random name image
	$newName = $randomNumber . $image_name;
	
	if($pr_logo){
	    $image_logo = addslashes(file_get_contents($_FILES['pr_logo']['tmp_name']));
        $image_name_logo = addslashes($_FILES['pr_logo']['name']);
        $image_size_logo = getimagesize($_FILES['pr_logo']['tmp_name']);
        $file_tmp_logo = $_FILES['pr_logo']['tmp_name'];
        
        
        
        
        //give the random name genator
        $randomNumber1 = rand(0000, 99999); 
        //give the random name image
        $newNameLogo = $randomNumber1 . $image_name_logo;
        // update query
        $insert = mysqli_query($login_db,"UPDATE sm_projects SET 
    	pr_name='$pr_name',
        en_name='$en_name',
    	pr_description='$pr_description',
        en_description='$en_description',
    	pr_main_image='$newName',
    	pr_our_part='$pr_our_part',
        en_our_part='$en_our_part',
    	pr_challenges='$pr_challenges',
        en_chalanges='$en_chalanges',
    	sm_technologies='$sm_technologies',
        en_technologie='$en_technologie',
    	sm_link='$sm_link',
    	pr_logo='$newNameLogo' 
    	WHERE pr_id='$pr_id'")or die(mysqli_error($login_db));
    	    
    	if (move_uploaded_file($file_tmp_logo, '../_img/products/'.$newNameLogo) && move_uploaded_file($file_tmp, '../_img/products/'.$newName) ){
    	echo "<div class='alert alert-success'><p>Your products Main Image and Logo has been uploaded.</p></div>";
        }	
        else
        {
        	echo "<div class='alert alert-danger'>Please fill all fields, Main Image &  select Logo</div>";
        }
	}
	// if pr_logo not exist not exist
	else {
	    
    //--------------------------------------------------
    //get data form  sec image with extension
        // update query
        $insert = mysqli_query($login_db,"UPDATE sm_projects SET 
    	pr_name='$pr_name',
        en_name='$en_name',
    	pr_description='$pr_description',
        en_description='$en_description',
    	pr_main_image='$newName',
    	pr_our_part='$pr_our_part',
        en_our_part='$en_our_part',
    	pr_challenges='$pr_challenges',
        en_chalanges='$en_chalanges',
    	sm_technologies='$sm_technologies',
        en_technologie='$en_technologie',
    	sm_link='$sm_link',
    	WHERE pr_id='$pr_id'")or die(mysqli_error($login_db));
    	    
    	if (move_uploaded_file($file_tmp, '../_img/products/'.$newName) ){
    	echo "<div class='alert alert-success'><p>Your products Main Image has been uploaded.</p></div>";
        }	
        else
        {
        	echo "<div class='alert alert-danger'>Please fill all fields & Select Main Image</div>";
        }
	}
	}
	//if pr_image not exist
	else{
		// if pr_logo exists and pr_image not
		if($pr_logo){
	    $image_logo = addslashes(file_get_contents($_FILES['pr_logo']['tmp_name']));
        $image_name_logo = addslashes($_FILES['pr_logo']['name']);
        $image_size_logo = getimagesize($_FILES['pr_logo']['tmp_name']);
        $file_tmp_logo = $_FILES['pr_logo']['tmp_name'];
        
        
        
        
        //give the random name genator
        $randomNumber = rand(0000, 99999); 
        //give the random name image
        $newNameLogo = $randomNumber . $image_name_logo;
        // update query
        	$insert = mysqli_query($login_db,"UPDATE sm_projects SET 
    	pr_name='$pr_name',
        en_name='$en_name',
    	pr_description='$pr_description',
        en_description='$en_description',
    	pr_our_part='$pr_our_part',
        en_our_part='$en_our_part',
    	pr_challenges='$pr_challenges',
        en_chalanges='$en_chalanges',
    	sm_technologies='$sm_technologies',
        en_technologie='$en_technologie',
    	sm_link='$sm_link',
    	pr_logo='$newNameLogo' 
    	WHERE pr_id='$pr_id'")or die(mysqli_error($login_db));
    	    
    	if (move_uploaded_file($file_tmp_logo, '../_img/products/'.$newNameLogo) ){
    	echo "<div class='alert alert-success'><p>Your products Logo has been uploaded.</p></div>";
        }	
        else
        {
        	echo "<div class='alert alert-danger'>Please fill all fields &  select Logo</div>";
        }
	}
	// if pr_logo and pr_image not exist 
	else {
	$insert = mysqli_query($login_db,"UPDATE sm_projects SET 
	pr_name='$pr_name',
        en_name='$en_name',
    	pr_description='$pr_description',
        en_description='$en_description',
    	pr_our_part='$pr_our_part',
        en_our_part='$en_our_part',
    	pr_challenges='$pr_challenges',
        en_chalanges='$en_chalanges',
    	sm_technologies='$sm_technologies',
        en_technologie='$en_technologie',
    	sm_link='$sm_link' WHERE pr_id='$pr_id'")or die(mysqli_error($login_db));
	}
	}
	}
    // secondary Images uploading
    //if secondary image exists
    if($pr_sec_image != 0){
    $randomNumber = rand(0000, 99999);
    $lastid = $pr_id;
    $delq= mysqli_query($login_db,"DELETE FROM sm_image WHERE pr_id= '$lastid'")or die(mysqli_error($login_db));
    foreach($_FILES['pr_sec_image']['tmp_name'] as $key=>$val){
    $imageSec = basename($_FILES['pr_sec_image']['tmp_name'][$key]);
	$image_name_sec = addslashes($_FILES['pr_sec_image']['name'][$key]);
	$image_size_sec = getimagesize($_FILES['pr_sec_image']['tmp_name'][$key]);
	$file_tmp_sec = $_FILES['pr_sec_image']['tmp_name'][$key];
	$newNameSec = $randomNumber . $image_name_sec;
    $ins_sec=mysqli_query($login_db,"insert into sm_image (si_image,pr_id) values ('$newNameSec','$lastid')")or die(mysqli_error($login_db));
	// move the image form pc to server with random name
	if (move_uploaded_file($file_tmp_sec, '../_img/products/'.$newNameSec) ){
	echo "<div class='alert alert-success'><p>Your products Details and Secondary Images has been uploaded.</p></div>";
    }
    }
    }
echo "<div class='alert alert-success'><p>Your details has been submitted.<p>";
}else {
    echo "<div class='alert alert-danger'>Error Fetching Try Again</div>";
}
mysqli_close($login_db);


?>
      
			</div>
	
	
<div class="SpacingBox"></div>
<div class="SpacingBox"></div>
<div class="SpacingBox"></div>	