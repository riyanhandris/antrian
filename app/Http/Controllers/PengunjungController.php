<?php

namespace App\Http\Controllers;

use App\Models\AntrianModel;
use Illuminate\Http\Request;
use App\Models\PengunjungModel;

class PengunjungController extends Controller
{

    public function index()
    {
        $data = AntrianModel::all();

        return view('v_pengunjung', compact('data'));
    }
}
