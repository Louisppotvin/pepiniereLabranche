<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="../public/css/style.css" rel="stylesheet" type="text/css">
	<script src="../script.js" defer></script>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


</head>
<body>
<?php require('template.php'); ?>

<div id="con">
	<div class="cont" >
	
	<?php
	while( $row = $result->fetch_array() )
	{
	?>

		<div class="imageDescriptionBox">
			<img class="photoDescription" src="public\images\<?= htmlspecialchars($row ['image']) ;?>">
		</div>
		<div class="description">
			<p class="title"><?php  echo $row ['nomProduits']; ?></p>
			<p class="title prix"><?php  echo $row ['prix']; ?> CAD$</p>
			<?php  echo $row ['description']; ?>
		</div>
	<?php
	}
	$result->free();
	?>
	
	</div>
</div>

<?php require('templatePied.php'); ?>
</body>
</html>