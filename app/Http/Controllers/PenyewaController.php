<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{

    public function __construct()
    {
        $this->Penyewa = new Penyewa();
    }

    public function halamanpenyewa()
    {
        $dtPenyewa = Penyewa::all();
        return view('Penyewa.penyewa', ['penyewa' => $dtPenyewa]);
    }

    public function tambahpenyewa()
    {
        return view('Penyewa.tambahpenyewa');
    }

    public function storepenyewa(Request $request)
    {
        Penyewa::create($request->all());
        return redirect('penyewa');
    }

    public function editpenyewa($idpenyewa)
    {
        $pen = Penyewa::findorfail($idpenyewa);
        return view('Penyewa.aksipenyewa', compact('pen'));
    }
}
