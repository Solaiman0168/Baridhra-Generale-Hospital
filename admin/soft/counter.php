<?php include 'include/header.php';?>
<?php $table_heading = "Capabilities";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="counter";       //your table name
        $targetpage = "counter.php";   //your file name  (the name of this file)
         $user_no = 1;//$_SESSION['user']['USER_NO'];
         $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


     if(isset($_POST['update']))
    {
            $counter_id = $_POST['counter_id'];

            $counter_1 = trim($_POST['counter_1']);
            $counter_2 =  trim($_POST['counter_2']);
            $counter_3 =  trim($_POST['counter_3']);
            $counter_4 =  trim($_POST['counter_4']);
             
             $sql = "UPDATE $tbl_name SET `counter_1` = '$counter_1' ,`counter_2` = '$counter_2' , `counter_3` = '$counter_3' , `counter_4` = '$counter_4' ,`is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE counter_id = 1 ";
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
       $sql = "SELECT * FROM $tbl_name WHERE `counter_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action=""  >
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="counter_id" value="<?=$result['counter_id']?>" />
            </div>
        </div>
        <div class="form-group ">
            <label for="counter_1" class="control-label col-lg-2">Happy Patients</label>
            <div class="col-lg-6">
                <input type="text"  class="form-control" name="counter_1" value="<?=$result['counter_1']?>">
            </div>
                
            
        </div>

         <div class="form-group ">
           <label for="counter_2" class="control-label col-lg-2">Our Staff</label>
            <div class="col-lg-6">
                 <input type="text"  class="form-control" name="counter_2" value="<?=$result['counter_2']?>">

            </div>
        </div>

        <div class="form-group ">
           <label for="counter_3" class="control-label col-lg-2">Foundation</label>
            <div class="col-lg-6">
                 <input type="text" class="form-control" name="counter_3" value="<?=$result['counter_3']?>">

            </div>
        </div>


        <div class="form-group ">
           <label for="counter_4" class="control-label col-lg-2">Successful Operation</label>
            <div class="col-lg-6">
                 <input type="text"  class="form-control" name="counter_4" value="<?=$result['counter_4']?>">

            </div>
        </div>

        
       <div class="form-group">
            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-lg-5">
              <input type="submit" class="btn btn-primary" name="update" value="Update" />
                
            </div>
        </div>
    </form>
                                
<?php include 'include/body-bottom.php';?>
<?php include 'include/footer.php';?>
<script type="text/javascript" src="../js/"></script>