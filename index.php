<?php
	include_once "config/config.php";
	$post = new Posts();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Título da página</title>
		<meta charset="utf-8">
	</head>
	<body>
		<ul>
			<?php
				$getCat = $post->getAllCategories();
				while($result = $getCat->fetch_object()){
			?>
			<li>
				<a href="#"><?php echo $result->category_title ?></a>
			</li>
			
			<?php } ?>
		</ul>
	</body>
</html>

