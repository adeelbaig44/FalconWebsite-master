<?php
    if(isset($_GET['lang'])){
        $GETLANG = $_GET['lang'];
    }
    $blog_id =$_GET['blog_id'];
    // post request process here
    if($_POST){
        //file properties
           $by               =	$_POST['full_name'];
           $email            =	$_POST['email'];
           $cmt              =	$_POST["cmt"];
           $date             = date("Y-m-d H:i:s");
        //    echo "<script>console.log('Date is: '"+ $date +")</script>";
           
           $insert = mysqli_query($login_db,"INSERT INTO sm_comment (cmt_by,cmt_comment,cmt_email,cmt_date,cmt_post) VALUES ('$by','$cmt','$email','$date','$blog_id')")or die(mysqli_error($login_db));
       
           if($insert){
               echo "<script>console.log('Comment Added successfully')</script>";
           } else {
               echo "<script>console.log('Error adding comment try again.')</script>";
           }
    } 
    include './libraries/config.php';
    $GetData = mysqli_query($login_db,"SELECT * FROM sm_blog where id='$blog_id'")or die("Error Fetching Querry");
    if ($row = mysqli_fetch_array($GetData)){
        if ($GETLANG == 'en'){
            $title = $row['title'];
            $desc = $row['description'];}
        else{
            $title = $row['fr_title'];
            $desc = $row['fr_description'];
        }
        $dateis = date_create($row['publish_date']);
        $pub_date = date_format($dateis,"Y/m/d");
        $blog_image = $row['blog_image'];
        $pub_by = $row['publish_by'];
    }
    mysqli_close($login_db);
?>
<style>
    p{
        font-size:16px;
        color:#55585a;
        word-spacing:3px;
        text-align:left;
    }
    hr{
        height:0px;
        margin:0px !important;
    }
</style>
<img class="responsive" src="_img/background/bg1.png" alt="main_about_bg_image" style="height:200px;object-fit:cover;object-position:bottom">
<!-- <div class="PageHeader" style="margin-bottom:130px">
</div> -->
<div class="SpacingBox"></div>
<div class="container" style="padding:0px 10%;line-height:200%;font-family: open-sans-regular;">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $title; ?></h1>

        <!-- Author -->
        <span class="lead fa fa-edit">
          by <?php echo $pub_by ?>
        </span>

        <hr>

        <!-- Date/Time -->
        <span><?php if($GETLANG == 'en'){ echo "Publish on: ";}else{ echo "Ecrit le: "; } echo $pub_date; ?></span>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded img-responsive" styl="width:100%,overflow:hidden" src="_img/blog/<?php echo $blog_image; ?>" alt="">
        <hr>
        <br/>
        <!-- Post Content -->
        <?php echo $desc; ?>
      </div>
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
    </div>
</div>
<section id="comments" style="font-family: open-sans-regular;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <center><h3>
                    <?php if ($GETLANG == 'en'){echo "Comments";}else{echo "Commentaires";} ?>
                </h3></center>
                <hr style="width:20%"/>
                <?php 
                    $blog_id =$_GET['blog_id'];
                    include './libraries/config.php';
                    $GetData = mysqli_query($login_db,"SELECT * FROM sm_comment where cmt_post='$blog_id' order by cmt_date DESC")or die("Error Fetching Querry");
                    if(mysqli_num_rows($GetData) >0 ){
                    while ($row = mysqli_fetch_assoc($GetData))
                    {
                            $cmt_by = $row['cmt_by'];
                            $cmt_comment = $row['cmt_comment'];
                            $cmt_email = $row['cmt_email'];
                            $cmt_date   = $row['cmt_date'];
                    ?>
                <div class="row" style="padding:5px 20px;box-shadow:1px 1px 1px 1px gray;margin-bottom:10px">
                    <div class="card">
                        <div class="card-header">
                            <img src="https://www.gateshead.church/dowo/wp-content/uploads/2019/09/person-icon.png" class="img-circle img-responsive" style="height:50px;width:50px;float:left;">
                            <p style="padding-top:10px"><?php echo $cmt_by; ?></p>
                            <small><?php echo $cmt_email;?></small>
                        </div>
                        <div class="card-body">
                            <br/>
                            <p>
                                <?php echo $cmt_comment; ?>
                            </p>
                        </div>
                        <hr/>
                        <div class="card-footer">
                            <small><?php echo $cmt_date; ?></small>
                        </div>
                    </div>
                </div>
                <?php }
                    } else{
                        if($GETLANG == 'en'){
                            echo "<center><h4>Be The first to comment.</h4></center>";
                        }else{
                           echo "<center><h4>Soyez le premier à commenter.</h4></center>"; 
                        }
                    }
                    ?>
            </div>
            <div class="col-sm-12 col-md-4">
                <center><h3>
                    <?php if ($GETLANG == 'en'){echo "ADD COMMENTS";}else{echo "Ajouter un commentaire";} ?>
                </h3></center>
                <hr style="width:20%"/>
                <div>
                    <form method="POST" action="index.php?view=blog_detail&blog_id=<?php echo $blog_id ?>">
                        <div class="form-group">
                            <label for="name"><?php if ($GETLANG == 'en'){echo "Full Name";}else{echo "Prenom et Nom";} ?></label>
                            <input type="text" class="form-control" id="name" name="full_name">
                        </div>
                        <div class="form-group">
                            <label for="email"><?php if ($GETLANG == 'en'){echo "Email Address";}else{echo "Adresse e-mail";} ?></label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="cmt"><?php if ($GETLANG == 'en'){echo "Comment";}else{echo "Commentaires";} ?></label>
                            <textarea class="form-control" name="cmt" id="cmt" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php if ($GETLANG == 'en'){echo "Submit";}else{echo "ENVOYER";} ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br/>
