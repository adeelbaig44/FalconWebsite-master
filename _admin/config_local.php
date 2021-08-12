<?php	 //this database for uses login & admin controling.
  $login_db = mysqli_connect("localhost","root","",'website_falconconsult') or die (mysqli_error($login_db));  
    mysqli_set_charset($login_db,"utf8");
?>