<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
    </div>
    <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
</div>

<!-- Topbar Start -->
<div class="container-fluid bg-top-navbar p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                <a class="text-light px-2" href="tel:<?php echo $unidades[1]["ddd"] . $unidades[1]["telefone"] ?>"><i
                        class="fa fa-phone-alt text-t me-2"></i><?php echo $unidades[1]["ddd"] . " " . $unidades[1]["telefone"] ?></a>
                <a class="text-light px-2" href="mailto:lucasmotamoreno2015@gmail.com"><i
                        class="fa fa-envelope-open text-t me-2"></i><?php echo $emailContato ?></a>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square btn-outline-body btn-outline-body-github me-1"
                    href="<?php echo $unidades[1]["github"] ?>"><i class="fab fa-github"></i></a>
                <a class="btn btn-sm-square btn-outline-body btn-outline-body-whatsapp me-1"
                    href="<?php echo $unidades[1]["link_whatsapp"] ?>"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-sm-square btn-outline-body btn-outline-body-instagram me-1"
                    href="<?php echo $unidades[1]["instagram"] ?>"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-sm-square btn-outline-body btn-outline-body-linkedin me-0"
                    href="<?php echo $unidades[1]["linkedin"] ?>"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-navbar navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="<?php echo $urlbase ?>" class="navbar-brand ms-4 ms-lg-0">
        <img class="img-fluid" src="<?php echo $urlbase ?>img/logo.png" alt="logo">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?php echo $urlbase ?>" class="nav-item nav-link">Home</a>
            <a href="<?php echo $urlbase ?>sobre-mim" class="nav-item nav-link">Sobre Mim</a>
            <a href="<?php echo $urlbase ?>habilidades" class="nav-item nav-link">habilidades</a>
            <a href="<?php echo $urlbase ?>certificados" class="nav-item nav-link">Certificados</a>
            <a href="<?php echo $urlbase ?>contato" class="nav-item nav-link">Contatos</a>
        </div>
    </div>
</nav>