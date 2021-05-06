<?php
if ($_GET['search'] != '') {
} else {
	header('location: index.php');
}

require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" media="screen" href="style.css" />
	<title>Mot clé - <?php echo $_GET['search']; ?></title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function() {
			$('#search-bar').autocomplete({
				url: 'resultat.php',
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
		<section id="result-search">
			<?php
			$search = $_GET['search'];
			$search = str_replace(' ', '', $search);
			$query =  $bdd->prepare('SELECT * FROM pays WHERE nom_fr_fr LIKE :search');
			$query->execute(array('search' => $search . '%'));
			$number = $query->rowCount();
			$array = array();

			echo '<h6 class="block-result-search">Nombre de résultats trouvés ', $number, '</h6>';

			while ($data = $query->fetch()) {
				$name = $data['nom_fr_fr'];
				echo '
							<div class="block-result-search">
								<a href="element.php?id=', $data['id'], '">', $name, '</a>
							</div>
						';
			}
			?>
		</section>
	</main>
</body>

</html>