<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{

    public function __construct()
    {
        $this->Alat = new Alat();
    }

    public function halamanalat()
    {
        $dtAlat = Alat::all();
        return view('Alat.alat', ['alat' => $dtAlat]);
    }

    public function tambahalat()
    {
        return view('Alat.tambahalat');
    }

    public function storealat(Request $request)
    {
        $alat = new Alat;
        $alat->nm_alat = $request->input('nm_alat');
        $alat->harga = $request->input('harga');
        $alat->stok = $request->input('stok');
        if ($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtention();
            $fillname = time().'.'.$extention;
            $file->move('upload/alat/', $fillname);
            $alat->gambar = $fillname;
        }
        // $alat->simpan();
        Alat::create($request->all());
        return redirect('alat');
    }

    // public function storealat(Request $request)
    // {
    //     Alat::create($request->all());
    //     return redirect('alat');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}