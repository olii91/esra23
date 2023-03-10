@extends('layouts.main2')
@section('CetakActive', 'active')
@section('title', 'Cetak Laporan')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Cetak Laporan Masyarakat</h4>
            </div>
        </div>
        <div class="card-body">
            
            <div class="form-group">
                <label for="email2">Dari Tanggal : </label>
                <input type="date" class="form-control" name="tglawal" id="tglawal" style="width:300px">
            </div>
            <div class="form-group">
                <label for="email2">Sampai Tanggal : </label>
                <input type="date" class="form-control" name="tglakhir" id="tglakhir" style="width:300px">
            </div>
            <div class="card-action">
                <div class="d-flex justify-content-end">
                    <a href="" type="submit" class="btn btn-success" onclick="this.href='/petugas/cetak/cetak-data/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value " target="_blank"><i class="fas fa-print"></i> Cetak</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection