<!-- contact -->
<div class="contact">
	<div class="container">
		
		<div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h3>Contact Us</h3>
			<div class="strip"></div>
			<ul class="con-icons">

	<?php
        $sql = "SELECT * FROM address WHERE `address_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><?=$result['contact']?></li>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><?=$result['email']?></a></li>
			</ul>
			<ul class="fb_icons">


	<?php
       $sql = "SELECT * FROM footer_social_icon_link WHERE footer_social_icon_link_id = 1";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

				<li class="hvr-rectangle-out"><a class="fb" href="<?=$result['fb_icon_link']?>"></a></li>
				<li class="hvr-rectangle-out"><a class="twit" href="<?=$result['twitter_icon_link']?>"></a></li>
				<li class="hvr-rectangle-out"><a class="goog" href="<?=$result['google_icon_link']?>"></a></li>
			</ul>



        <?php
			$mgs = '';
			$class='';
				if(isset($_POST['post']))
				    {
			        $name = trim($_POST['name']);
		            $email = trim($_POST['email']);
		            
		             $SQL = "SELECT * FROM `newsletter_signup` WHERE `is_deleted` = 0 AND `name` ='$name' AND `email` ='$email' ";
		            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
		            if($COUNT < 1): 
		             
				       $sql = "INSERT INTO `newsletter_signup`( `name`, `email` ) VALUES('$name',' $email' )";
				                $result = mysqli_query($con,$sql);
				                if($result)
				                {
				                    $mgs = "<b>Your Message Have Been Sent Successfully!</b>";
				                    $class = "green_color alert alert-success  alert-dismissable col-md-8";

				                }
				                else
				                {
				                    $mgs = "name Send Fail!";
				                    $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
				                }
				               else:
				                $mgs = "Duplicate Entry!";
				                $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
				            endif;

				            }

		?>




			<h3>Newsletter Sign up</h3>
			<div class="strip"></div>
			<form action="#" method="post">


				<div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
					<div class=" col-md-8 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?>
					</div>
						            
				</div>
				

				<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value="Submit" name="post">
			</form>


		</div>


		<div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">


   <?php
        $sql = "SELECT * FROM address WHERE `address_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


			<h2>Information</h2>
			<div class="strip"></div>
			<p class="para"><?=$result['information']?></p>
			<p class="copy-right">© <?php echo date ('Y'); ?> Baridhara General Hospital. All rights reserved. Design by <a href="http://www.bdsoft.biz/bdsoft/">BDSoft IT Solutions</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->



<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form action="#" method="post">
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" name="Type here" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->



<!-- login -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form action="#" method="post">
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" name="Type here" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>
</html>