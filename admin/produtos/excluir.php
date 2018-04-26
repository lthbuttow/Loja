<?php
require_once('../inc/conexao.php');
if (isset($_SESSION['nome'])){
	if(isset($_GET['id'])&& !empty($_GET['id'])){
		$id = $_GET['id'];
	}


		$sql = "DELETE FROM produtos WHERE id='$id'";
		$result = pg_query($conexao, $sql);
		if($result != false){
			if(pg_affected_rows($result) > 0){
				header('Location: index.php');
			}
		}
		else{
			header('Location: index.php');
		}	

} else{
		require_once('../inc/cabecalho.php');
		?>
		<a href="<?php echo $base_url.'index.php';?>" class="btn btn-danger btn-md">Voltar</a>
		</br>
		<?php
		die("<h1 class='text-center'>PRODUTO NÃO ENCONTRADO OU USUÁRIO NÃO CADASTRADO!!<h1>");
		require_once('../inc/rodape.php');
	}
	
?>

