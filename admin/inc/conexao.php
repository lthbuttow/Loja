<?php
session_start();

//configura com o TEU caminho de instalação
$base_path = 'C:/wamp/www/tsi/loja/admin/';
$base_url = 'http://localhost/tsi/loja/admin/';

$conexao = pg_connect('host=localhost port=5432 dbname=lojalpw user=postgres password=1234');
if(!$conexao){
	echo 'nao rolou';
}