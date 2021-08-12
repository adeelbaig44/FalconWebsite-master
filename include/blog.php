<?php
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    }
?>
<img class="responsive" src="_img/background/bg1.png" alt="main_about_bg_image" style="height:200px;object-fit:cover;object-position:bottom">
<div class="PageHeader" style="margin-top:0px">
	<div class="heading-blog">
        <br/>
	    <?php
        if($GETLANG == 'en'){ 
         echo  "<h1 class=\"text-center\"><strong>Blogs</strong></h1>";
        } else{
         echo  "<h1 class=\"text-center\"><strong>Blogs</strong></h1>";
        }
        ?> 
        <br/>  
	</div>
</div>
<br/>
<style>
    hr{
        margin:15px !important;
    }
</style>
<div class="container" style="min-height:450px">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">
        <!-- <h1 class="my-4">Page Heading-->
        <!--  <small>Secondary Text</small>-->
        <!--</h1>-->
        <!--<div class="SpacingBox"></div>-->
        <!-- getting  data from database-->
        <?php
            include './libraries/config.php';
            $Getblogs = mysqli_query($login_db,"SELECT * FROM sm_blog ORDER By publish_date DESC") or die("Error with querry");
            while ($row = mysqli_fetch_assoc($Getblogs))
            {
            $id			= $row['id'];
            if ($GETLANG == 'en'){
                $title 		= $row['title'];
                $desc 	= substr($row['description'],0,500);
            }else{
                $title 		= $row['fr_title'];
                $desc 	= substr($row['fr_description'],0,500);
            }
            $dateis = date_create($row['publish_date']);
            $pub_date = date_format($dateis,"Y/m/d");
            // $pub_date = $row['publish_date'];
            $pub_by = $row['publish_by'];
            $blog_image = $row['blog_image'];
        ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <!--<h2 class="card-title"><?php echo $title; ?></h2>-->
          
          <div class="card-body">
            <h2 class="card-title"><?php echo $title; ?></h2>
            <row>
              <div class="col-sm-3">
                <img class="card-img-top img-responsive" alt="blog_image" src="_img/blog/<?php echo $blog_image; ?>" style="height:auto;width:auto;overflow:hidden" alt="Card image cap">
              </div>
              <div class="col-sm-9">
                <row><p class="card-text"><?php echo $desc; ?>...</p></row>
                <row>
                    <i class="fa fa-edit"></i>
                    <?php
                    if ($GETLANG == 'en'){
                    echo "Publish on: ";}else{echo "Ecrit le:";} ?> 
                    <?php echo $pub_date; ?>
                    <?php if ($GETLANG == 'en'){echo "by ";}else{echo "par ";} ?>
                    <?php echo $pub_by ?>
                </row>
                <hr/>
              </div>
            </row>
          </div>
          <div class="card-footer">
            <?php
                $end_link="";
                if ($GETLANG == 'en'){ 
                    $end_link = $id."&lang=en"; 
                }else{ 
                    $end_link = $id; 
                } 
            ?>
            <a href="index.php?view=blog_detail&blog_id=<?php echo $end_link ?>" class="btn btn-primary" style="margin-left:10px">
                <i class="fa fa-share-square"></i>
                <?php 
                if ($GETLANG == 'en'){ echo "Read More";}else{ echo "Lire la suite"; }?>
                
            </a>
            <hr/>
          </div>
        </div>
        <?php 
            }
            mysqli_close($login_db);
        ?>
      </div>
      <!-- Sidebar Widgets Column -->
      <!--<div class="col-md-4" style="border: 2px solid gray;height:auto;padding-bottom:20px">-->
            <!-- Categories Widget -->
      <!--  <div class="card my-4">-->
      <!--    <h5 class="card-header" style="border-bottom:2px solid black">Services/Latest Technologies</h5>-->
      <!--    <div class="card-body">-->
      <!--      <div class="row">-->
      <!--        <div class="col-lg-6">-->
      <!--          <ul class="list-unstyled mb-0">-->
      <!--            <li>-->
      <!--              <a href="#">Web Development</a>-->
      <!--            </li>-->
      <!--            <li>-->
      <!--              <a href="#">Mobile Developement</a>-->
      <!--            </li>-->
      <!--            <li>-->
      <!--              <a href="#">Freelance Contract</a>-->
      <!--            </li>-->
      <!--          </ul>-->
      <!--        </div>-->
      <!--        <div class="col-lg-6">-->
      <!--          <ul class="list-unstyled mb-0">-->
      <!--            <li>-->
      <!--              <a href="#">DotNet</a>-->
      <!--            </li>-->
      <!--            <li>-->
      <!--              <a href="#">Python</a>-->
      <!--            </li>-->
      <!--            <li>-->
      <!--              <a href="#">Java/JavaScript</a>-->
      <!--            </li>-->
      <!--          </ul>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <hr/>-->
        <!-- Side Widget -->
      <!--  <div class="card my-4" >-->
      <!--    <h5 class="card-header" style="border-bottom:2px solid black">About Us</h5>-->
      <!--    <div class="card-body">-->
      <!--      Falcon Consulting is a development agency that specializes in consulting, -->
      <!--      application development and consulting in the field of new technologies.-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
    
<div class="SpacingBox"></div>
<div class="SpacingBox"></div>
</div>
</div>