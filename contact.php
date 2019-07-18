<?php include 'header.php' ?>
<?php include 'header_top.php' ?>
<?php include 'menu.php' ?>

<div class="map_contact">
	<div class="container">
		
		<h3 class="tittle">Contact</h3>
		<div class="contact-grids">
			

        <?php
			$mgs = '';
			$class='';
				if(isset($_POST['submit']))
				    {
			        $name = trim($_POST['name']);
		            $email = trim($_POST['email']);
		            $message = trim($_POST['message']);
		             $SQL = "SELECT * FROM `contact_us` WHERE `is_deleted` = 0 AND  `message` = '$message' AND `name` ='$name' AND `email` ='$email' ";
		            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
		            if($COUNT < 1): 
		             
				       $sql = "INSERT INTO `contact_us`( `message`, `name`, `email` ) VALUES(' $message','$name',' $email' )";
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



			<div class="col-md-6 contact-grid ">
				<form action="#" method="post">

					<div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
						<div class=" col-md-8 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?>
						</div>
						            
				    </div>


					<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">

					<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">

					<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>

					<input type="submit" value="Send" name="submit" >

				</form>


			</div>

    <?php
        $sql = "SELECT * FROM address WHERE `address_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


			<div class="col-md-6 contact-left-map ">
				<p><?=$result['information']?></p>
				<ul class="contact-list">
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?=$result['location']?></li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com"><?=$result['email']?></a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><?=$result['contact']?></li>
				</ul>
			</div>						
			<div class="clearfix"> </div>
		</div>
		<h3 class="tittle">View On map</h3>

	<?php
        $sql = "SELECT * FROM map WHERE `map_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


		<div class="map">
			<iframe src="<?=$result['map_url']?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<!-- //contact -->
<?php include 'footer.php' ?>

