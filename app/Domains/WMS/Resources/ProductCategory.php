<?php

namespace Market\WMS\Resources;

use Market\Core\Fields\TextField;
use Market\WMS\Entities\ProductCategory as EntitiesProductCategory;

class ProductCategory extends Resource
{
    public $model= EntitiesProductCategory::class;
//    protected $request=ProductCategoryRequest::class;
    public function fields()
    {
        return [
            TextField::make('name')->rules('required'),
        ];
    }
}
