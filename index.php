<?php 

require_once "dist/php/functions.php";

if(isset($_SERVER['REDIRECT_URL'])) {
	$uri = $_SERVER['REDIRECT_URL'];
	$language_path = str_replace('/', '', $uri);
} else {
	$language_path = "ca";
}

$ca_tr = yaml_parse(file_get_contents('dist/translations/ca.yml'));
$eng_tr = yaml_parse(file_get_contents('dist/translations/en.yml'));
$es_tr = yaml_parse(file_get_contents('dist/translations/es.yml'));

$all_translations = array_merge($ca_tr, $eng_tr, $es_tr);
$trans = $all_translations[$language_path];

include('template.php');

?>