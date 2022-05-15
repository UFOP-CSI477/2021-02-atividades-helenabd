<?php

namespace App\Models;

class Estado implements ModelInterface
{
    private $id, $nome, $sigla;

    public function __construct($id, $nome, $sigla)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sigla = $sigla;
    }

    public function getAll()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'sigla' => $this->sigla
        ];
    }

    public function get($id)
    {
        return [
            $this->id => [
                'id' => $this->id,
                'nome' => $this->nome,
                'sigla' => $this->sigla
            ]
        ];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSigla()
    {
        return $this->sigla;
    }
}
