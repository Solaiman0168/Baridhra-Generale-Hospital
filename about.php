<?php include 'header.php' ?>
<?php include 'header_top.php' ?>
<?php include 'menu.php' ?>

<div class="about-page">

 <?php
       $sql = "SELECT * FROM about_details WHERE `about_details_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


	<div class="container">
		<h3 class="tittle">About</h3>

            <div class="col-md-6 about_img wow fadeInRight animated" data-wow-delay=".5s">
				<img src="admin/soft/upload/<?=$result['image_url']?>" alt="">
            </div>
			<div class="col-md-6 about_img about_img_left">
				<div class="choose-grid wow fadeInRight animated" data-wow-delay=".5s">
					<h4><?=$result['title1']?></h4>
					<p><?=$result['details1']?></p>
				</div>
				<div class="choose-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4><?=$result['title2']?> </h4>
					<p><?=$result['details2']?></p>
				</div>
            </div>
			<div class="clearfix"></div>
		<p class="para_abt wow fadeInUp animated" data-wow-delay=".5s"><?=$result['details3']?></p>
	</div>
</div>
<!-- testimonials -->
	<div class="testimonials">


		<?php  
	        $sql = "SELECT * FROM testimonials WHERE `is_deleted` = 0 ";
	        $result =mysqli_query($con,$sql);
	      
		   ?>


		<div class="container">
			<h3 class="tittle">Testimonials</h3>

			<div class="testimonials-grids">

				<?php  while($row = mysqli_fetch_array($result)): ?>

				<div class="col-md-6 testimonials-grid animated wow slideInLeft" data-wow-delay=".5s">
					<div class="testimonials-grid1">
						<img src="admin/soft/upload/<?=$row['image_url']?>" alt=" " class="img-responsive" />
						<p><?=$row['title']?></p>
					</div>
					<div class="testimonials-grid2">
						<p><?=$row['details']?></p>
					</div>
				</div>

			<?php endwhile; ?>


				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //testimonials -->

<?php include 'footer.php' ?>

