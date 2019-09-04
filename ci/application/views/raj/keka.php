<?php $title = "Keka" ?>
<?php require('header.php'); ?>
<!--HEADER ENDS HERE-->
<h3>Events Dashboard</h3>
<div class="container">
	<div class="row">
		<div class="col-sm-12 border">
			<?php
				foreach($data as $value){
					echo "user - " . $value['user_name'];
				}
			?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6 border">
			<?php
				/*$today = date("d/m");
				echo $today;*/
				echo "<h3>Birthdays</h3>";
				foreach($event as $value){

					echo $value['user_name']. "<br/>" . $value['dob'] . "<br />";
				}
			?>
		</div>
	</div>
</div>

</body>
</html>