<?php
include("dados.php");
//var_dump($tutoriais);//utilizei para testar o conteúdo recebido
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<header>
		<nav>
			<span>
				<a href="/BackEndI/Aula03">
					<img id="logoImg" src='./img/logo.png' alt="logo">
				</a>
			</span>
			<ul>
				<li><a href="/BackEndI/Aula03" title="Início" alt="Início">Início</a></li>
				<li><a href="#" title="Conheça a Rita" alt="Conheça a Rita">Conheça a Rita</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>

	<main>

		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Marmitas</h1>
				<p>Confira sua marmita mais de perto!</p>
			</header>
			<?php
			$id = $_GET['id']; //na próxima aula iremos realizar a validação deste valor


			foreach ($tutoriais as $key => $value) {
				if ($value['id'] == $id) {
			?>

					<article>
						<a href="#"><img src=<?= $value['imagem']; ?>></a>
						<h2><?= $value['titulo']; ?></h2>
						<p><?= $value['descricao']; ?></p>
					</article>
					<div id="divpage">
						<h4>Ingredientes</h4>
						<p><?= $value['ingredientes']; ?></p>
					</div>
			<?php
				}
			}
			?>


		</section>



	</main>

	<footer id="footerdiv">

		<nav>

			<li>Navegue no site</li>

			<ul>

				<li><a href="/BackEndI/Aula03">Início</a></li>

				<li><a href="#">Sobre a dona Rita</a></li>

				<li><a href="#">Cardápio</a></li>

				<li><a href="#">Contato</a></li>

			</ul>

		</nav>

		<nav>

			<li>Fique conectado</li>

			<ul>

				<li><a href="#">Email</a></li>

				<li><a href="#">Instagram</a></li>

				<li><a href="#">Youtube</a></li>

				<li><a href="#">Facebook</a></li>

			</ul>

		</nav>



	</footer>
	<div class="signature">Rafael Amaro © 2022 UNICESUMAR </div>
</body>

</html>