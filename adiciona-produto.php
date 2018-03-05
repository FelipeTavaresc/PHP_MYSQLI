<?php include("cabecalho.php")  ?>

<?php

function insereProduto($conexao, $nome, $preco){
	$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}' , {$preco})";	
	return mysqli_query($conexao, $query)	

}

$nome = $_GET["nome"];
$preco = $_GET["preco"];

$conexao = mysqli_connect('localhost', 'root', '', 'loja');	


if(insereProduto($conexao, $nome, $preco)) { ?>
	<p class="alert-success">Produto <?=$nome;?>, <?=$preco;?> adicionado com sucesso!</p>
<?php } else { ?>
	<p class="alert-danger">Produto <?=$nome;?>, não foi adicionardo</p>
<?php

}

mysqli_close($conexao);

?>



<?php include("rodape.php")  ?>