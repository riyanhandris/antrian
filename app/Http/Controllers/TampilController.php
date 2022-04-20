<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TampilModel;

class TampilController extends Controller
{
    public function __construct()
    {
        $this->TampilModel = new TampilModel();
    }

    public function index()
    {
        return view('v_tampilan_antrian');
    }
}
