<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";

?>

<h1>Alterando produto</h1>
<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br/></td>
		</tr>
		<tr>
			<td>Preço</td>
			<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br/></td>
		</tr>

		<tr>
			<td>Descrição</td>
			<td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea>
			</tr>

			<tr>
				<td>Usado?</td>
				<td><input type="checkbox" name="usado" <?=$usado?> value="true">Sim
				</tr>

				<tr>
					<td>Categorias</td>
					<td>
						<select name="categoria_id" class="form-control">
							<?php foreach($categorias as $categoria) :
							$produto['categoria_id'] == $categoria_id['id'];
							$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
							$selecao = $essaEhACategoria ? "selected='selected'" : "";
							?>
							<option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>

			<tr>
				<td>
					<input class="btn btn-primary" type="submit" value="Alterar">
				</td>
			</tr>		
		</table>
	</form>

	<?php include("rodape.php")  ?>