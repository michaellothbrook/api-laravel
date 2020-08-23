<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    public $instituicoes;

    public function __construct()
    {
        $instituicao = file_get_contents(storage_path('json-files\simulador\instituicoes.json'));

        $this->instituicoes = $instituicao;

    }

    public function index()
    {
        return $this->instituicoes;
    }
}
