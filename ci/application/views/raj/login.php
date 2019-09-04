<?php $title = "Login" ?>
<?php require('header.php'); ?>
<!--HEADER ENDS HERE-->
	<h1>Welcome</h1>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-sm-4 border">
				<?php echo form_open('index_controller/login'); ?>
					<div class="form-group">
						<label>Username</label>
						<?php
							$data = array (
											'name' => 'user',
											'id' => 'user',
											'class' => 'form-control',
											'placeholder' => 'User Name'
										);
							echo form_input($data);
							echo "<span style='color:red;'>" . form_error('user') . "</span>";
						?>
					</div>
					<div class="form-group">
						<label>Password</label>
						<?php
							$data = array(
											'name' => 'pass',
											'id' => 'pass',
											'class' => 'form-control',
											'placeholder' => 'Password'
										);
							echo form_password($data);
							echo "<span style='color:red;'>" . form_error('pass') . "</span>";
						?>
					</div>
					<center><input type="submit" name="submit" value="submit" class="btn btn-primary"></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>