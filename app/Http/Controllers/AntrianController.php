<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AntrianModel;
use Illuminate\Cache\RateLimiting\Limit;

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

        $data = AntrianModel::where('jenis_antrian', 'A')
            ->orderBy('id', 'desc')
            ->limit('1')
            ->get();
        return view('v_print', compact('data'));
    }

    public function printB(Request $request)
    {

        $count = AntrianModel::where('jenis_antrian', 'B')->count();
        AntrianModel::create(['antrian' => $count + 1, 'jenis_antrian' => 'B']);

        $data = AntrianModel::where('jenis_antrian', 'B')
            ->orderBy('id', 'desc')
            ->limit('1')
            ->get();
        return view('v_print', compact('data'));
    }

    public function printC(Request $request)
    {
        $count = AntrianModel::where('jenis_antrian', 'C')->count();
        AntrianModel::create(['antrian' => $count + 1, 'jenis_antrian' => 'C']);

        $data = AntrianModel::where('jenis_antrian', 'C')
            ->orderBy('id', 'desc')
            ->limit('1')
            ->get();
        return view('v_print', compact('data'));
    }

    // public function cetak()
    // {
    //     $data = AntrianModel::where('jenis_antrian', 'A')->count();
    //     return view('v_print', compact('data'));
    // }
}
