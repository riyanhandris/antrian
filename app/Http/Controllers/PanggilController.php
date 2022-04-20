<?php

namespace App\Http\Controllers;

use App\Models\AntrianModel;
use Illuminate\Http\Request;
use App\Models\PanggilModel;


class PanggilController extends Controller
{

    public function index()
    {
        $panggilA = AntrianModel::where('jenis_antrian', 'A')->orderBy('antrian', 'asc')->whereNull('status')->first();
        $panggilB = AntrianModel::where('jenis_antrian', 'B')->orderBy('antrian', 'asc')->whereNull('status')->first();
        $panggilC = AntrianModel::where('jenis_antrian', 'C')->orderBy('antrian', 'asc')->whereNull('status')->first();
        return view('v_panggil_antrian', compact('panggilA', 'panggilB', 'panggilC'));
    }

    public function panggilAda(Request $request, $id)
    {
        $panggilAda = AntrianModel::where('id', $id)->update(['status' => 'Ada']);
        return back();
    }

    public function panggilTidak(Request $request, $id)
    {
        $panggilAda = AntrianModel::where('id', $id)->update(['status' => 'Tidak Ada']);
        return back();
    }

    public function panggilAntri(Request $request, $id)
    {
    }
}
