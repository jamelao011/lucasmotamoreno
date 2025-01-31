<?php
$title = "Sobre Mim";
$description = "Seção de Sobre Mim do site";
$url = "";
$keywords = "Sobre Mim, ";

include './include/head.php';
?>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Sobre Mim</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $urlbase ?>">Home</a></li>
                    <li class="breadcrumb-item text-t active" aria-current="page">Sobre Mim</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- sobre nos -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="<?php echo $urlbase ?>img/empresa1.jpg" alt="foto jovem sorrindo">
                        <img class="img-fluid" src="<?php echo $urlbase ?>img/empresa2.jpg" alt="foto biblioteca">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Sobre Mim</h4>
                    <h1 class="display-5 mb-4">Lucas Mota Moreno</h1>
                    <p>Tenho 20 anos e estou cursando Análise e Desenvolvimento de
                        Sistemas no Centro Universitário Senac Santo Amaro. Sou uma pessoa curiosa e apaixonada por
                        aprender, sempre buscando evoluir tanto profissionalmente quanto pessoalmente. Além do meu
                        interesse em tecnologia, acredito na importância das conexões humanas e no impacto positivo que
                        a troca de experiências pode trazer. Valorizo desafios que me permitem crescer e fazer a
                        diferença no que faço.</p>
                    <p>Minha jornada profissional começou no Burger King, onde trabalhei por 1 ano e 6 meses. Nesse
                        período, desenvolvi habilidades essenciais para o atendimento ao cliente, operando o caixa com
                        precisão, mantendo o ambiente limpo e organizado e garantindo a excelência no serviço. Além
                        disso, destaquei-me por habilidades como bom humor, trabalho em equipe e a
                        capacidade de manter um ambiente acolhedor e produtivo.</p>
                    <p class="mb-4">Hoje, buscando progresso na minha carreira, faço parte da RF Digital, uma empresa de
                        marketing
                        digital especializada em estratégias para posicionamento no Google. Minha atuação vai desde o
                        primeiro contato com o cliente até o desenvolvimento completo dos sites, incluindo identidade
                        visual, tráfego orgânico, configuração de DNS, hospedagem e suporte técnico. Dedico-me a
                        oferecer uma experiência completa e eficaz, contribuindo para o sucesso de cada cliente.
                    </p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary"
                            style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">3</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Anos</h3>
                            <h3>no Mercado </h3>
                            <h3 class="mb-0">de Trabalho</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Porque nos -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Soluções implementadas</h4>
                    <h1 class="display-5 mb-4">Conheça um pouco mais sobre meus resultados obtidos!</h1>
                    <p class="mb-4">Minhas experiências e princípios me permitem entregar soluções criativas e eficazes,
                        sempre alinhadas às necessidades de quem confia no meu trabalho. Escolher-me é optar por
                        compromisso, qualidade e inovação</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="<?php echo $urlbase ?>img/icons/5.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Suporte a mais de 600 clientes ativos</h3>
                                    <p class="mb-0">Prestando suporte a mais de 600 clientes ativos, garantindo soluções
                                        rápidas e eficazes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="<?php echo $urlbase ?>img/icons/4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Mais de 100 sites Desenvolvidos</h3>
                                    <p class="mb-0">Mais de 100 sites desenvolvidos, sempre focando em agregar valor aos
                                        projetos e às pessoas envolvidas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="<?php echo $urlbase ?>img/icons/6.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Há 2 anos lidando com atendimento ao cliente</h3>
                                    <p class="mb-0">Há 2 anos lidando com atendimento ao cliente, sempre buscando
                                        oferecer soluções ágeis e eficazes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="<?php echo $urlbase ?>img/empresa3.jpg"
                            alt="foto jovem na academia">
                        <img class="img-fluid" src="<?php echo $urlbase ?>img/empresa4.jpg"
                            alt="foto jovem olhando horizonte">
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