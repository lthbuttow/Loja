<?php
require_once('inc/conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = 'SELECT * FROM usuarios WHERE email = \''.$email.'\' AND senha = \''.$senha.'\' AND admin = 1';
$res = pg_query($conexao, $sql);

if($res != false){
	if(pg_num_rows($res) != 0){
		$res = pg_fetch_assoc($res);

		$_SESSION['nome'] = $res['nome'];
		header('Location: '.$base_url.'index.php');
	}
	else{
		require_once('inc/cabecalho.php');
		?>
		<a href="<?php echo $base_url.'index.php';?>" class="btn btn-danger btn-md">Voltar</a>
		</br>
		<?php
		die("<h1 class='text-center'>SENHA INCORRETA OU USUÁRIO NÃO CADASTRADO!!<h1>");
		require_once('inc/rodape.php');
	}
}