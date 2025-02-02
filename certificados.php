<?php
$title = "Certificados";
$description = "Seção sde fotos do site";
$url = "";
$keywords = "Certificados, ";

include './include/head.php';
?>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Certificados</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $urlbase ?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-t"
                            href="<?php echo $urlbase ?>Certificados">Certificados</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- melhores projetos -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Certificados</h4>
                <h1 class="display-5 mb-4">Conheça um pouco mais sobre minhas habilidades concretas!</h1>
            </div>
            <div class="row g-0 team-items">
                <?php
                for ($i = 1; $i <= 40; $i++) {
                    echo '<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
                    echo '<div class="team-item position-relative">';
                    echo '<div class="position-relative">';
                    echo '<a href="' . $urlbase . 'img/galeria/' . $i . '.jpg" class="col-md-12 col-lg-4 img-fluid py-2" data-toggle="lightbox" data-gallery="photo_gallery">';
                    echo '<img src="' . $urlbase . 'img/galeria/' . $i . '.jpg" alt="img" class="img-fluid">';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include 'include/footer.php';
    ?>
</body>

</html>