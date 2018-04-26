<?php
session_start();
$base_url = 'http://localhost/tsi/loja/';
$conexao = pg_connect('host=localhost port=5432 dbname=lojalpw user=postgres password=1234');
if(!$conexao){
	echo 'nao rolou';
}