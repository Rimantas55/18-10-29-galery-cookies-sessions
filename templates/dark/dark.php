<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="templates/dark/style.css">

	<title>PHP Gallery</title>
</head>
<body>
	<div class="container">
		<div class="row p-5 header mb-3">
			<h1>PHP Gallery</h1>
		</div>
		<div class="row p-2 upload mb-3">
			<form action="index.php" method="post" enctype="multipart/form-data" class="input-group block">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="image" name="image">
						<label class="custom-file-label" for="image">Choose file</label>
					</div>
					<div class="input-group-append">
						<input class="btn btn-outline-secondary" name="submit" type="submit" value="Upload">
					</div>
			</form>
		</div>
		
		<?php if (isset($alert)) { ?>
			<div class="alert alert-success"><?= $alert ?></div>
		<?php } ?> 
		<div class="row p-2 gallery">
			<?php 
			foreach ($images as $image) {
				echo "<div class='col-md-4'>";
				echo "<img class='image' src='images/$image'>";
				echo "</div>";
			} 
			?>
		</div>
	</div>

	<script src="script.js"></script>
</body>
</html>