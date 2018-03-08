<?php

include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

?>

<table class="table table-striped table-bordered">
	<?php
		$produtos = listaProdutos($conexao);
		foreach ($produtos as $key => $produto) :
	?>
	<tr>
		<td><?= $produto['nome'] ?></td>	
		<td><?= $produto['preco'] ?></td>
	</tr>
	<?php
		endforeach
	?>

</table>

<?php include("rodape.php")  ?>