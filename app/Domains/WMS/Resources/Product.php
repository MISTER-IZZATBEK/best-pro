<?php

namespace Market\WMS\Resources;

use Market\Core\Fields\TextField;
use Market\WMS\Entities\Product as EntitiesProduct;
//use Market\WMS\Requests\ProductRequest;

class Product extends Resource
{
    public $model=EntitiesProduct::class;
    //    protected $request=ProductRequest::class;

    public function fields()
    {
        return [
            TextField::make('name')->rules('required|min:10|max:255'),
            TextField::make('price')->rules('required'),
        ];
    }

}
