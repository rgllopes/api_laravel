<?php

namespace App\Http\Controllers\API;

use App\Models\Expenditure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpenditureRequest;
use App\Http\Requests\UpdateExpenditureRequest;
use App\Http\Resources\ExpenditureResource;

class ExpenditureController extends Controller
{

    public function index()
    {
        // Use resource (transformation cover between model and json return)
        // return ExpenditureResource::collection(Expenditure::all());
        return ExpenditureResource::collection(Expenditure::paginate(8));
    }

    public function store(StoreExpenditureRequest $request)
    {
        return (new ExpenditureResource( Expenditure::create($request->all())))
                ->additional(['msg' => "Despesa adicionado com sucesso!"])
                ->response()
                ->setStatusCode(201);
    }

    public function show(Expenditure $expenditure)
    {
        return new ExpenditureResource($expenditure);
    }

    public function update(UpdateExpenditureRequest $request, Expenditure $expenditure)
    {
        $expenditure->update($request->all());
        return (new ExpenditureResource($expenditure))
                ->additional(['msg' => 'Despesa atualizado com sucesso!'])
                ->response()
                ->setStatusCode(200);
    }

    public function destroy(Expenditure $expenditure)
    {
        $expenditure->delete();
        return (new ExpenditureResource($expenditure))
                ->additional(['msg' => 'Despesa removida com sucesso!'])
                ->response()
                ->setStatusCode(200);
    }
}
