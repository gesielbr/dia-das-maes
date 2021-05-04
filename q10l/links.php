<?php

/* PEGA SRC */
$src = '';
$utm_content = '';
if (isset($_GET ['src'])) {
 $src = $_GET ['src'];
}

if (isset($_GET ['utm_content'])) {
	$utm_content = $_GET ['utm_content'];
}

if (isset($_GET ['utm_source'])) {
	$utm_source = $_GET ['utm_source'];
}


if (trim($src) == '') {
 if (isset($_GET ['utm_campaign'])) {
  $src = $_GET ['utm_campaign'];
 }

}

if (isset($_GET ['id'])) {
	$id = $_GET ['id'];
	$utm = '&utm_source=vendedorlg'. $id;
	$src = 'vendedorlg'. $id . $utm;
  }

$parametros = '?src=' . $src . '&utm_source=' . $utm_source . '&utm_content=' . $utm_content . '&transport=1';

$kit3 = 'https://app.monetizze.com.br/r/BDU1180883' . $parametros;
$kit2 = 'https://app.monetizze.com.br/r/BEJ1180880' . $parametros;
$kit1 = 'https://app.monetizze.com.br/r/BUK1173110' . $parametros;

$pixel = '';
$google = 'GTM-WQ375Q8';
$paginaembranco = '';

?>
