<?php

namespace App\Http\Controllers;

use Market\Core\Services\CoreService;

class ProductController extends Controller
{
    protected $service;

    public function __construct( CoreService $service)
    {
        $this->service = $service;
    }

}
