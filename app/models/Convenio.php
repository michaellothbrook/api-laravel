<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    public $convenios;

    public function __construct()
    {
        $convenio = file_get_contents(storage_path('json-files\simulador\convenios.json'));

        $this->convenios = $convenio;

    }

    public function index()
    {
        return $this->convenios;
    }
}
