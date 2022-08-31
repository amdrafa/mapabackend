<?php
include("dados.php");
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
		<div class="main_cta">
			<article class="main_cta_content">
				<div class="main_cta_content_spacer">
					<header>
						<h1>As melhores e mais caseiras comida da cidade!</h1>
					</header>
					<p><a href="#" class="btn">Quero entrar em contato</a></p>
				</div>
			</article>
		</div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1 id="titlemarmita">Marmitas feitas com amor</h1>
				<p>Além das marmitas prontas, fazemos também encomendas!</p>
			</header>
			<?php
			foreach ($tutoriais as $key => $value) {
			?>
				<article>
					<a href="pagina2.php?id=<?= $value['id']; ?>"><img src=<?= $value['imagem']; ?>></a>
					<h2><?= $value['titulo']; ?></h2>
					<p><?= substr($value['descricao'], 0, 150); ?>...</p>
				</article>
			<?php
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