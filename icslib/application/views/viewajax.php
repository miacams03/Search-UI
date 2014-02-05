<?php
	include("db.php");
	if(isSet($_POST['msg_id'])){
		$id=$_POST['msg_id'];
		$notif=mysql_query("select * from notification where msg_id_fk='$id' order by notif_id");
		while($r=mysql_fetch_array($notif)){
			$n_id=$r['notif_id'];
			$notif=$r['notifs'];
?>
	<div class="notif_ui" >
		<div class="notif_text">
			<div  class="notif_actual_text"><?php echo $notif; ?></div>
		</div>
	</div>
	<?php } 
	}?>