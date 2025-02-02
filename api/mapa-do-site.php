<?php 
$title 		 = "Mapa do Site";
$description = ""; 
$url         = "mapa-do-site";
$keywords	 = "Mapa do Site, ";

include 'include/keywords.php';
include './include/head.php';
?>
</head>
<body>
	<div class="page">
		<?php
		include 'include/header.php';
		?>

		<section class="section bg-default section-md">
			<div class="container">
				<div class="text-center my-3">
					<h1 class="title-icon justify-content-center"><span class="icon icon-default mercury-icon-paper"></span><span>Mapa do Site</span></h1>
				</div>
				<div class="row">
					<ul class="mapa-do-site">
						<li><a title="Página Inicial" href="<?php echo $urlbase ?>">Home</a></li>
						<li><a title="Serviços" href="<?php echo $urlbase ?>servicos">Serviços</a></li>
						<li>
							<a title="Artigos" href="<?php echo $urlbase ?>artigos">Artigos</a>
							<ul class="mapa-do-site">
								<?php
								foreach ($keyword as $key => $img) {
									$urlkey = clearId($key);
									echo "
									<li><a title='$key' href='$urlkey'>$key</a></li>
									";
								}
								?>
							</ul>
						</li>
						<li><a title="Sobre Nós" href="<?php echo $urlbase ?>sobre-nos">Sobre Nós</a></li>
						<li><a title="Contato" href="<?php echo $urlbase ?>contato">Contato</a></li>
						<li><a title="Mapa do Site" href="<?php echo $urlbase ?>mapa-do-site">Mapa do Site</a></li>
					</ul>
				</div>
			</div>
		</section>

		<?php
		include 'include/footer.php';
		?>
	</div>

</body>
</html>