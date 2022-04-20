<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AntrianModel;

class AntrianController extends Controller
{

    public function index()
    {
        return view('v_nomor_antri');
    }

    public function printA(Request $request)
    {

        $count = AntrianModel::where('jenis_antrian', 'A')->count();
        AntrianModel::create(['antrian' => $count + 1, 'jenis_antrian' => 'A']);
        return redirect('/print');
    }

    public function printB(Request $request)
    {

        $count = AntrianModel::where('jenis_antrian', 'B')->count();
        AntrianModel::create(['antrian' => $count + 1, 'jenis_antrian' => 'B']);
        return redirect('/print');
    }

    public function printC(Request $request)
    {
        $count = AntrianModel::where('jenis_antrian', 'C')->count();
        AntrianModel::create(['antrian' => $count + 1, 'jenis_antrian' => 'C']);
        return redirect('/print');
    }
}
