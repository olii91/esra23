@extends('layouts.masyarakat.partials')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Tambah Pengaduan</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('masyarakat.pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Judul Pengaduan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Pengaduan" name="judul_pengaduan">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlTextarea1">Isi Pengaduan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_pengaduan"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlFile1">Foto Pengaduan</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto_pengaduan">
                        </div>
                        <div class="row justify-content-end">
                            <button type="submit" class="btn btn-primary" style="width:200px;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection