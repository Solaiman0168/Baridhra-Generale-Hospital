<?php include 'header.php' ?>
<?php include 'header_top.php' ?>

<?php include 'menu.php' ?>
<!-- banner -->
<div class="banner">

				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>


   		<?php  
	        $sql = "SELECT * FROM slider WHERE `is_deleted` = 0 ";
	        $result =mysqli_query($con,$sql);
	      
		   ?>

		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">

				<?php  while($row = mysqli_fetch_array($result)): ?>


				<li>
					<div class="banner1" style="background: url(admin/soft/upload/<?=$row['image_url']?>) no-repeat top; background-size: cover;">
						<div class="container">
							<div class="banner-info">
								<h3><?=$row['title_h1']?> <span><?=$row['title_h2']?></span></h3>
								<p><?=$row['title_h3']?></p>
								<a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
							</div>
						</div>
					</div>
				</li> 

			<?php endwhile; ?>

			</ul>
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- content -->
<div class="content">
	<div class="container">
		<div class="col-md-4 content_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<img class="img-responsive" src="images/pic1.jpg" alt=" " />
		</div>
		<div class="col-md-4 content_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
			<div class="welcome">

	<?php
		$sql = "SELECT * FROM `welcome_to_bari` WHERE is_deleted=0";
			$result = mysqli_query($con,$sql);

	?>

				<h3>Welcome To Baridhara General Hospital</h3>
				
				<ul>

					<?php while($row = mysqli_fetch_array($result)):?>
					
					<li><a href="<?=$row['link']?>"><?=$row['title']?></a></li>
					
					<?php endwhile;?>

				</ul>
			</div>
		</div>
		<div id="book" class="col-md-4 content_middle wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
			<h3>Book An Appointment</h3>
			<form action="#" method="post">
				<input type="text" name="Name" value="Name" onfocus="this.value='';" onblur="if(this.value=='') {this.value='Name';}" required="">
				<input type="text" name="Email" value="Email" onfocus="this.value='';" onblur="if(this.value=='') {this.value='Email';}" required="">
				<input class="date" name="19/10/2016" id="datepicker" type="text" value="19/10/2016" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2016';}" required="">
				<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
					<option value="null">Select Department</option>
					<option value="null">Health Care</option> 
					<option value="null">Body Checkup</option>					
					<option value="null">Out Patient</option>
					<option value="null">Surgery</option>											
				</select>
				<input type="submit" value="Book Now">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //content -->
<!-- services -->
<div class="services">
	<div class="container">
		<div class="col-md-4 services_left wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
			<h3>Our Best Services</h3>
			<p class="ser-para" >Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
				sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
			<a href="about.php" class="hvr-outline-out button2">See More About Us</a>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider4").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>




			<div  class="callbacks_container">

		<?php  
	        $sql = "SELECT * FROM testimonials WHERE `is_deleted` = 0 ";
	        $result =mysqli_query($con,$sql);
	      
		   ?>

				<ul class="rslides" id="slider4">

					<?php  while($row = mysqli_fetch_array($result)): ?>

					<li>
						<div class="ser-bottom">
							<h5><?=$row['details']?></h5>
							<p>- <?=$row['title']?></p>
						</div>
					</li>

					<?php endwhile; ?>


					<!--<li>
						<div class="ser-bottom">
							<h5>Voluptas sit aspernatur aut odit aut fugit,sed quia consequuntur magni dolores 
							eos qui ratione voluptatem sequi nesciunt</h5>
							<p>- Thompson</p>
						</div>
					</li>
					<li>
						<div class="ser-bottom">
							<h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
							sed quia consequuntur magni dolores eos qui </h5>
							<p>- Federic</p>
						</div>
					</li>-->
				</ul>
			</div>




			<div class="clearfix"></div>
		</div>


	<?php
		$sql = "SELECT * FROM `our_best_services` WHERE 1";
			$result = mysqli_query($con,$sql);

	?>

		<div class="col-md-8 services_right ">

			<?php while($row = mysqli_fetch_array($result)):?>


			<div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				<h4><?=$row['title1']?></h4>
				<p><?=$row['title2']?></p>
			</div>

<?php endwhile; ?>

		
			<div class="clearfix"></div>
		</div>




		<div class="clearfix"></div>
	</div>
</div>
<!-- //services -->

<!-- capabilities -->
<div class="capacity">
	<div class="container">
		<h3>Capabilities</h3>
		<div class="col-md-3 capabil_grid1 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">


	<?php
       $sql = "SELECT * FROM counter WHERE `counter_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5700' data-delay='.5' data-increment="100"><?=$result['counter_1']?></div>
				<p>Happy Patients</p>	
			</div>
		</div>
		<div class="col-md-3 capabil_grid2 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="5"><?=$result['counter_2']?></div>
				<p>Our Staff</p>	
			</div>
		</div>
		<div class="col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0021' data-delay='.5' data-increment="100"><?=$result['counter_3']?></div>				
				<p>Foundation</p>
			</div>
		</div>
		<div class="col-md-3 capabil_grid4 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2500' data-delay='.5' data-increment="1"><?=$result['counter_4']?></div>
				<p>Successful Operation</p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //capabilities -->
<?php include 'footer.php' ?>

