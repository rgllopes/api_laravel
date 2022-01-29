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
            'id_usuario'        => $this->id_user
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
