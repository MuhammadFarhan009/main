<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;
use App\Models\MyModel;

class MyController extends Controller
{
    public function Dataindex()
    {
        return view('welcome');
    }
    public function myMethod()
    {
        $data = data::all();
        return view('welcome', ['data' => $data]);

    }
}
