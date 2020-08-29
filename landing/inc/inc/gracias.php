<!DOCTYPE html>
<?php
$page_configs = array(
    'header-title' => 'Gracias',
    'css' => './assets/css/',
    'scripts' => './assets/js/',
    'img' => './assets/img/es/',
    'img_general' => './assets/img/',
    'meta_description' => 'Pruna Motor - Gracias por contactar con nosotros',
    'lang' => $_GET["lang"]
);

include 'inc/global.php';
?>

<html lang="en">
<head>
    <script>
        var params = new URLSearchParams(window.location.search);
        dataLayer = [];
        dataLayer.push({
            'event': 'pageview',                     
            'pageType': 'thankyou', 
            'carBrand': 'Ford',
            'carModel': 'generic',      
            'carVariant': 'none',      
            'pageVersion': 1,
            'pageLang': params.get('lang')
        });
    </script>
    <?= GTM_HEAD ?>

    <meta charset="UTF-8">
    <title><?= $page_configs['header_title'] ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $page_configs['img_general'] ?>favicon.png" type="image/png">
    <meta name="description" content="<?= $page_configs['meta_description'] ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Oswald|Raleway:500:900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Raleway:500:900&display=swap"></noscript>
    <link rel="stylesheet" href="<?= $page_configs['css'] ?>style.css">

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="<?= $page_configs['scripts'] ?>script.js"></script>
</head>
<body> 
<?= GTM_BODY ?>

<nav class="navbar navbar-light bg-white transition fixed-top ">
    <div class="container">
        <img id="logo" height="100" src="<?= $page_configs['img_general'] ?>logo.png" alt="">
    </div>
</nav>

<div class="container" style="margin-top:130px;">
    <div class="row">
        <div class="col-md-7 mx-auto text-center bg-light p-4">
            <h1 style="font-size: 3vw"><?php
                                if ($page_configs['lang'] == 'es') {
                                    echo "Gracias por contactar con nosotros";
                                }
                                else echo "Gràcies per contactar amb nosaltres";
                                ?></h1>
            <p><?php
                                if ($page_configs['lang'] == 'es') {
                                    echo "En breve un agente atenderá su solicitud";
                                }
                                else echo "En breus un agent atendrà la teva sol·licitud";
                                ?></p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col text-center">
            <button class="btn btn-lg green-box text-white text-uppercase" onclick="javascript: history.go(-2)"><?php
                                if ($page_configs['lang'] == 'es') {
                                    echo "Volver atrás";
                                }
                                else echo "Tornar";
                                ?></button>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark" style="position: absolute;bottom: 0">
    <div class="container p-3 text-white">
        <div class="row">
            <div class="col"><?php
                                if ($page_configs['lang'] == 'es') {
                                    echo "© Todos los derechos reservados.";
                                }
                                else echo "© Tots els drets reservats.";
                                ?>
                 <?= APP_NAME ?>.
            </div>
            <div class="col text-right">
                <a style="color: inherit;" href="<?= LOPD ?>" target="_blank"><?php
                                if ($page_configs['lang'] == 'es') {
                                    echo "Política de privacidad";
                                }
                                else echo "Política de privacitat";
                                ?></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>