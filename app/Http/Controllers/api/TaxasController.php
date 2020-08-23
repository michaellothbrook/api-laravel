<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\models\Taxa;
use Illuminate\Http\Request;

class TaxasController extends Controller
{

    public function index(Taxa $taxa)
    {
        return $taxa->index();
    }
}
