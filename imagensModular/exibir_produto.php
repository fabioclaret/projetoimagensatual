<?php
require 'classes/Produto.class.php';

$p = new Produto();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];

    $dadosDoProduto   = $p->buscarProduto($id);
    $imagensDoProduto = $p->buscarImagem($id);

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir todos os Produtos</title>
    <link rel="stylesheet" href="css/exibir.css">
</head>
<body>
    <section>
        <div>
            <h1> Teste</TR></h1>
            <p><span>Descrição: </span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis rerum voluptate temporibus inventore eaque modi aspernatur debitis nesciunt? Dolor aperiam nobis eveniet repellat tenetur atque minima a sapiente facere esse.</p>
        </div>
        <div id="imagens">
            <div class="caixa-img">
                <img src="copia/celular.jpg" alt="">
            </div>
        </div>             
    </section>
</body>
</html>