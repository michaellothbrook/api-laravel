<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Taxa extends Model
{
    public $taxas;

    public function __construct()
    {
        $taxa = file_get_contents(storage_path('json-files\simulador\taxas_instituicoes.json'));

        $this->taxas = $taxa;

    }

    public function index()
    {
        return $this->taxas;
    }
}
