<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpenditureRequest;
use App\Models\Expenditure;
use Illuminate\Http\Request;

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
        ]);
    }

    public function show(Expenditure $expenditure)
    {
        //
    }

    public function update(Request $request, Expenditure $expenditure)
    {
        //
    }

    public function destroy(Expenditure $expenditure)
    {
        //
    }
}
