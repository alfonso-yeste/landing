<!DOCTYPE html>
<html lang="es">
<head>
    <script>
        dataLayer = [];
        dataLayer.push({
            'event': 'pageview',                     
            'pageType': 'landing', 
            'carBrand': 'Ford',
            'carModel': 'generic',      
            'carVariant': 'none',      
            'pageVersion': 1,
            'pageLang': '<?= $page_configs['lang'] ?>'
        });
    </script>
    <?= GTM_HEAD ?>

    <meta charset="UTF-8">
    <title><?= $page_configs['header_title'] ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $page_configs['img'] ?>favicon.ico">
    <meta name="description" content="<?= $page_configs['meta_description'] ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $page_configs['css'] ?>style.css">

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="<?= $page_configs['scripts'] ?>script.js"></script>
    <script defer type="text/javascript" src="<?= $page_configs['scripts'] ?>lazysizes.min.js"></script>
</head>
<body> 
<?= GTM_BODY ?>

<?php include $page_configs['inc'] . 'modal.php'; ?>

<nav class="navbar navbar-light bg-white transition fixed-top">
    <div class="container">
        <img id="logo" height="60" class="lazyload" data-src="<?= $page_configs['img'] ?>logo.png" alt="Ford">
        <h1 class="m-3 pull-right"><?= $page_configs['title'] ?></h1>
    </div>
</nav>

<div id="cover" class="container-fluid p-0">
    <img width="100%" class="lazyload desktop" data-src="<?= $page_configs['img'] ?>cover-desktop.png" alt="Ventas Privadas Ford Donnay Automoció 2000">
    <img width="100%" class="lazyload mobile" data-src="<?= $page_configs['img'] ?>cover-mobile.png" alt="Ventas Privadas Ford Donnay Automoció 2000">
</div>

<div class="container-fluid brand-bg text-white below-cover">
    <div class="row" style="padding:40px 16px">
        <div class="col-md-6 mx-auto text-white text-center align-self-center">
            <p class="m-0" style="font-size:1.75rem;"><b><?= $page_configs['form_top_title'] ?></b></p>
        </div>
        <div class="col-md-6 mx-auto text-white text-center">
        <button class="btn btn-lg bg-white brand-color text-uppercase p-4" data-toggle="modal" data-target="#exampleModal" page-type="form-top" car-model="generic" car-variant="none" lang="<?= $page_configs['lang'] ?>"><b><?= $page_configs['form_top_cta'] ?></b></button>
        </div>
    </div>
</div>
<br>

<div class="container bg-light" style="border-radius:15px">
    <div class="row">
        <div class="col text-center"><br><br>
            <h2><b><?= $page_configs['form_middle_title'] ?></b></h2>
        </div>
    </div>
    <div class="row">
        <?php
            $i = 0;
            foreach ($vehiculos[APP_NAME]['versions'] as $key => $version) {
                echo '<div class="col-md-4 text-center mr-auto ml-auto mb-2">
                        <div class="model transition" data-toggle="modal" data-target="#exampleModal" onclick="onClickDivModal(this)" page-type="form-middle" car-brand="' . APP_NAME . '" car-model="' . $version['name'] . '" car-variant="none">
                            <img width="100%" class="lazyload" data-src="' . $page_configs['img'] . $version['name'] . '.png" alt="' . $vehiculos[APP_NAME]['name'] . ' ' . $version['name'] . '">
                            <h3>' . APP_NAME . ' ' . $version['name'] . '</h3>
                            <p>' . $version['price'] . '</p>
                            <button class="btn green-box text-white text-uppercase p-2" page-type="form-middle" car-brand="' . APP_NAME . '" car-model="' . strtolower($version['name']) . '" car-variant="none" lang="'. $page_configs['lang'] . '"><b>' . $page_configs['form_middle_cta'] . '</b></button> <br><br>
                        </div>
                    </div>';
                $i++;
                if ($i == 5) break;
            }
        ?>
        <div class="col-md-4 text-center mr-auto ml-auto mb-2">
            <div class="model transition" data-toggle="modal" data-target="#exampleModal" onclick="onClickDivModal(this)" page-type="form-middle" car-brand="ford" car-model="Otro" car-variant="none">
                <img width="100%" class="lazyload" data-src="./assets/img/Otro.png" alt="otro modelo" style="background-color:white"><br><br><br>
                <button class="btn green-box text-white text-uppercase p-2" page-type="form-middle" page-type="form-middle" car-brand="ford" car-model="otro modelo" car-variant="none" lang="es"><b>Solicitar oferta</b></button> <br><br>
            </div>
        </div>
    </div>
    <br><br>
</div>

<br>
<div class="container-fluid brand-bg">
    <div class="row">
        <div class="col text-center text-white">
            <br>
            <h2><?= $page_configs['form_bottom_title'] ?></h2><br>
            <button class="btn btn-lg bg-white brand-color text-uppercase" data-toggle="modal" data-target="#exampleModal" page-type="form-bottom" car-model="generic" car-variant="none" lang="<?= $page_configs['lang'] ?>" style="background-color: black"><b><?= $page_configs['form_bottom_cta'] ?></b></button>
            <br><br>
            <p><?= $page_configs['form_bottom_subtitle'] ?></p>
            <br><br>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark">
    <div class="container p-3 text-white">
        <div class="row">
            <div class="col">
                <?= $page_configs['footer'] ?>
            </div>
            <div class="col text-right">
                <a style="color:inherit;" href="<?= LOPD ?>" target="_blank" rel="noopener"><?= $page_configs['privacy'] ?></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>