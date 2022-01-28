<?php

namespace App\Http\Controllers\API;

use App\Models\Expenditure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpenditureRequest;
use App\Http\Requests\UpdateExpenditureRequest;

class ExpenditureController extends Controller
{

    public function index()
    {
        return Expenditure::all();
    }

    public function store(StoreExpenditureRequest $request)
    {
        Expenditure::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Gasto guardado com sucesso!'
        ],200);
    }

    public function show(Expenditure $expenditure)
    {
        return response()->json([
            'res'           => true,
            'expenditure'   => $expenditure
        ],200);
    }

    public function update(UpdateExpenditureRequest $request, Expenditure $expenditure)
    {
        $expenditure->update($request->all());
        
        return response()->json([
            'res'       => true,
            'message'   => "Gasto atualizado com sucesso!",
            'datas'     => $expenditure
        ],200);
    }

    public function destroy(Expenditure $expenditure)
    {
        $expenditure->delete();
        
        return response()->json([
            'res'       => true,
            'message'   => "Gasto eliminado com sucesso!",
            'datas'     => $expenditure
        ],200);
    }
}
