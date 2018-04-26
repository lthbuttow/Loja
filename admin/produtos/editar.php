<?php
require_once('../inc/conexao.php');
require_once ($base_path.'inc/cabecalho.php');
if (isset($_SESSION['nome'])){
	if (isset($_GET['id']) && !empty($_GET['id'])){
		$id=$_GET['id'];
	}

    $sql = "SELECT * FROM produtos WHERE id='$id'";
    $result = pg_query($conexao , $sql);
    if(pg_num_rows($result) > 0){
    	$dados= pg_fetch_array($result);
    } else{
    	header("Location: ".$base_url."index.php"); 
    }
	?>


    <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="form-login">
        <form action="<?php echo $base_url.'produtos/edita.php';?>" method="post" >
	        <br>
	        <h4 align="center">Editar Produto</h4>
	        </br>
	        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"/>
	        </br>
	        Nome:
	        <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" class="form-control input-lg"/>
	        </br>
	        Preço:
	        <input type="text" name="preco" value="<?php echo $dados['preco']; ?>" class="form-control input-lg"/>
	        </br>
 
	        Descrição:
	        <textarea name="descricao" rows="10" cols="40" class="form-control" id="descricao"><?php echo $dados['descricao']; ?></textarea>
	        </br>
	        </br>    
	        
	        <input type="submit" value="Confirmar" class="btn btn-primary btn-md"> </input>
	        <a href="<?php echo $base_url.'produtos/index.php';?>" class="btn btn-danger btn-md">Voltar</a>
  

        </div>
        </form>
    </div>
    <div class="col-md-4"></div>
    </div>
   </div>
<?php
} else{
	header("Location: ".$base_url."index.php");
}

require_once($base_path.'inc/cabecalho.php');
?>