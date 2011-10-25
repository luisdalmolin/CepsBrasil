<?php 
/**
 * Exemplos de utilização do banco de dados dos ceps juntamente com a classe
 * 
 * @author Luís Dalmolin <luis.nh@gmail.com>
 */
 
require_once('_inc/class/cep/cep.class.php');

$cep = new Cep('SEU CEP AQUI');

if( $cep->encontrado ) {
	echo '<h1>CEP Encontrado!</h1>';

	echo '<p><strong>UF:</strong>         ' . $cep->uf         . '</p>';
	echo '<p><strong>Cidade:</strong>     ' . $cep->cidade     . '</p>';
	echo '<p><strong>Bairro:</strong>     ' . $cep->bairro     . '</p>';
	echo '<p><strong>Logradouro:</strong> ' . $cep->logradouro . '</p>';
}