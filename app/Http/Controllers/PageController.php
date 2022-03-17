<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function welcome($name = null)
    {
        $arr=[
        'Shaxzod',
        'Azzifbrk',
        'Bekzod'
        ];
        return view('welcome', ['name'=>$name , 'arr'=>$arr]);
    }
}
