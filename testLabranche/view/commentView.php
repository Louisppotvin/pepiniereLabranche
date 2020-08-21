<?php ob_start(); ?>

	<form method='POST' action='index.php?action=submitComment'>
		
		<input type='hidden' name='nom' value='$_SESSION["user"]'>
		<textarea name='texte'>Please leave your comment here.</textarea><br>
		<button name='commentSubmit' type='submit'>Comment</button>
		
	</form>
	
	<?php
		while ($row = $firstQuery->fetch_assoc()){
			echo "<div class = 'comment-box'><p>";
			echo $row['nom']."<br>";
			echo nl2br($row['texte']);
			echo "</p>";
			if(isset($_SESSION['user'])){
				if($_SESSION['user']==$row['nom']){
					echo "
					
					<form class ='delete-form' method='POST' action='index.php?action=deleteComment'>
						<input type='hidden' name='idComment' value='".$row['idComment']."' >
						<button type = 'submit' name = 'commentDelete'>Delete</button>
					</form>
					<form class ='edit-form' method='POST' action='index.php?action=editComment'>
						<input type='hidden' name='idComment' value='".$row['idComment']."' >
						<input type='hidden' name='nom' value='".$row['nom']."' >
						<input type='hidden' name='points' value='".$row['points']."' >
						<input type='hidden' name='texte' value='".$row['texte']."' >
						<button name='commentEdit'>Edit</button>
					</form>";
				}else{
					echo "
					<form class ='subtract-form' method='POST' action='index.php?action=changeLikes'>
						<label>".$row['points']."</label>
						<input type='hidden' name='points' value='".$row['points']."' >
						<input class='subtract-form-info'type='hidden' name='idComment' value='".$row['idComment']."' >
						<input class='subtract-form-info' style='font-size:21px;' type='submit' value='+' name='add'>
						<input class='subtract-form-info'style='font-size:21px;' type='submit' value='-' name='subtract'>
					</form>";
				}
			}
			echo "</div>";
		
		}
	?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>