<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PokedexController.php';

switch($uri_parse)
{
    case '/pokedex':
        PokedexController::index();
    break;

    case '/pokedex/form':
        PokedexController::form();
    break;

    case '/pokedex/save':
        PokedexController::save();
    break;

    case '/pokedex/delete':
        PokedexController::delete();
    break;

    default:
        header('Location: /pokedex');
    break;
}

