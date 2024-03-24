<!-- Criar um programa que utiliza o array abaixo, que contém nomes de arquivos de imagens, para exibir, somente, uma imagem a cada solicitação feita à página do programa. De forma aleatória. Para isto, utilize a função rand(0,3) para gerar o número da posição do elemento a ser lido do array.
$imagens = array("paisagem.gif", "foto.jpg", "logo.gif", "animação.gif"); -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Imagem Aleatória</title>
</head>

<body>
    <h2>Imagem Aleatória</h2>
    <img src="<?php echo $imagem; ?>" alt="Imagem Aleatória">
</body>

</html>

<?php
$imagens = array("paisagem.gif", "foto.jpg", "logo.gif", "animação.gif");

$indice = rand(0, 3);

$imagem = $imagens[$indice];
?>