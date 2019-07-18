<?php include 'include/header.php';?>
<?php $table_heading = "Our Best Services";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
  
<?php
        $tbl_name="our_best_services";       //your table name
        $targetpage = "our_best_services.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';
    if(isset($_GET['delete']))
    {
        $ID = $_GET['delete'];
        $sql = "UPDATE $tbl_name SET `is_deleted` = 1 ,`deleted_by` = '$user_no', `deleted_on` = '$CURR_TIME' WHERE our_best_services_id = $ID";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            $mgs = "Data Delete Successfully!";
            $class = "green_color alert alert-success col-md-6 alert-dismissable";

        }
        else
        {
            $mgs = "Data Delete Fail!";
           $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
        }
    }
    if(isset($_POST['submit']))
    {
            $title1 =$_POST['title1'];
            $title2 =$_POST['title2'];
           
            
            
               $SQL = "SELECT * FROM $tbl_name WHERE `is_deleted` = 0  AND `title1` = '$title1' AND `title2` = '$title2' ";

                $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
                    
                    if($COUNT < 1): 

                         



                   $sql = "INSERT INTO $tbl_name SET `title1` ='$title1' , `title2` = '$title2' , `created_by`='$user_no', `created_on`='$CURR_TIME'";
                            $result = mysqli_query($con,$sql);
                            if($result)
                            {
                                $mgs = "Data Insert Successfully!";
                                $class = "green_color alert alert-success col-md-8 alert-dismissable";

                            }
                            else
                            {
                                $mgs = "Data Insert Fail!";
                                $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
                            }
                        else:
                            $mgs = "Duplicate Entry!";
                            $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
                        endif;
         
    }

    if(isset($_POST['update']))
    {
            $our_best_services_id = $_POST['our_best_services_id'];
            $title1 = trim($_POST['title1']);
            $title2 = trim($_POST['title2']);
            
           
            
            
       $SQL = "SELECT * FROM $tbl_name WHERE `is_deleted` = 0 AND `title1` ='$title1' AND `title2` = '$title2' AND `our_best_services_id` != '$our_best_services_id'";

            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 



               
                  $sql = "UPDATE $tbl_name SET `title1` ='$title1' , `title2` = '$title2' , `is_updated` = 1, `updated_by` = '$user_no' ,`updated_on` = '$CURR_TIME' WHERE `our_best_services_id` = '$our_best_services_id'";
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
        if(isset($_GET['edit'])):
        $id = $_GET['edit'];
        $sql = "SELECT * FROM $tbl_name WHERE `our_best_services_id` = $id ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action="" enctype="multipart/form-data"  >
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-8 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="our_best_services_id" value="<?=$result['our_best_services_id']?>" />
            </div>
        </div>
        
      <div class="form-group ">
            <label for="title1" class="control-label col-lg-2">Title</label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="title1" type="text" value="<?=$result['title1']?>" required />
            </div>
            
        </div>

        <div class="form-group ">
            <label for="title2" class="control-label col-lg-2">Details</label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="title2" type="text" value="<?=$result['title2']?>"  />
            </div>
             
        </div>

        


         <div class="form-group">
            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-xs-offset-3 col-lg-5">
                <input type="submit" class="btn btn-primary" name="update" value="Update" />
                
            </div>
        </div>
    </form>
    
    <?php
        else:
    ?>

    <form class="cmxform form-horizontal " id="signupForm" method="post" action="" enctype="multipart/form-data">
        <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-8 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="latest_news_id" value="<?=$result['latest_news_id']?>" />
            </div>
            
        </div>
       
        <div class="form-group ">
            <label for="title1" class="control-label col-lg-2"> Title </label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="title1" type="text" required />
            </div>
             
        </div>

        
        <div class="form-group ">
            <label for="title2" class="control-label col-lg-2"> Details </label>
            <div class="col-lg-4">
                <input class=" form-control" id="" name="title2" type="text" required />
            </div>
             
        </div>


       
       <div class="form-group">
            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-xs-offset-3 col-lg-5">
                <input type="submit" class="btn btn-primary" name="submit" value="Add" />
                
            </div>
        </div>
    </form>
    
    <?php
        endif;
    
    // How many adjacent pages should be shown on each side?
    $adjacents = 3;
    
    /* 
       First get total number of rows in data table. 
       If you have a WHERE clause in your query, make sure you mirror it here.
    */
    $query = "SELECT COUNT(*) as num FROM $tbl_name WHERE is_deleted = 0";
    $total_pages = mysqli_fetch_array(mysqli_query($con,$query));
    $total_pages = $total_pages['num'];
    
    /* Setup vars for query. */
    $limit = 15; 
    if(isset($_GET['page']))
    {                               //how many items to show per page
        $page = $_GET['page'];
    }
    else
    $page = 1;
    
    if($page) 
        $start = ($page - 1) * $limit;          //first item to display on this page
    else
        $start = 0;                             //if no page var is given, set start to 0
    
    /* Get data. */
    $sql = "SELECT * FROM $tbl_name 
                 
                WHERE $tbl_name.is_deleted = 0       
                LIMIT $start, $limit";
    $result = mysqli_query($con,$sql);
    
    /* Setup page vars for display. */
    if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
    $prev = $page - 1;                          //previous page is page - 1
    $next = $page + 1;                          //next page is page + 1
    $lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
    $lpm1 = $lastpage - 1;                      //last page minus 1
    
    /* 
        Now we apply our rules and draw the pagination object. 
        We're actually saving the code to a variable in case we want to draw it more than once.
    */
    $pagination = "";
    if($lastpage > 1)
    {   
        $pagination .= "<div class=\"pagination\">";
        //previous button
        if ($page > 1) 
            $pagination.= "<a href=\"$targetpage?page=$prev\"><< previous</a>";
        else
            $pagination.= "<span class=\"disabled\"><< previous</span>";    
        
        //pages 
        if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<span class=\"current\">$counter</span>";
                else
                    $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
        {
            //close to beginning; only hide later pages
            if($page < 1 + ($adjacents * 2))        
            {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                }
                $pagination.= "...";
                $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
            }
            //in middle; hide some front and some back
            elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
            {
                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                $pagination.= "...";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                }
                $pagination.= "...";
                $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
            }
            //close to end; only hide early pages
            else
            {
                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                $pagination.= "...";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                }
            }
        }
        
        //next button
        if ($page < $counter - 1) 
            $pagination.= "<a href=\"$targetpage?page=$next\">next >></a>";
        else
            $pagination.= "<span class=\"disabled\">next >></span>";
        $pagination.= "</div>\n";       
    }
?>
    <div style="overflow: auto">
        <table   class="table table-bordered table-hover table-responsive table-condensed table-striped dataTable col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
            <tr>
                <th><center>No</center></th>
                <th><center>Title</center></th>
                <th><center>Details</center></th>
                <th><center>Action</center></th>

          </tr>

        <?php $i=$page*$limit-$limit+1; while($row = mysqli_fetch_array($result)):?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$row['title1']?></td>
                <td><?=$row['title2']?></td>
                
                
                
                <td>
                    <a onclick="return confirm('Are you Sure Want to Edit?');" href="<?=$targetpage.'?edit='.$row['our_best_services_id']?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a onclick="return confirm('Are you Sure Want to Delete?');" href="<?=$targetpage.'?delete='.$row['our_best_services_id']?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        <?php endwhile;?>
        </table>
        </div>

<?=$pagination?>
    
    <!---main content end---->
<?php include 'include/footer.php';?>