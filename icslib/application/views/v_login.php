<div class="content">
	<?php

	$this->load->helper("form");
	$title = "Login";
	
	echo validation_errors();
	
	echo form_open("c_site/validate");
	echo heading($title, 1);
	
	echo form_label("<p>Username: ", "username");
	$data = array(
		"name" => "username",
		"id" => "username",
		"value" => set_value("username")
	);
	echo form_input($data);
	echo "</p>";
	
	echo form_label("<p>Password: ", "password");
	echo form_password('password');
	echo "</p>";
	
	echo "<p>";
	echo form_submit('login_submit', 'Login');
	echo "</p>";
	
	echo form_close();
	
	?>
</div>