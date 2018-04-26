<?php
require_once('../inc/conexao.php');

if (isset($_POST['nome']) && !empty($_POST['nome'])){

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

    $sql = "INSERT INTO produtos(nome,preco,descricao) VALUES ('$nome',$preco,'$descricao')";
    $result = pg_query($conexao , $sql);
    if(pg_affected_rows($result) > 0){
    header("Location: index.php");

    } else{
    	?>
    	<a href="<?php echo $base_url.'index.php';?>" class="btn btn-danger btn-md">Voltar</a>
		</br>
		<?php
		die("<h1 class='text-center'>ERRO NA CRIAÇÃO DO NOVO PRODUTO!!<h1>");
        }
    }
	else{
			?>
	    	<a href="<?php echo $base_url.'index.php';?>" class="btn btn-danger btn-md">Voltar</a>
			</br>
			<?php
			die("<h1 class='text-center'>ACESSO RESTRITO!!<h1>");
	}    
   
?>
}