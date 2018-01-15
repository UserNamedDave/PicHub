<!doctype html>

<html>
<?php include 'head.php'; ?>
<body>
<div class="bgimg-2 w3-display-container w3-opacity-min" id="home">
	<div class="w3-display-middle uploadfrom">
            <h2>Upload</h2>
            <form action="postetdata.php" enctype="multipart/form-data" method="post">
              <div class="col s12 input-field">
              	<input id="titel" name="titel" placeholder="Titel" type="text">
              </div>
              <div class="col s12 input-field">
                <textarea class="materialize-textarea" id="description" name="description" placeholder="Description"></textarea>
              </div>
							<div class="input-field col s12">
								<select id="select" name="rolechoose" onchange="selecteditem()">
								<option value="defaultValue">Choose Role</option>
								<option value="all">All</option>
								<option value="specific">Specific User</option>
								<option value="owner">Only Owner</option>
								</select>
							</div>
							<div class="col s12 input-field">
								<label class="specificUser" for="specificUser">Specific User:</label>
								<input class="specificUser" type="text">
							</div>
							<!--<!----> <div  class="col s12 input-field">
									<div class="file-field input-field">
									<div class="btn">
										<span>File</span>
										<input name="MAX_FILE_SIZE" value="30000" />
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" name="file" type="text" placeholder="Upload one or more files">
									</div>
								</div>
							</div> <!---->
								<button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">send</i></button>
            </form>     
        </div>
		</div>
</div>
	<script src="js/scripts.js"></script>
	<script>
		$(document).ready(function() {
    $('select').material_select();
  });
	</script>
</body>
</html>