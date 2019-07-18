<?php include 'header.php' ?>
<?php include 'header_top.php' ?>
<?php include 'menu.php' ?>


<?php
        if(isset($_GET['view'])){
        $id = $_GET['view'];
        $sql = "SELECT * FROM `services` WHERE services_id = $id";
        $row = mysqli_fetch_array(mysqli_query($con,$sql));

 ?>
	<div class="container">
		<h3 class="tittle"><?=$row['services_name']?></h3>
		<center><img src="admin/soft/upload/<?=$row['image_url']?>" class="img-responsive"></center>
 		<h4 style="text-align: justify; margin: 40px; "><?=$row['services_details']?></h4>
			
	</div>
<?php } ?>


<?php include 'footer.php' ?>