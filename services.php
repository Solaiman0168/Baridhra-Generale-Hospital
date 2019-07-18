<?php include 'header.php' ?>
<?php include 'header_top.php' ?>
<?php include 'menu.php' ?>

	<div class="container">
		<h3 class="tittle">Our Services</h3>

 		<?php  
	        $sql = "SELECT * FROM services WHERE `is_deleted` = 0 ";
	        $result =mysqli_query($con,$sql);
	      
		   ?>       

	      <div class="row service">
	      	<?php  while($row = mysqli_fetch_array($result)): ?>
	      		<div class="col-md-3">
	      			<div class="serv_img">
	      			
	      			<img src="admin/soft/upload/<?=$row['image_url']?>" class="img img-responsive img-thumbnail img-rounded" alt="">
	      			</div>

	      		</div>
	      		<div class="col-md-3">
	      			<h3><?=$row['services_name']?></h3><hr class="hr">
	      			<p><?=$row['short_details']?><a href="<?='services_details.php'.'?view='.$row['services_id']?>">...Read More</a>
	      			</p>
	      		</div>
	      		<?php endwhile; ?>
	      		
	      		<div class="clearfx"></div>
	      	</div>
	
			
	</div>


<?php include 'footer.php' ?>