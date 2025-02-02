<?php
$title = "Contato";
$description = "Tela de contatos do site";
$url = "";
$keywords = "Contato, ";

include './include/head.php';
?>
</head>

<body>
    <?php include 'include/header.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/include/phpmailer.php'; ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Entre em Contato</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo $urlbase ?>">Home</a></li>
                    <li class="breadcrumb-item text-t active" aria-current="page">Contato</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- contato -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Contatos</h4>
                    <h1 class="display-5 mb-4">Entre em contato conosco!</h1>
                    <p class="mb-4">Estou sempre aberto a novos desafios e oportunidades. Se você tem um projeto que
                        precisa de uma solução criativa, ou quer conversar sobre como podemos fazer algo diferente,
                        estou aqui para ouvir.</p>
                    <p>Não importa o tamanho ou a complexidade da ideia – se é inovadora, é meu tipo de conversa. Envie
                        uma mensagem, me diga o que você tem em mente, e vamos explorar como transformar isso em algo
                        real e funcional.</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Nosso Número</p>
                                    <h3 class="mb-0"><?php echo $unidades[1]["ddd"] . " " . $unidades[1]["telefone"] ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Email de contato</p>
                                    <h3 class="mb-0"><?php echo $emailContato ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control form-nome" name="nome" id="nome"
                                    placeholder="Seu Nome" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="tel" class="form-control form-telefone" name="telefone" id="telefone"
                                    placeholder="Seu Número" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control form-email" name="email" id="email"
                                    placeholder="Seu Email" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control form-mensagem" name="mensagem" id="mensagem" rows="8"
                                    placeholder="Mensagem" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 btn-send" type="submit">Enviar</button>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Carregando...</div>
                            <div class="error-message d-none">Houve um erro, tente novamente mais tarde</div>
                            <div class="sent-message d-none">Sua mensagem foi enviada. Obrigado!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'include/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        $(function () {
            var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, "").length === 11 ? "(00) 00000-0000" : "(00) 0000-00009";
            },
                spOptions = {
                    onKeyPress: function (val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    },
                    placeholder: "(__) ____-____"
                };

            $(".form-telefone").mask(SPMaskBehavior, spOptions);

            $("#contactForm").validate({
                errorClass: "control-label",
                validClass: "control-label",
                rules: {
                    "nome": {
                        required: true
                    },
                    "email": {
                        required: true,
                        email: true
                    },
                    "telefone": {
                        required: true
                    },
                    "mensagem": {
                        required: true
                    }
                },
                submitHandler: function (form) {
                    var dados = $("#contactForm").serialize();
                    $.ajax({
                        type: "POST",
                        url: "./include/phpmailer.php",
                        data: dados,
                        dataType: "json",
                        beforeSend: function () {
                            $(".loading").removeClass("d-none").addClass("d-block");
                            $(".btn-send").html("Aguarde...").attr("disabled", "disabled");
                        },
                        success: function (data) {
                            $(".loading").removeClass("d-block").addClass("d-none");
                            $(".sent-message").removeClass("d-none").addClass("d-block");
                            document.getElementById("contactForm").reset();
                        },
                        error: function (xhr) {
                            $(".loading").removeClass("d-block").addClass("d-none");
                            $(".error-message").removeClass("d-none").addClass("d-block");
                            console.warn(xhr.responseText);
                        },
                        complete: function () {
                            $(".btn-send").html("Enviar").removeAttr("disabled");
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>