<!DOCTYPE html>
<?php
	
	require "php/submit_comment.php"
	
?>
<html>
	<head>
		<!-- put your header information here - for this example script, Bootstrap 3.x is required for CSS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/gallery_script.js"></script>
		<script>
			$(document).ready(function() {
				$("#linkList").IdGallery({commentsSource:"retrieve_comments.php"});
			});
		</script>
	</head>
	<body>
		<div class='container'>
			<div class="galleryIDPhoto"></div>
			<div id="linkList">
				<!-- 
					Insert a list of <a> elements pointed to your images, e.g.:
					<a href="example1.jpg"></a>
					<a href="example2.gif"></a>
					<a href="example3.png"></a>
				-->
			</div>
			<hr/>
			<form role='form' id="commentsForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="form-group">
					<div class='row'>
						<div class='col-md-3'>
							<input class="form-control" id="image_name" type="hidden" name="image_name" value="" />
							<input class="form-control" type="text" name="comment" />
						</div>
					</div><br/>
					<div class='row'>
						<div class='col-md-12'>
							<button type='submit' class='btn btn-lg btn-primary'>Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>	
	</body>
</html>
