<?php

interface MyPackageThrowable extends Throwable
{
	
}

class MinhaClasseExecao extends Exception implements MyPackageThrowable
{
	
}

function menorZero($x){
	if($x < 0){
		throw new MinhaClasseExecao('Menor que Zero');
	}
	
	return $x;
}

try{
	echo menorZero(1) . '<br>';
	echo menorZero(-1) . '<br>';
}catch(Exception $e){
	echo 'Exceção capturada: ',  $e->getMessage();
}finally{
	echo '<br>teste';
}




/*

Antes

<?php

function menorZero($x){
	if($x < 0){
		throw new Exception('Menor que Zero');
	}
	
	return $x;
}

try{
	echo menorZero(1) . '<br>';
	echo menorZero(-1) . '<br>';
}catch(Exception $e){
	echo 'Exceção capturada: ',  $e->getMessage();
}finally{
	echo '<br>teste';
}

*/