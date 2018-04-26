<?php
require_once('../inc/conexao.php');
require_once ($base_path.'inc/cabecalho.php');

if (isset($_SESSION['nome'])) {
	?>
	<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="form-login">
        <form action="<?php echo $base_url.'produtos/cria.php';?>" method="post" >
	        <br>
	        <h4 align="center">Adicionar Produto</h4>
	        </br>
	        Nome:
	        <input type="text" name="nome"  class="form-control input-lg" placeholder="Digite seu nome..." />
	        </br>
	        Preço:
	        <input type="text" name="preco" class="form-control input-lg" placeholder="Digite o preço..." />
	        </br>
	        Descrição:
	        <textarea name="descricao" rows="10" cols="40" id="descricao" class="form-control" placeholder="Digite a descrição..."></textarea>
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
}
else{
	 	?>
		<a href="<?php echo $base_url.'index.php';?>" class="btn btn-danger btn-md">Voltar</a>
		</br>
		<?php
		die("<h1 class='text-center'>ACESSO RESTRITO!!<h1>");
}
require_once($base_path . 'inc/rodape.php');
?>