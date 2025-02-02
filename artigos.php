<?php
$title       = "Artigos";
$description = "Conheça nossos Serviços";
$url         = "artigos";
$keywords    = "Artigos, ";

include './include/keywords.php';
include './include/head.php';
?>
</head>
<?php include './include/header.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container py-5">
		<h1 class="display-1 text-white animated slideInDown">Artigos</h1>
	</div>
</div>

<section class="py-5">
	<div class="container px-4 px-lg-5 my-5">

		<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
			<?php foreach ($keyword as $key => $img) {
				$urlkey = clearId($key);
				$href = $urlbase.$urlkey;
				$imgurl = $urlbase."img/artigos/".$img;
				echo "
				<div class='col mb-5'>
					<div class='card h-100'>
						<img class='card-img-top' src='$imgurl' alt='$key'>
						<div class='card-body p-4'>
							<div class='text-center'>
								<h2 class='h5 fw-bolder'>$key</h2>
							</div>
						</div>
						<div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
							<div class='text-center'><a title='$key' class='btn btn-outline-dark mt-auto' href='$href'>Saiba Mais</a></div>
						</div>
					</div>
				</div>
				";
			}
			?>
		</div>

	</div>
</section>

<?php
include './include/footer.php';
?>

</html>