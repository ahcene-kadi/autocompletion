<?php
if ($_GET['id'] != '') {
} else {
	header('location: index.php');
}

require_once 'config.php';

$query = 'SELECT * FROM pays WHERE id=' . $_GET['id'];
$data = $bdd->query($query)->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" media="screen" href="style.css" />
	<title><?php echo $data['nom_fr_fr']; ?></title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function() {
			$('#search-bar').autocomplete({
				source: 'resultat.php',
				position: {
					my: "left top",
					at: "left top"
				}
			});
		});
	</script>
</head>

<body>
	<header>
		<?php include("header.php"); ?>
	</header>

	<main>
		<section id="element">
			<section id="element-info">
				<h2><?php echo $data['nom_fr_fr'] ?></h2>
				<div>
					</br>
					<h4>Nom en Anglais : <?php echo $data['nom_en_gb']; ?></h4>
					</br>
					<h4>Code : <?php echo $data['code']; ?></h4>
					</br>
					<h4>Code Alpha-2 : <?php echo $data['alpha2']; ?></h4>
					</br>
					<h4>Code Alpha-3 : <?php echo $data['alpha3']; ?></h4>
					</br>
				</div>
			</section>
		</section>

	</main>
</body>

</html>