<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardModel;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->DashboardModel = new DashboardModel();
    }

    public function index()
    {
        return view('v_dashboard');
    }
}
