<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{

    public function index()
    {
        $data = User::all();

        return view('v_data_petugas', compact('data'));
    }

    public function insert(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'np' => $request->np,
            'password' => Hash::make('password')
        ]);
        return redirect('/petugas');
    }

    public function edit($id)
    {
        $data = User::findorfail($id);
        return view('v_petugas_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::findorfail($id);
        $data->update([
            'name' => $request->nama,
            'np' => $request->np
        ]);
        return redirect('/petugas');
    }

    public function delete($id)
    {
        $data = User::findorfail($id);
        $data->delete();
        return back();
    }
}
