<?php

class PokedexController
{
    public static function index()
    {
        include 'Model/PokedexModel.php';
        $model = new PokedexModel();
        
        $model->getAllRows();

        include 'View/Cadastro/lista_pokemon.php';
    }

    public static function form()
    {
        include 'Model/PokedexModel.php';
        $model = new PokedexModel();

        if (isset($_GET['id']))
            $model = $model->getById((int)$_GET['id']);

        include 'View/Cadastro/cadastro_pokemon.php';
    }

    public static function save()
    {
        include 'Model/PokedexModel.php';
        $model = new PokedexModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->descricao = $_POST['descricao'];
        $model->tipo1 = $_POST['tipo1'];
        $model->tipo2 = $_POST['tipo2'];


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