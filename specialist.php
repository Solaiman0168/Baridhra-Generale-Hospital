<?php include 'header.php' ?>
<?php include 'header_top.php' ?>
<?php include 'menu.php' ?>


			<div class="staff-w3l">

	    


					<div class="container">
						<h3 class="tittle">Our Specialist</h3>


		<?php  
	        $sql = "SELECT * FROM our_specialist WHERE `is_deleted` = 0 ";
	        $result =mysqli_query($con,$sql);
	      
		   ?>

						<div class="staff-grids">

							<?php  while($row = mysqli_fetch_array($result)): ?>

							<div class="col-xs-10 col-md-6 staff-grid">
								<div class="staff-left">
									<img src="admin/soft/upload/<?=$row['image_url']?>" class="img-responsive" alt="/">
								</div>
								<div class="staff-right">
									<h4><?=$row['name']?></h4>
									<ul>
										<p><?=$row['title1']?></p>
										<p><?=$row['title2']?></p>
										<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i><?=$row['time']?></li>
										<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i><?=$row['mobile_no']?></li>
										
									</ul>
									<div class="social-icons">
										<button class="btn btn-primary">Get Appoinment</button>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>


							<?php endwhile; ?>
								
							</div>





						<!--	<div class="staff-grids">
							<div class="col-xs-10 col-md-6 staff-grid">
								<div class="staff-left">
									<img src="images/pic6.jpg" class="img-responsive" alt="/">
								</div>
								<div class="staff-right">
									<h4>Dr. Aliya</h4>
									<ul>
										<p>Heart Specialist</p>
										<p>Ph.D </p>
										<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Fri : 11am-8pm</li>
										<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
										
									</ul>
									<div class="social-icons">
										<button class="btn btn-primary">Get Appoinment</button>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
								<div class="clearfix"></div>
							</div>
							<div class="staff-grids">
							<div class="col-xs-10 col-md-6 staff-grid">
								<div class="staff-left">
									<img src="images/pic5.jpg" class="img-responsive" alt="/">
								</div>
								<div class="staff-right ">
									<h4>Dr.Tusher</h4>
									<ul>
										<p>Heart Specialist</p>
										<p>Ph.D </p>
										<li><i class=" glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Tue : 8am-3pm</li>
										<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
										
									</ul>
									<div class="social-icons">
										<button class="btn btn-primary">Get Appoinment</button>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
								
							</div>
							<div class="staff-grids">
							<div class="col-xs-10 col-md-6 staff-grid">
								<div class="staff-left">
									<img src="images/pic6.jpg" class="img-responsive" alt="/">
								</div>
								<div class="staff-right">
									<h4>Dr. Aliya</h4>
									<ul>
										<p>Heart Specialist</p>
										<p>Ph.D </p>
										<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Fri : 11am-8pm</li>
										<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
										
									</ul>
									<div class="social-icons">
										<button class="btn btn-primary">Get Appoinment</button>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
								<div class="clearfix"></div>
							</div> -->
							
							
						</div>
					</div>
<?php include 'footer.php'; ?>