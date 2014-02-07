<?php 
				
				foreach ($search as $row) {

					echo "<div class='results'>";
						echo "<div class='result_information'>";
							$title = $row->title;
							$publisher = $row->publisher;
							//$author = $row->author;
							echo "<h3>".$title."</h3>";
							echo "<h5>".$publisher."</h5>";
							//echo "<li>".$author."</li>";
							echo "<button class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal'>View</button>";
						echo "</div>";
					echo "</div>";

				}
			 ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">BOOK TITLE</h4>
      </div>
      <div class="modal-body">
        BOOK INFORMATION
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Reserve</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
