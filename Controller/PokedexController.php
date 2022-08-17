<?php

class PokedexController
{
    public static function index()
    {
        include 'Model/PokedexModel.php';
        $model = new PokedexModel();
        
        $model->getAllRows();

        include 'View/modules/Pokedex/pokedex.php';
    }

    public static function form()
    {
        include 'Model/PokedexModel.php';
        $model = new PokedexModel();

        if (isset($_GET['id']))
            $model = $model->getById((int)$_GET['id']);

        include 'View/modules/Pokedex/cadastro_pokemon.php';
    }

    public static function save()
    {
        include 'Model/PokedexModel.php';
        $model = new PokedexModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->descricao = $_POST['descricao'];
        $model->tipo = $_POST['tipo'];

        $model->save();

        header('Location: /pokedex');
    }

    public static function delete()
    {
        include 'Model/PokedexModel.php';
        $model = new PokedexModel();
        
        $model->delete( (int) $_GET['id'] );

        header("Location: /pokedex");
    }

    
}