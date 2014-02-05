<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href='<?php echo base_url(); ?>assets/css/notifs.css' rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		
		<div id="menu">
			<ul>
				<li>
					<a href="#" style="padding:10px 0;">
						<img src="<?php echo base_url(); ?>assets/images/images.png" />
						<?php
							$sql=mysql_query("select * from notification");
							$notif_count=mysql_num_rows($sql);
							if($notif_count!=0){
								echo '<span id="mes">'.$notif_count.'</span>';
							}
						?>
					</a>
					<ul class="sub-menu">
						<li class="egg">
							<?php 
								$sql=mysql_query("select * from notification order by notif_id");
								$notif_count=mysql_num_rows($sql);
							?>
							<?php
								$listsql=mysql_query("select * from notification order by notif_id ");
								while($rowsmall=mysql_fetch_array($listsql)){ 
									$n_id=$rowsmall['notif_id'];
									$notif=$rowsmall['notifs'];
							?>
							<div class="notif_ui">
								<div class="notif_text">
									<div  class="notif_actual_text"><?php echo $notif; ?></div>
								</div>
							</div>
							<?php }?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</body>
</html>