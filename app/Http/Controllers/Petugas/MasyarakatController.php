<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakat = Masyarakat::all();
        $data['masyarakat'] = $masyarakat;

        return view('petugas.masyarakat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.masyarakat.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Masyarakat();

        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->username = $request->username;
        $data->telp = $request->telp;
        $data->password = bcrypt($request->password);

        $data->save();

        return redirect()->route('petugas.masyarakat.index')->with('success', 'Data Berhasil Ditambahkan');
    }

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
    public function edit($nik)
    {
        $masyarakat = Masyarakat::find($nik);
        return view('petugas.masyarakat.edit', compact('masyarakat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $nik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {
        $user = Masyarakat::find($nik);

        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->telp = $request->telp;

        if(!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('petugas.masyarakat.index')->with('success', 'Berhasil Mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $nik
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        $data = Masyarakat::find($nik);
        $data->delete();
        return redirect()->route('petugas.masyarakat.index')->with('success', 'Data Berhasil Dihapus');
    }
}
