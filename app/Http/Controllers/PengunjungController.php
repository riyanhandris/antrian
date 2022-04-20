<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengunjungModel;

class PengunjungController extends Controller
{

    public function __construct()
    {
        $this->PengunjungModel = new PengunjungModel();
    }

    public function index()
    {
        return view('v_pengunjung');
    }
}
