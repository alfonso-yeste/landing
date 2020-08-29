<?php

include './inc/global.php';
include './inc/vehiculos.php';

$page_configs = array(
    'lang' => 'es',
    'header_title' => 'Ofertas Ford',
    'css' => './assets/css/',
    'scripts' => './assets/js/',
    'img' => './assets/img/',
    'inc' => './inc/',
    'meta_description' => 'Concesionario oficial Ford. Toda la gama Ford a tu disposición con ofertas increíbles',
    'title' => 'Ofertas Especiales',
    'modal_title' => 'Estás a un clic de conseguir tu oferta',
    'form_top_title' => '¡Solicita tu oferta!',
    'form_top_cta' => '¡Pide tu oferta!',
    'form_middle_title' => 'Modelos Ford en oferta',
    'form_middle_cta' => 'Solicitar Oferta',
    'clock_title' => 'Entrega inmediata',
    'clock_subtitle' => '¡Stock limitado!',
    'form_bottom_title' => '',
    'form_bottom_subtitle' => '*Descuento respecto al mismo modelo en vehículo nuevo, y válido hasta agotar unidades en promoción',
    'form_bottom_cta' => '¡Pide tu oferta!',
    'footer' => '© Todos los derechos reservados Donnay Automoción',
    'privacy' => 'Política de Privacidad',
    'form_name' => 'Nombre y Apellidos',
    'form_email' => 'Correo Electrónico',
    'form_tel' => 'Teléfono',
    'form_model' => 'Selecciona tu modelo',
    'form_privacy_start' => 'Acepto la ',
    'form_privacy_end' => ' política de privacidad',
    'form_cookies_start' => 'Acepto la ',
    'form_cookies_end' => ' política de cookies',
    'another_model' => 'Otro Modelo',
    'form_dealer' => 'Concesionario'
);

include 'inc/components/generic-landing.php';