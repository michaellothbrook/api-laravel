<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\models\Taxa;
use App\Rules\isFloat;
use Illuminate\Http\Request;

class SimuladorController extends Controller
{
    private $simulador = array();

    public function store(Request $request, Taxa $taxa)
    {

        $validate = $request->validate([
            'valor_emprestimo' => ['required', new isFloat],
            'instituicoes' => ['array'],
            'convenios' => ['array'],
            'parcela' => ['numeric']
        ]);
        

        if($validate) {

            $convenios = $request['convenios'];
            $parcela = $request['parcela'];
            $instituicoes = $request['instituicoes'];
            $valor_emprestimo = $request['valor_emprestimo'];

            $taxas = json_decode($taxa->index(), true);
    
            foreach ($taxas as $taxa) {

                $valor_parcela = $valor_emprestimo * $taxa['coeficiente'];
    
                $this->simulador[$taxa['instituicao']] = [
                        "taxa" => $taxa['taxaJuros'],
                        "parcelas" => $taxa['parcelas'],
                        "valor_parcela" =>  $valor_parcela,
                        "convenio" =>  $taxa['convenio']
                ];
            }
        }
        return response()->json($this->simulador, 200);

    
    }


}
