<?php include 'include/header.php';?>
<?php $table_heading = " About Details ";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
  
<?php
        $tbl_name="about_details";       //your table name
        $targetpage = "about_details.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';
    
   

    if(isset($_POST['update']))
    {
            $about_details_id = $_POST['about_details_id'];
            $title1 = trim($_POST['title1']);
            $details1 = trim($_POST['details1']);
            $title2 = $_POST['title2'];
            $details2 = $_POST['details2'];
            $details3 =trim( $_POST['details3']);
            
           
            
            
       $SQL = "SELECT * FROM $tbl_name WHERE `is_deleted` = 0 AND `title1` ='$title1' AND `details1` = '$details1' AND `title2` = '$title2' AND `details2` = '$details2' AND `details3` = '$details3' AND `about_details_id` != '$about_details_id'";

            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 

                if ($_FILES["image_url"]["error"] > 0) {
                                $image_url = $_POST['image_url'];
                                
                            } else {
                                $image_url = time().$_FILES["image_url"]["name"];
                                move_uploaded_file($_FILES["image_url"]["tmp_name"],"upload/" . $image_url);
                            }



               
                 $sql = "UPDATE $tbl_name SET `title1` ='$title1' , `details1` = '$details1' , `title2` = '$title2' , `details2` = '$details2' , `details3` = '$details3' , `image_url` = '$image_url' , `is_updated` = 1, `updated_by` = '$user_no' ,`updated_on` = '$CURR_TIME' WHERE `about_details_id` = '$about_details_id'";
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
            else:
                $mgs = "Duplicate Entry!";
                $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
            endif;
    }
?>
  
    <?php
     $sql = "SELECT * FROM $tbl_name WHERE `about_details_id` = 1";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

     <form class="cmxform form-horizontal " id="signupForm" method="post" action="" enctype="multipart/form-data"  >
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-8 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="about_details_id" value="<?=$result['about_details_id']?>" />
            </div>
        </div>
        
      <div class="form-group ">
            <label for="title1" class="control-label col-lg-2">Title 1</label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="title1" type="text" value="<?=$result['title1']?>" required />
            </div>
            
        </div>

        <div class="form-group ">
            <label for="details1" class="control-label col-lg-2"> Details 1</label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="details1" type="text" value="<?=$result['details1']?>"  />
            </div>
             
        </div>


        <div class="form-group ">
            <label for="title2" class="control-label col-lg-2"> Title 2 </label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="title2" type="text" value="<?=$result['title2']?>"  />
            </div>
             
        </div>

        <div class="form-group ">
            <label for="details2" class="control-label col-lg-2"> Details 2 </label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="details2" type="text" value="<?=$result['details2']?>"  />
            </div>
             
        </div>


        <div class="form-group ">
            <label for="details3" class="control-label col-lg-2"> Details 3 </label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="details3" type="text" value="<?=$result['details3']?>"  />
            </div>
             
        </div>


        


        <div class="form-group ">
            <label for="image_url" class="control-label col-lg-2">Image</label>
            <div class="col-lg-4">
                <input  id="" name="image_url" type="file" />
                <img src="upload/<?=$result['image_url']?>" height="100" width="100"/> 
            </div>
           <div>
                <input type="hidden" name="image_url" value="<?=$result['image_url']?>" />
            </div>
        </div>
        


         <div class="form-group">
            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-xs-offset-3 col-lg-5">
                <input type="submit" class="btn btn-primary" name="update" value="Update" />
                
            </div>
        </div>
    </form>
    
    

    
    
    
    
    <!---main content end---->
<?php include 'include/body-bottom.php';?>
<?php include 'include/footer.php';?>