<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokémon</title>
    <style>
        label, input {display: block;}
    </style>
</head>
<body>
    
<form action="/pokedex/save" method="post">

    <input type="hidden" value="<?= $model->id ?>" name="id" />
    
    <label for="nome">Nome</label>
    <input name="nome" id="nome" type="text" required placeholder="Digite o nome do Pokémon..."
        value="<?= $model->nome ?>"/>

    <br>
    <label for="nome">Descrição</label>
    <input name="descricao" id="descricao" type="text" required placeholder="Digite a descrição do Pokémon..."
        value="<?= $model->descricao ?>"/>
    
    <br>
    <label for="nome">Tipo</label>
    <input name="tipo" id="tipo" type="text" required placeholder="Digite o(s) tipo(s) do Pokémon..."
        value="<?= $model->tipo ?>"/>

    <br>
    <button type="submit" id="enviar"><strong>Enviar</strong></button>
    <br><br>
    <button onclick="document.location='/'" id="voltar"><strong>Voltar</strong></button>

</form>

</body>
</html>