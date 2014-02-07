<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8"/>
		<style>
		
			.results{
			
				float: left;
				clear: both;
				height: 150px;
				width: 400px;
				margin: 10px;
			
			}

			.results:hover{
			
				background: #ACD1E9;
			
			}
			
			.results img{
			
				float: left;
			
			}
			
			.results .result_information{
			
				float: left;
			
			}

			.result_window{

				border: 1px solid black;
				height: 400px;
				width: 500px;
				position: fixed;
				left: 400px;
				display: none;

			}
		
		</style>

	</head>

	<body>
	<div id= "container">
		<section id="search_module">
			<?php include "form.php";?>
		</section>
		<br/>
		<section id="view_module">
			<?php include "print_results.php";?>
		</section>

		<section class="navigate_module">
			<?php include "navigator.php";?>
		</section>
	</div>
	</body>

</html>