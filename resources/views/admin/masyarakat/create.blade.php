@extends('layouts.main')
@section('title', 'Tambah Petugas')
@section('MasyarakatActive', 'active')

@section('content')
    <div class="col-md-10">
        <div class="card">

            @if ($errors->all())
                @foreach ($errors->all() as $er)
                    <div class="alert alert-danger">
                        <button type="button" aria-hidden="true" class="close">
                        </button>
                        <span>{{ $er }}</span>
                    </div>
                @endforeach
            @endif

            <form method="POST" action="{{ route('admin.masyarakat.store') }}">
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="email2">NIK</label>
                        <input type="text" class="form-control" id="email2" placeholder="Masukkan NIK"
                            name="nik">
                    </div>
                    <div class="form-group">
                        <label for="email2">Nama</label>
                        <input type="text" class="form-control" id="email2" placeholder="Masukkan Nama"
                            name="nama">
                    </div>
                    <div class="form-group">
                        <label for="email2">Username</label>
                        <input type="text" class="form-control" id="email2" placeholder="Masukkan Username"
                            name="username">
                    </div>
                    <div class="form-group">
                        <label for="email2">Telpon</label>
                        <input type="number" class="form-control" id="email2" placeholder="Masukkan Telpon"
                            name="telp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password	">
                    </div>
                </div>

                <div class="card-action">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>

        </div>
    </div>
@endsection