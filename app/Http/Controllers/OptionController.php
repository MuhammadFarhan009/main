<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    public function index()
    {
        // Retrieve data from MySQL table
        $options = DB::table('nama_dosen')->pluck('Nama', 'ID');

        // Return view with data
        return view('index', ['options' => $options]);
    }
}
