<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokémon</title>
    <?php include "View/css/FormProduto_css.php";?>
</head>
<body>
    
<form action="/produto/save" method="post">
        <fieldset>
            <h2>Cadastro de Pokémon</h2>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome"><strong>Nome:</strong></label>
            <input name="nome" id="nome" type="text" placeholder="Digite o nome do Pokémon..." required value="<?= $model->nome ?>" />

            <label for="descricao"><strong>Descrição:</strong></label>
            <input name="descricao" id="descricao" type="text" placeholder="Digite a descrição do Pokémon..." required value="<?= $model->descricao ?>" />
               
            <label for="tipo"><strong>Tipo:</strong></label>
            <input name="fogo" id="fogo" type="checkbox" value="Fogo"/>
            <input name="agua" id="agua" type="checkbox" value="Água"/>
            <input name="planta" id="planta" type="checkbox" value="Planta"/>
            <input name="gelo" id="gelo" type="checkbox" value="Gelo"/>
            <input name="venenoso" id="venenoso" type="checkbox" value="Venenoso"/>



            <button type="submit" id="enviar">Enviar</button>

            

        </fieldset>
    </form>    
    <br><br>
    <button onclick="document.location='/'" id="voltar">Voltar</button>



</body>
</html>