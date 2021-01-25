<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Products;
use App\Http\Resources\ProductResource as ProductResource;

class TypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $products = Products::all();
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'products'=> ProductResource::collection($this->products)
        ];
    }
}
