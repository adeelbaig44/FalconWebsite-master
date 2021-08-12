<?php 
include './libraries/config.php';
	$GETSER = $_GET['ser'];
    if(isset($_GET['lang'])){
        $GETLANG= $_GET['lang'];
    }
	$GETService = mysqli_query($login_db,"SELECT * FROM sm_services WHERE sr_id='$GETSER'") or die("Error with querry");
		if ($row = mysqli_fetch_assoc($GETService))
		{
			$sr_text		 = $row['sr_text'];
			$sr_name		 = $row['sr_name'];
			$sr_url			 = $row['sr_url'];
            $en_sr_text      =$row['en_sr_text'];
            
            if ($GETLANG == 'en') {
                echo $en_sr_text;
            } else{
             echo $sr_text; }  
        }
    mysqli_close($login_db);
?> 
