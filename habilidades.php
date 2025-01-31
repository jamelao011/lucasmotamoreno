<?php
$title = "Habilidades";
$description = "Seção de Habilidades do site";
$url = "";
$keywords = "Habilidades, ";

include './include/head.php';
?>
</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Habilidades</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $urlbase ?>">Home</a></li>
                    <li class="breadcrumb-item text-t active" aria-current="page">Habilidades</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- diferenciais -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="<?php echo $urlbase ?>img/icons/1.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Foco no Impacto Positivo</h3>
                        <p class="mb-0">Sempre busco agregar valor, tanto para os projetos que executo quanto para as
                            pessoas com quem trabalho.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="<?php echo $urlbase ?>img/icons/2.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Mentalidade de Crescimento</h3>
                        <p class="mb-0">Estou sempre em busca de novos desafios adaptando-me rapidamente a novas
                            situações e superando obstáculos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="<?php echo $urlbase ?>img/icons/3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Proatividade Estratégica</h3>
                        <p class="mb-0">Identifico e antecipo necessidades antes que se tornem urgentes, tomando a
                            iniciativa para agir de forma eficaz.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Servicos -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Minhas Habilidades</h4>
                <h2 class="display-5 mb-4">Conheça uma amostra das minhas habilidades!
                </h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/1.jpg" alt="Desenvolvimento Web">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Desenvolvimento Web</h3>
                            <p class="mb-4"> Criação de sites completos, desde o design até a hospedagem, configuração
                                de domínios e DNS.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/2.jpg"
                            alt="Adaptabilidade e Bom Humor">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Adaptabilidade e Bom Humor</h3>
                            <p class="mb-4">Capacidade de lidar com diferentes situações e pessoas, sempre mantendo uma
                                atitude positiva e proativa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/3.jpg" alt="Foco no Detalhe">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Foco no Detalhe</h3>
                            <p class="mb-4">Atenção minuciosa para garantir que cada projeto tenha alta qualidade.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/4.jpg"
                            alt="Comprometimento e Resiliência">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Comprometimento e Resiliência</h3>
                            <p class="mb-4">Dedicação total para entregar resultados de qualidade, mesmo diante de
                                desafios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/5.jpg"
                            alt="Desenvoltura e Dinamismo">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Desenvoltura e Dinamismo</h3>
                            <p class="mb-4">Agilidade para resolver problemas e se adaptar a imprevistos, garantindo a
                                eficiência no trabalho.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/7.png" alt="Gestão de Tempo">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Gestão de Tempo</h3>
                            <p class="mb-4">Planejamento eficaz para garantir a entrega de projetos dentro do prazo
                                estabelecido.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/8.jpg"
                            alt="Habilidades Interpessoais">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Habilidades Interpessoais</h3>
                            <p class="mb-4">Boa comunicação, empatia e facilidade para lidar com clientes, equipes e
                                colegas de Trabalho.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/9.jpg" alt="Autonomia">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Autonomia</h3>
                            <p class="mb-4">Facilidade para trabalhar de forma independente, mantendo a produtividade e
                                a qualidade.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="<?php echo $urlbase ?>img/servicos/6.jpg" alt="Senso de Urgência">
                        <div class="service-text p-5">
                            <h3 class="mb-3 mt-5">Senso de Urgência</h3>
                            <p class="mb-4">Organização e foco para priorizar tarefas e cumprir prazos sem comprometer a
                                qualidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'include/footer.php';
    ?>

</body>

</html>