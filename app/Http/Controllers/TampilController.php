<?php

namespace App\Http\Controllers;

use App\Models\AntrianModel;
use Illuminate\Http\Request;

class TampilController extends Controller
{
    public function index()
    {
        return view('v_tampilan_antrian');
    }

    public function json()
    {
        $antrianA = AntrianModel::query()
            ->orderBy('antrian', 'asc')
            ->where('jenis_antrian', 'A')
            ->whereNull('status')
            ->value('antrian');

        $antrianB = AntrianModel::query()
            ->orderBy('antrian', 'asc')
            ->where('jenis_antrian', 'B')
            ->whereNull('status')
            ->value('antrian');

        $antrianC = AntrianModel::query()
            ->orderBy('antrian', 'asc')
            ->where('jenis_antrian', 'C')
            ->whereNull('status')
            ->value('antrian');

        return [
            'A' => $antrianA ?? '-',
            'B' => $antrianB ?? '-',
            'C' => $antrianC ?? '-',
        ];
    }
}
