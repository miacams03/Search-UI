<!DOCTYPE html>

<!-- ICS Lib Index page AB-4L -->

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	
	<title>ICS Lib</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/Book.ico">

	<!-- CSS Links -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link href='<?php echo base_url(); ?>assets/css/bootstrap.css' rel="stylesheet" type="text/css" />
    <link href='<?php echo base_url(); ?>assets/css/main.css' rel="stylesheet" type="text/css" />
	
</head>
<!--end of head-->

<body>


	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-collapse collapse">
		  <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/ICSLibIcon.png" alt="ICSLib" length = "10" width = "70"></a> <!--If an account us active, redirect to profile instead-->
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
		
		  <ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">UserName</a> <!-- Put echo statement to user here. link to homePage-->
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
        </div> <!--/.navbar-collapse -->
      </div>
    </div>
	
	
	<div class="container">
		
		
		<div class="tabbable" id="tabs-931288">
				<ul class="nav nav-pills">
					<li class="active">
						<a href="#panel-1" data-toggle="tab">User Profile</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Account History</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">News</a>
					</li>
					<li>
						<a href="#panel-4" data-toggle="tab">Search</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
					<!-- User Profile -->	
						<div class="row clearfix">
							<div class="tabbable" id="tabs-779915">
								<div class="col-md-2 column">
									<ul class="nav nav-pills">
										<li class="active">
											<a href="#panel-001" data-toggle="tab"><span class="badge pull-right">2</span>Notifications</a>
										</li>
										<li>
											<a href="#panel-002" data-toggle="tab">Account Details</a>
										</li>
										<li>
											<a href="#panel-003" data-toggle="tab">Account History</a>
										</li>
									</ul>
								</div>
								<div class="col-md-10 column">
									<div class="tab-content">
										<div class="tab-pane active" id="panel-001">
											
											<!-- Notifications-->
											
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h3 class="panel-title">Notifications</h3>
												</div>
												<div class="panel-body">
													Panel content
												</div>
											</div>
											
										</div>
										<div class="tab-pane" id="panel-002">
											
											<!-- Account-->
											
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h3 class="panel-title">Account Details</h3>
												</div>
												<div class="panel-body">
													Panel content
												</div>
											</div>
											
											
										</div>
										<div class="tab-pane" id="panel-003">
											
											<!-- History-->
											
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h3 class="panel-title">Account History</h3>
												</div>
												<div class="panel-body">
													
												<!-- table -->	
													
												<table class="table table-condensed table-hover">
													<thead>
													<tr>
														<th>Log</th>
														<th>Date</th>
														<th>Status</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td>Borrow Book</td>
														<td>01/01/01</td>
														<td>Reserved</td>
													</tr>
													<tr class="success">
														<td>Some Stuff</td>
														<td>02/02/02</td>
														<td>Borrowed</td>						
													</tr>
													<tr class="danger">
														<td>Deadline Stuff</td>
														<td>03/03/03</td>
														<td>Deadline Exceeded</td>
													</tr>
													</tbody>
												</table>
												</div>
											</div>
											
											
										</div>
									</div>
								</div>
							</div>
						</div>
					
						
						
					</div>
					<div class="tab-pane" id="panel-2">
						<p>
							Account History
						</p>
					</div>
					<div class="tab-pane" id="panel-3">
						
						<div class="carousel slide" id="carousel-671212">
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0" data-target="#carousel-671212"></li>
								<li data-slide-to="1" data-target="#carousel-671212"></li>
								<li data-slide-to="2" data-target="#carousel-671212"></li>
							</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="" src="http://lorempixel.com/1600/500/" />
							<div class="carousel-caption">
								<h4>First Image</h4>
							<p>Some Label Here</p>
							</div>
							</div>
							<div class="item">
								<img alt="" src="http://lorempixel.com/1600/500/" />
							<div class="carousel-caption">
							<h4>Second Image</h4>
							<p>Some Label For Image 2</p>
							</div>
							</div>
							<div class="item">
								<img alt="" src="http://lorempixel.com/1600/500/" />
							<div class="carousel-caption">
							<h4>Third Image :)</h4>
							<p>Some Last Labels</p>
							</div>
							</div>
						</div> 
						<a class="left carousel-control" href="#carousel-671212" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-671212" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
						
					</div>
					<div class="tab-pane" id="panel-4">
						
						<div class="row clearfix">
							<div class="col-md-2 column">
							<!-- First div -->
							</div>
						<div class="col-md-8 column">
							<div class="panel-group" id="panel-340522">
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<form action="http://google.com/search" method="GET" id="search-form" role="search">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search Title">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button><!-- search button -->
													<button class="btn btn-default" type="button" data-toggle="collapse" data-parent="#panel-340522" href="#panel-element-122876"><span class="glyphicon glyphicon-plus"></span></button><!-- search button -->
												</span>
											</div><!-- /input-group -->
										</form>
										
									</div>
									<div id="panel-element-122876" class="panel-collapse collapse">
										<div class="panel-body">
											Advanced Options
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-md-2 column">
						<!-- Third div -->
						</div>
					</div>
						
					</div>
				</div>
			</div>
		</div>
		
	</div>
        
	
	
	


	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

	
</body>
<!--end of body-->

</html>
<!--end of v_index-->