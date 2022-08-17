<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
</head>
<body>
    <h1>Lista de Pokémons</h1>
    
    <table>
        <tr>
            <th style="background-color: rgba(0,0,0,0);"></th>
            <th>Número</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tipo</th>
        </tr>

        <?php foreach($model->rows as $item): 
            ?>
        <tr>
            <td>
                <a href="/pokedex/delete?id=<?= $item->id ?>" class="botao_excluir">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/pokedex/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td>
                <a href="/pokedex/form?id=<?= $item->id ?>"><?= $item->descricao ?></a>
            </td>

            <td>
                <a href="/pokedex/form?id=<?= $item->id ?>"><?= $item->tipo ?></a>
            </td>
            


        </tr>
        
        <?php endforeach ?>

        <?php if (count($model->rows) == 0):?>
            <tr>
                <td colspan="5">Nenhum registro foi encontrado.</td>
            </tr>
        <?php endif?>

    </table>

    <br><br>
    <button onclick="document.location='/pokedex/form'" id="voltar"><strong>Cadastrar</strong></button>
</body>
</html>