<div class="reg_form">
	<div class="form_title"> Sign Up </div>

		<?php echo validation_errors(); ?>
		<?php echo form_open("c_user/v_registration"); ?>

		<p>
			<label for="username">Username:</label>
 			<input type="text" id="username" name="username"  />
 		</p>
		
		<p>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password"  />
		</p>

		<p>
			<label for="con_password">Confirm Password:</label>
			<input type="password" id="con_password" name="con_password" />
		</p>

		<p>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name"  />
		</p>

		<p>
			<label for="email">Your Email:</label>
			<input type="email" id="email" name="email"  />
		</p>

		<p>
			<label for="mobile_no">Mobile No.:</label>
			<input type="text" name="mobile_no" id="mobile_no" /> 
		</p>

		<p>
			<label for="college">College:</label>
			<input type="text" name="college" id="college"  /> <br/>

		<p>

		<p>
			<input type="radio" class="user_type" name="user_student" id="user_student" value="student" />
			<label for="user_student"> Student </label>
			<input type="radio" class="user_type" name="user_employee" id="user_employee" value="employee" / >
			<label for="user_employee"> Employee </label>
		</p>

		<p>
			<input type="text" name="employee_no" id="employee_no" placeholder="Employee No." /> <br/>
			<input type="text" name="student_year" id="student_year" placeholder="20XX" /> - 
			<input type="text" name="student_no" id="student_no" placeholder="XXXXX" /> <br/>	
		</p>

		<p>
		<input type="submit" class="" value="Submit" />
		</p>

 		<?php echo form_close(); ?>
</div><!--<div class="reg_form">-->
	
