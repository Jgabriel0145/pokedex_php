<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php include 'css/bootstrap_personalizado.php' ?>
    <?php include 'css/style.php';?>

    <title>Cadastro de Pokémon</title>
</head>
<body>
     <center>
    <form action="/pokedex/save" method="post" class="align-middle" enctype="multipart/form-data">
        <fieldset>
            <h2>Cadastro de Pokémon</h2>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="<?= $model->nome ?>">
                </div>

                <div class="col">
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" id="descricao" value="<?= $model->descricao ?>">
                </div>
            </div>
            
            <br>
            <div class="row">
                <div class="col">
                    
                    <select class="form-select" name="tipo1">
                        <option selected value="Nenhum">Primeiro Tipo</option>
                        <option value="Inseto">Inseto</option>
                        <option value="Sombrio">Sombrio</option>
                        <option value="Dragão">Dragão</option>
                        <option value="Elétrico">Elétrico</option>
                        <option value="Fada">Fada</option>
                        <option value="Lutador">Lutador</option>
                        <option value="Fogo">Fogo</option>
                        <option value="Voador">Voador</option>
                        <option value="Fantasma">Fantasma</option>
                        <option value="Grama">Grama</option>
                        <option value="Terra">Terra</option>
                        <option value="Gelo">Gelo</option>
                        <option value="Normal">Normal</option>
                        <option value="Venenoso">Venenoso</option>
                        <option value="Psíquico">Psíquico</option>
                        <option value="Pedra">Pedra</option>
                        <option value="Metal">Metal</option>
                        <option value="Água">Água</option>
                    </select>

                </div>

                <div class="col">

                    <select class="form-select" name="tipo2">
                        <option selected value="Nenhum">Segundo Tipo</option>
                        <option value="Inseto">Inseto</option>
                        <option value="Sombrio">Sombrio</option>
                        <option value="Dragão">Dragão</option>
                        <option value="Elétrico">Elétrico</option>
                        <option value="Fada">Fada</option>
                        <option value="Lutador">Lutador</option>
                        <option value="Fogo">Fogo</option>
                        <option value="Voador">Voador</option>
                        <option value="Fantasma">Fantasma</option>
                        <option value="Grama">Grama</option>
                        <option value="Terra">Terra</option>
                        <option value="Gelo">Gelo</option>
                        <option value="Normal">Normal</option>
                        <option value="Venenoso">Venenoso</option>
                        <option value="Psíquico">Psíquico</option>
                        <option value="Pedra">Pedra</option>
                        <option value="Metal">Metal</option>
                        <option value="Água">Água</option>
                    </select>

                </div>
            </div>
            
            <br>
            <!--<div class="row">
                <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="arquivo_up" disabled>
                  </div>
            </div>-->

            <br>
            <div class="row">
                <div class="col" id="col_btn_enviar">
                    <button class="btn btn-personalizado" type="submit">Enviar</button>
                </div>

                <div class="col" id="col_btn_voltar">
                    <button class="btn btn-personalizado" onclick="document.location='/'">Voltar</button>
                </div>
            </div>
            
            
        </fieldset>
    </form>
    </center>
    

























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
    



</body>
</html>