<?=form_open('site/search?page_number=1')?>
		
		<h1>Search</h1>
		<div id="search">
				<select name="filter">
					<option value="title">Title</option>
					<option value="author">Author</option>
					<option value="publisher">Publisher</option>
					<option value="subject">Subject</option>
				</select>
				<input type="text" name="search_query" id="searchbar"/>
				<img src="<?php echo base_url();?>img/search-icon.png" id="image" value= "submit"/>
		</div>			

		<div class="advanced_search">   
		    <a id="link" data-toggle="collapse" href="#collapseTwo">
		    	<img src= "<?php echo base_url();?>img/advance-search.png"/>
		    </a>
    	</div>


    <div id="collapseTwo" class="panel-collapse collapse">
      <div id="panel-heading">			
				<div id="sort">
					<fieldset><legend>Sort by:</legend>
					<input type="radio" id="radio1" name="sort" value="alphabetical" checked/><label for="radio1">Alphabetical</label><br/>
					<input type="radio" id="radio2" name="sort" value="availability"/><label for="radio2">Availability</label>
					</fieldset>
				</div>

				<div id="checklist">
					<fieldset><legend>Format:</legend>
					<input type="checkbox" id="check1" value="book" name="format" checked/><label for="check1"> Book</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" id="check2" value="sp" name="format"/><label for="check2"> SP</label><br/>
					<input type="checkbox" id="check3" value="thesis" name="format"/><label for="check3"> Thesis</label>&nbsp;
					<input type="checkbox" id="check4" value="journal" name="format"/><label for="check4"> Journal</label>&nbsp;
					</fieldset>
				</div>
      </div>
    </div>
</form>


		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/css/bootstrap.css">
	    <!-- Custom styles for this template -->
    	<link href="<?php echo base_url();?>css/icslib.css" rel="stylesheet">
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://code.jquery.com/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo base_url();?>dist/js/bootstrap.min.js"></script>	    