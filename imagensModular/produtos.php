<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/produto.css">
	<title>Produtos</title>
</head>
<body>
	<section>
		<?php
		require 'classes/produto.class.php';
		$p = new Produto();
		$dadosProduto = $p->buscarProdutos();
		if(empty($dadosProduto)){
			echo "Ainda não há produtos cadastrados aqui!";
		}else{
			foreach($dadosProduto as $value){
				?> 
				<a href="exibir_produto.php?id=<?php echo $value['id_produto'];?>">
					<div>
						<img src="imagens/<?php echo $value['foto_capa'];?>">
						<h2><?php echo $value['nome_produto']; ?>	
					</div>
				</a>
				<?php
			}		
		}

		?>

	</section>

</body>
</html>