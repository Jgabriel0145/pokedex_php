<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php include 'View/Pokedex/pokedex_css.php'; ?>




        <title>Pokédex</title>
    </head>

    <body>
    
        <div class="container">
            <div class="row">
                <div class="col" id="coluna1">
                    <center>
                        <div class="card" id="card_pokemon">
                            <img src="foto_exemplo.png" class="card-img-top" alt="..." >
                            <div class="card-body">
                                <h4 class="card-title">Pikachu</h4>
                                <br>
                                                                
                                <div class="row">
                                    <div class="col">
                                        <a href="" class="btn btn-primary" id="btnVoltar">Voltar</a>
                                    </div>

                                    <div class="col">
                                        <a href="" class="btn btn-primary" id="btnAvancar">Avançar</a>
                                    </div>
                                </div>
                                
                                <br>

                                <div class="row">

                                    <div class="col">
                                        <a href="/pokedex/form" class="btn btn-primary" id="btnCadastrar">Cadastrar um novo Pokémon</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            








                <div class="col" id="coluna2">
                    <center>
                        <div class="card" id="card_info">
                            <div class="card-body">
                                <h4 class="card-title">Informações</h4>
                                <p class="card-text"><h6>Tipo</h6></p>
                                
                                <div id="texto_info_tipo">
                                    <span></span>
                                </div>

                                <p class="card-text"><h6>Descrição do Pokémon</h6></p>

                                <div id="texto_info_desc">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div> <!-- container -->




























        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
        
    </body>
</html>