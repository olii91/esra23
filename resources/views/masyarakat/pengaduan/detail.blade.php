@extends('layouts.masyarakat.partials')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-center">
                    <div class="card-title m-0">Bruh</div>
                    <p class="m-0"><i class="bi bi-calendar"></i> {{ date('d-m-Y', strtotime($laporan->tgl_pengaduan)) }}</p>
                </div>
            </div>
            <div class="card-body">
                <div class="justify-content-center row py-2 px-4">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="justify-content-center d-flex">
                                    <img src="{{ asset('foto-pengaduan/'. $laporan->foto_pengaduan) }}" alt="yes" style="width:350px">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th><h4 class="mb-0"><strong>Judul : {{ $laporan->judul_pengaduan }}</strong></h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><p class="mb-1">{{$laporan->isi_pengaduan}}</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><h3 class="mb-0 text-center"><strong>Tanggapan</strong></h3></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><p class="mb-1 px-2">{{$laporan->tanggapan->isi_tanggapan ?? 'Tidak Ada Tanggapan'}}</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection