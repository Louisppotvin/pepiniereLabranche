
<?php ob_start(); ?>
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
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>