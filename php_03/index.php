<?php

	//Durma o codigo por x segundos.
/*
	sleep(3);

	echo 'um';

	sleep(3);

	echo 'dois';

	sleep(3);

	echo 'tres';
*/

	$nome = 'fulano';

	if($nome == 'ciclano'){
		//continuamos o codigo
		echo 'tudo certo';
	}else{
		die("O script parou de ser executado");
	}


	sleep(3);

	echo 'um';

	sleep(3);

	echo 'dois';

	sleep(3);

	echo 'tres';


?>