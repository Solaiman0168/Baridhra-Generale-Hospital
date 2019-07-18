<?php include 'include/header.php';?>
<?php $table_heading = "Address";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="address";       //your table name
        $targetpage = "address.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


    if(isset($_POST['update']))
    {
            $address_id = $_POST['address_id'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $information = trim ($_POST['information']);
            $location = trim ($_POST['location']);
            
      
          $SQL = "SELECT * FROM $tbl_name WHERE  `contact` ='$contact' AND `email` ='$email' AND `information` ='$information' AND `location` ='$location' AND `address_id` != '$address_id'";
            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                   
             $sql = "UPDATE $tbl_name SET `contact` = '$contact' ,`email` = '$email' ,`information` = '$information' ,`location` = '$location' ,`is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE address_id = 1";
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
        $sql = "SELECT * FROM $tbl_name WHERE `address_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action=""  enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="address_id" value="<?=$result['address_id']?>" />
            </div>
        </div>
        <div class="form-group ">
            <label for="contact" class="control-label col-lg-3"> Contact Number </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="contact" type="text" required  value="<?=$result['contact']?>">
                
            </div>
        </div>
        <div class="form-group ">
            <label for="email" class="control-label col-lg-3"> Email </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="email" type="text" value="<?=$result['email']?>">
            </div>
        </div>
        <div class="form-group ">
            <label for="information" class="control-label col-lg-3">Information </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="information"  value="<?=$result['information']?>">
                
            </div>
        </div>

        <div class="form-group ">
            <label for="location" class="control-label col-lg-3">location </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="location" type="text" value="<?=$result['location']?>">
                
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