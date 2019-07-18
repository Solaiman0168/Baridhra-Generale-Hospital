<?php include 'include/header.php';?>
<?php $table_heading = "Map";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="map";       //your table name
        $targetpage = "map.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


    if(isset($_POST['update']))
    {
            $map_url = trim($_POST['map_url']);
             
             $map_id = $_POST['map_id'];
         $SQL = "SELECT * FROM $tbl_name WHERE  `map_url` ='$map_url'AND`map_id` != '$map_id'";
            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                   
         $sql = "UPDATE $tbl_name SET `map_url` = '$map_url',`is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE map_id = 1";
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
        $sql = "SELECT * FROM $tbl_name WHERE `map_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action=""  enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="map_id" value="<?=$result['map_id']?>" />
            </div>
        </div>
        <div class="form-group ">
            <label for="map_url" class="control-label col-lg-3">Map URL: </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="map_url" type="text" required  style="height: 60px; width: 400p;" value="<?=$result['map_url']?>">
              
            </div>
        </div>
        
       <div class="form-group">
            <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-lg-5">
              <input type="submit" class="btn btn-primary" name="update" value="Update" />
                
            </div>
        </div>
    </form>
                                
<?php include 'include/body-bottom.php';?>
<?php include 'include/footer.php';?>
<script type="text/javascript" src="../js/"></script>