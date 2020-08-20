

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="../public/js/script.js" defer></script>
	<link href="../public/css/productStyle.css" rel="stylesheet" type="text/css">



</head>
<body >


<?php require('template.php'); ?>

<br>
<p id="title">Nos produits populaires</p><br>

<div class="container">
	<div class="row">
		<section class="gallery">

			<?php
			while( $row = $result->fetch_array() )
			{
			?>
				<div class="contain" style="width:340px; height: 300px; margin: 15px; ">
				
					<a href="index.php?action=descproduit&amp;id=<?= $row['idProduits'] ?>">
					<div class="text"><?php  echo $row['nomProduits']; ?></div>
					<img alt="picture" style="width:340px; height: 300px; "
					src="public\images\<?= htmlspecialchars($row['image']) ;?>" class="image">
						
					<a>
				</div>
			
			<?php
			}
			$result->free();
			?>
			<br>
			
		</section >
	</div>
</div>
<script src="../public/js/jquery.js"></script>
<script>
$(document).mousemove(function(e) {
    $('.logo').offset({
        left: e.pageX,
        top: e.pageY + 20
    });
});
</script>
<?php require('templatePied.php'); ?>
</body>
</html>