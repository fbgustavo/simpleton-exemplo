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
		
		<h2>Ola todo mundo</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quos molestias iure non doloribus blanditiis nemo laboriosam dicta inventore, enim ut quis vel natus sequi amet, distinctio officia praesentium corporis?</p>

	</body>
</html>

