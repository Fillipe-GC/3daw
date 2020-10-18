<?php
	$datanasc = date_create('1994-07-16');
	$datahoje = date_create();
	$resultado = date_diff($datanasc,$datahoje);
	echo "Fillipe Gonçalves de Carvalho - 16/07/1994 - ".date_interval_format($resultado, '%Y')." anos, ".date_interval_format($resultado, '%M')." meses e ".date_interval_format($resultado, '%D')." dias";
?>
