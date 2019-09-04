<?php $title = "Registration" ?>
<?php require('header.php'); ?>
<!--HEADER ENDS HERE-->
<div class="container">
	<div class="row">
		<div class="col-sm-4 border">
			<h3>Registration</h3>
			<!-- FORM START HERE -->
			<?php echo form_open('index_controller/register'); ?> 
				<div class="form-group">
					<label>Name<span style="color:red;">*</span></label>
					<?php
						$data = array (
										'name' => 'name',
										'id' => 'name',
										'class' => 'form-control',
										'placeholder' => 'Enter your Name',
										'value' => set_value('name'),
										'required' => 'required'
									);
						echo form_input($data);
						echo "<span style='color:red;'>" . form_error('name') . "</span>";
						?>
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<?php
						$data = array(
										'name' => 'mobile',
										'id' => 'mobile',
										'class' => 'form-control',
										'value' => set_value('mobile'),
										'placeholder' => 'Enter Mobile Number'
									);
						echo form_input($data);
					?>
				</div>
				<div class="form-group">
					<label>DOB<span style="color:red;">**</span></label>
					<input type="date" name="date" value="<?php set_value('date'); ?>">
					<?php echo "<span style='color:red;'>" . form_error('date') . "</span>"; ?>
				</div>
				<div class="form-group">
					<label>Email<span style="color:red;">**</span></label>
					<?php
						$data = array(
										'name' => 'email',
										'id' => 'email',
										'class' => 'form-control',
										'placeholder' => 'Enter Email Address',
										'value' => set_value('email'),
										'required' => 'required'
									);
						echo form_input($data);
						echo "<span style='color:red;'>" . form_error('email') . "</span>";
					?>
				</div>
				<div class="form-group">
					<label>Password<span style="color:red;">**</span></label>
					<?php
						$data = array(
										'name' => 'pass',
										'id' => 'pass',
										'class' => 'form-control',
										'placeholder' => 'Enter Password',
										'required' => 'required'
									);
						echo form_password($data);
						echo "<span style='color:red;'>" . form_error('pass') . "</span>";
					?>
				</div>

				<div class="form-group">
					<label>Confirm Password<span style="color:red;">**</span></label>
					<?php
						$data = array(
										'name' => 'cpass',
										'id' => 'cpass',
										'class' => 'form-control',
										'placeholder' => 'Confirm Password',
										'required' => 'required'
									);
						echo form_password($data);
						echo "<span style='color:red;'>" . form_error('cpass') . "</span>";
					?>
				</div>

				<input type="submit" name="submit" class="btn btn-primary" value="Submit">

			</form> <!-- FORM ENDS HERE -->
		</div>
	</div>
</div>
</body>
</html>