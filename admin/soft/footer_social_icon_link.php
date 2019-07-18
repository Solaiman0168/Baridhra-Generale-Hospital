<?php include 'include/header.php';?>
<?php $table_heading = "Social Icons";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="footer_social_icon_link";       //your table name
        $targetpage = "footer_social_icon_link.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';

    if(isset($_POST['update']))
    {
            $fb_icon_link = trim($_POST['fb_icon_link']);
            $footer_social_icon_link_id = $_POST['footer_social_icon_link_id'];
            $twitter_icon_link = $_POST['twitter_icon_link'];
             $google_icon_link = trim($_POST['google_icon_link']);
            
         

         $sql = "UPDATE $tbl_name SET `fb_icon_link` = '$fb_icon_link' ,`twitter_icon_link` = '$twitter_icon_link' ,`google_icon_link` = '$google_icon_link' , `is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE footer_social_icon_link_id =1 ";
                $result = mysqli_query($con,$sql);
                if($result)
                {
                    $mgs = "Data Update Successfully!";
                    $class = "green_color alert alert-success  alert-dismissable col-md-6";

                }
                else
                {
                    $mgs = "Data Update Fail!";
                    $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
                }
           
    }
?>
  
    <?php
       $sql = "SELECT * FROM $tbl_name WHERE footer_social_icon_link_id = 1";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action="">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="footer_social_icon_link_id" value="<?=$result['footer_social_icon_link_id']?>" />
            </div>
        </div>
        <div class="form-group ">
            <label for="fb_icon_link" class="control-label col-lg-3">Facebook Link </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="fb_icon_link" type="text"  style="height: 60px; width: 400p;" value="<?=$result['fb_icon_link']?>">
               
            </div>
        </div>
        <div class="form-group ">
            <label for="twitter_icon_link" class="control-label col-lg-3">Twitter </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="twitter_icon_link" type="text"  style="height: 60px; width: 400p;" value="<?=$result['twitter_icon_link']?>">
                
            </div>
        </div>
        <div class="form-group ">
            <label for="google_icon_link" class="control-label col-lg-3">Google Link </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="google_icon_link" type="text"  style="height: 60px; width: 400p;" value="<?=$result['google_icon_link']?>">
               
            </div>
        </div>
        
     <div class="form-group">
            <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-lg-5">
              <input type="submit" class="btn btn-primary" name="update" value="Update" />
                
            </div>
        </div>
    </form>
   
  
    <!---main content end---->
                                
<?php include 'include/body-bottom.php';?>
<?php include 'include/footer.php';?>
<script type="text/javascript" src="../js/"></script>