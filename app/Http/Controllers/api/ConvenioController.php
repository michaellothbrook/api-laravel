<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\models\Convenio;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
   
    public function index(Convenio $convenio)
    {
        return $convenio->index();
    }

}
