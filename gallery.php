<?php include 'header.php';?>
<?php include 'header_top.php';?>
<?php include 'menu.php';?>
<!-- gallery -->
<div class="gallery">
	<div class="container">
		<h3 class="tittle">Gallery</h3>

		<?php  
	        $sql = "SELECT * FROM galary_details WHERE `is_deleted` = 0 ";
	        $result =mysqli_query($con,$sql);
	      
		   ?>

				<div class="gallery-grids">

					<?php  while($row = mysqli_fetch_array($result)): ?>

					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="admin/soft/upload/<?=$row['image_url']?>" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="admin/soft/upload/<?=$row['image_url']?>" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4><?=$row['title']?></h4>
										<span class="separator"></span>
										<p><?=$row['details']?></p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>


				<?php endwhile; ?>


				


					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //gallery -->
<?php include 'footer.php';?>