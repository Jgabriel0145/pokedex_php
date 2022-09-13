<?php

class PokedexDAO
{
    private $conexao;

    function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_pokedex";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }

    function insert(PokedexModel $model)
    {
        $sql = "INSERT INTO pokemon(nome, descricao, tipo) values (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->tipo);

        $stmt->execute();
    }

    public function getAllRows()
    {
        $sql = "SELECT * FROM pokemon";

        $stmt= $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(PokedexModel $model)
    {
        $sql = "UPDATE pokemon SET nome=?, descricao=?, tipo=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->tipo);
        $stmt->bindValue(4, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM pokemon";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt-> fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM pokemon WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PokedexModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM pokemon WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}