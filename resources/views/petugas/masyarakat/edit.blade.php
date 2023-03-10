@extends('layouts.main2')
@section('title', 'Edit Masyarakat')
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

            <form method="POST" action="{{ route('petugas.masyarakat.update', $masyarakat->nik) }}">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="email2">NIK</label>
                        <input type="text" class="form-control" id="email2" placeholder="Masukkan NIK"
                            name="nik" value="{{ $masyarakat->nik }}">
                    </div>
                    <div class="form-group">
                        <label for="email2">Nama</label>
                        <input type="text" class="form-control" id="email2" placeholder="Masukkan Nama"
                            name="nama" value="{{ $masyarakat->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="email2">Username</label>
                        <input type="text" class="form-control" id="email2" placeholder="Masukkan Username"
                            name="username" value="{{ $masyarakat->username }}">
                    </div>
                    <div class="form-group">
                        <label for="email2">Telpon</label>
                        <input type="number" class="form-control" id="email2" placeholder="Masukkan Telpon"
                            name="telp" value="{{ $masyarakat->telp }}">
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