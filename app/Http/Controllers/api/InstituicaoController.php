<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\models\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    
    public function index(Instituicao $instituicao)
    {
        return $instituicao->index();
    }

}
