<?php

	//Array single.

	$arr = ['Fulano','Ciclano'];
	$arr = array('Fulano','chave2'=>'Ciclano');

	$arr[0] = 'Fulano';
	$arr[] = 'Ciclano';

	//Arrays Multidimensionais

	//$arr2 = array(array('Fulano','Ciclano'),array(23,45));

	//$arr2[0] = array('chave1'=>'fulano','ciclano');

	$arr2[0]['chave1'] = 'Fulano';

	echo $arr2[0]['chave1'];

?>