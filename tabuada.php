<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Tools</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css">
</head>
<body>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>TABUADA</h1>
				</div>
				<div class="col-sm-4">
					<a href="index.php">voltar para Home</a>
				</div>
			</div>
		</div>
	</header><hr>
	<form>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p><input class="btn border" type="text" id="valor" name="valor" placeholder="digite um número"></p>
				</div>
				<div class="col-md-6">
					<p><input class="btn" type="submit" value="Calcular" name=""></p>
				</div>
			</div>
		</div>
	</form>
	<div class="container" style="text-align: center; margin-top: 10px;">
		<div class="row">
			<div class="col-md-12">
				<?php echo tabuada(); ?>
			</div>
		</div>
	</div>

	<?php
	
	function tabuada() {

		$valor = isset($_GET['valor']) ? $_GET['valor'] : null;

		for ($i=0; $i <= 10; $i++) {
			if (is_numeric($valor)) {
				$res = $i * $valor;
				echo "$i * $valor = $res".'<br>';
			}
		}
	}

	?>

</body>
</html>