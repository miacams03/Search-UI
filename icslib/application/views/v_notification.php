<div class="content">
<?php
	foreach($results as $row){
		echo "<br/>";
		echo $row->notification;
		echo "<br/>";
	}
?>

<p id="trial">If you click on the "Hide" button, I will disappear.</p>
<button id="hide">Hide</button>
<button id="show">Show</button>
</div>