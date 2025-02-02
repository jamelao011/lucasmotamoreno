<!-- Footer Start -->
<div class="container-fluid bg-navbar text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-2">
        <div class="row g-4 g-md-5">
            <div class="col-lg-3 col-md-6">
                <img class="img-fluid" src="<?php echo $urlbase ?>img/logo.png" alt="logo">
                <p class="mt-3 ml-5 text-dark">Trabalhando com integridade e paixão para entregar soluções que superem
                    expectativas.</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-p mb-4">Habilidades</h3>
                <div class="row">
                    <div>
                        <ul class="list-unstyled mb-0 mb-md-3">
                            <li><a class="btn btn-link" href="<?php echo $urlbase ?>desenvolvimento-web">Desenvolvimento
                                    Web</a>
                            </li>
                            <li><a class="btn btn-link"
                                    href="<?php echo $urlbase ?>adaptabilidade-e-bom-humor">Adaptabilidade
                                    e Bom Humor</a></li>
                            <li><a class="btn btn-link" href="<?php echo $urlbase ?>foco-no-detalhe">Foco no
                                    Detalhe</a></li>
                            <li><a class="btn btn-link" href="<?php echo $urlbase ?>senso-de-urgencia">Senso
                                    de Urgência</a></li>
                            <li><a class="btn btn-link"
                                    href="<?php echo $urlbase ?>desenvoltura-e-dinamismo">Desenvoltura e
                                    Dinamismo</a>
                            </li>
                            <li><a class="btn btn-link" href="<?php echo $urlbase ?>senso-de-urgencia">Senso de
                                    Urgência</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h3 class="text-p mb-4">Links</h3>
                <ul class="list-unstyled">
                    <li><a class="btn btn-link" href="<?php echo $urlbase ?>">Home</a></li>
                    <li><a class="btn btn-link" href="<?php echo $urlbase ?>habilidades">Habilidades</a></li>
                    <li><a class="btn btn-link" href="<?php echo $urlbase ?>sobre-mim">Sobre Mim</a></li>
                    <li><a class="btn btn-link" href="<?php echo $urlbase ?>contato">Contato</a></li>
                    <li><a class="btn btn-link" href="<?php echo $urlbase ?>mapa-do-site">Mapa do Site</a></li>
                    <li><a class="btn btn-link" href="<?php echo $urlbase ?>artigos">Artigos</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3 class="text-p mb-4">Contatos</h3>
                <p class="mb-2"><i class="fa fa-phone-alt text-p me-3"></i><span
                        class="text-dark"><?php echo $unidades[1]["ddd"] . " " . $unidades[1]["telefone"] ?></span>
                </p>
                <p class="mb-2"><i class="fa fa-envelope text-p me-3"></i><span
                        class="text-dark"><?php echo $emailContato ?></span></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-sm-square btn-outline-body btn-outline-body-github me-1"
                        href="<?php echo $unidades[1]["github"] ?>" target="_blank" rel="noopener noreferrer"
                        aria-label="Visite o GitHub"><i class="fab fa-github"></i></a>
                    <a class="btn btn-sm-square btn-outline-body btn-outline-body-whatsapp me-1"
                        href="<?php echo $unidades[1]["link_whatsapp"] ?>" target="_blank" rel="noopener noreferrer"
                        aria-label="Entre em contato via WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-sm-square btn-outline-body btn-outline-body-instagram me-1"
                        href="<?php echo $unidades[1]["instagram"] ?>" target="_blank" rel="noopener noreferrer"
                        aria-label="Visite meu Instagram"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square btn-outline-body btn-outline-body-linkedin me-0"
                        href="<?php echo $unidades[1]["linkedin"] ?>" target="_blank" rel="noopener noreferrer"
                        aria-label="Visite meu Linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <img src="<?php echo $urlbase ?>img/google.png" alt="google logo">
                </div>
                <div class="col-md-6 text-center text-white text-md-end mt-3">
                    Desenvolvido por Lucas Mota Moreno
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<div id="whatsapp">
    <a href="<?php echo $unidades[1]["link_whatsapp"] . '&text=' . urlencode('Olá, vim pelo site ' . $urlbase . $url . ' e gostaria de saber mais sobre seus serviços.'); ?>"
        target="_blank" id="toggle1" class="wtsapp"><i class="fab fa-whatsapp"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>