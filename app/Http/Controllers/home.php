<?php

namespace App\Http\Controllers;

use App\Models\tes_table;
use Illuminate\Http\Request;

class home extends Controller
{
    function HomeIndex(){
        return view('welcome');
    }
    function DataInsert(request $request){
        $nama = $request->input('nama');
        $NIM = $request->input('NIM');
        $dosen_1 = $request->input('dosen_1');
        $dosen_2 = $request->input('dosen_2');
        $dosen_peguji = $request->input('dosen_penguji');

        $isInsertSuccess = tes_table::insert([
            'nama' => $nama,
            'NIM' => $NIM,
            'dosen_1' => $dosen_1,
            'dosen_2' => $dosen_2,
            'dosen_penguji' => $dosen_peguji
        ]);
        return view('welcome');
    }
}
