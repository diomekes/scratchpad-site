<?php

$lists = '../';
$id = $_GET['id'] ? $_GET['id'] : $_POST['id'];
$file = $lists . $id;
$text = $_POST['value'];
$renderer = $_GET['renderer'] ?  $_GET['renderer'] : $_POST['renderer'];

file_put_contents($file,$text);

if ('textile' == $renderer) {
	require_once './Textile.php';
	$t = new Textile();
	$text = $t->TextileThis(stripslashes($text));
}

print $text;
