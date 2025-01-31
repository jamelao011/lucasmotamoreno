<!DOCTYPE html>
<html lang="pt-br">
<?php include './include/parametros.php'; ?>

<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo $urlbase ?>">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="geo.position" content="<?php echo $unidades[1]["latitude_longitude"] ?>">
    <meta name="geo.placename" content="<?php echo $unidades[1]["cidade"] ?>-<?php echo $unidades[1]["uf"] ?>">
    <meta name="geo.region" content="<?php echo $unidades[1]["uf"] ?>-BR">
    <meta name="ICBM" content="<?php echo $unidades[1]["latitude_longitude"] ?>">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="<?php echo $nome_empresa ?>">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?php echo $keywords ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo $urlbase . $url ?>">
    <meta property="og:description" content="<?php echo $description ?>">
    <meta property="og:site_name" content="<?php echo $nome_empresa ?>">
    <meta property="og:image" content="<?php echo $urlbase ?>images/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="200">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?php echo $urlbase . $url ?>">
    <meta name="twitter:title" content="<?php echo $nome_empresa ?>">
    <meta name="twitter:description" content="<?php echo $description ?>">
    <meta name="twitter:image" content="<?php echo $urlbase ?>images/logo.png">
    <link rel="canonical" href="<?php echo $urlbase . $url ?>">
    <link rel="shortcut icon" href="<?php echo $urlbase ?>img/favicon.ico">
    <link href="<?php echo $urlbase ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $urlbase ?>css/style.css" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
