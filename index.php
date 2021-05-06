<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" media="screen" href="style.css" />
	<title>Autocomplétion</title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
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
	<main>
		<section id="search-index">
			<section id="search-index-bar">
				<form id="form-search" method="get" action="recherche.php">
					<input type="text" name="search" id="search-bar" placeholder="Tapez le nom d'un pays..." />
					<button><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</section>
		</section>
	</main>
</body>

</html>