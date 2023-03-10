<?php

namespace App\Http\Controllers\Petugas;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = Pengaduan::with('masyarakat')->get();
        $data['laporan'] = $laporan;

        return view('petugas.laporan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporan = Pengaduan::with('masyarakat')->find($id);
        $cek = Tanggapan::where('id_pengaduan', $id)->count();
        // $respon = Tanggapan::where('id_pengaduan', $id)->get();

        $data['laporan'] = $laporan;
        $data['tanggapan'] = $cek;
        // $data['respon'] = $respon;

        // dd($data);
        return view('petugas.laporan.detail', $data); 
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

    public function updateStatus($id)
    {
        $laporan = Pengaduan::find($id);
        $status = $laporan->status;

        if($status == '0'){
            $laporan->status = 'proses';
        }else {
            $laporan->status = '0';
        }

        $laporan->save();

        return redirect()->route('petugas.laporan.index')->with('success', 'Berhasil Merubah Status');
    }


    public function statusSelesai($id)
    {
        $laporan = Pengaduan::find($id);
        $status = $laporan->status;

        if($status == 'proses'){
            $laporan->status = 'selesai';
        }

        $laporan->save();

        return redirect()->route('petugas.laporan.show', $id)->with('success', 'Laporan Tervalidasi');
    }

    public function ruteTanggapan($id)
    {
        $laporan = Pengaduan::with(['masyarakat', 'tanggapan'])->findOrFail($id);
        $data['laporan'] = $laporan;

        return view('petugas.laporan.tanggapan', $data);
    }

    public function beriTanggapan(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id);

        $tanggapan = new Tanggapan();

        $tanggapan->id_pengaduan = $pengaduan->id;
        $tanggapan->tgl_tanggapan = date('Y-m-d H:i:s');
        $tanggapan->isi_tanggapan = $request->isi_tanggapan;
        $tanggapan->id_petugas = Auth::id();

        $tanggapan->save();

        return redirect()->route('petugas.laporan.show', $id)->with('success', 'Berhasil Menanggapi');
    }
}
