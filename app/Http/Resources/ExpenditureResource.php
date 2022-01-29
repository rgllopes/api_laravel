<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpenditureResource extends JsonResource
{
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id"                => $this->id,
            'descrição'         => Str::of($this->description)->upper(),
            'valor'             => $this->value,
            'data_Pagamento'    => $this->datePay,
            'id_usuario'        => $this->id_user,
            'data_criação'      => $this->created_at->format('d-m-Y'),
            'data_modificação'  => $this->updated_at->format('d-m-Y')
        ];
    }

    // // Add values in return function
    // public function with($request)
    // {
    //     return [
    //         'res' => true,
    //     ];
    // }
}
