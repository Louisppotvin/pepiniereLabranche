<?php
	date_default_timezone_set('America/Toronto');

?>

<?php ob_start(); ?>
		<?php
			$nom = $_POST['nom'];	
			$points = $_POST['points'];	
			$texte = $_POST['texte'];
			$idComment = $_POST['idComment'];		
			
			echo "
			<form method='POST' action='index.php?action=editTheComment'>
				<input type='hidden' name='nom' value='".$nom."'>
				<input type='hidden' name='idComment' value='".$idComment."'>
				<input type='hidden' name='points' value='".$points."'>
				<textarea name='texte'>".$texte."</textarea><br>
				<button name='commentSubmit' type='submit'>Edit</button>
			</form>";

		?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>