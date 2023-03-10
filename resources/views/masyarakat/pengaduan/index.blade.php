@extends('layouts.masyarakat.partials')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Pengaduan Anda</h2>
                </div>
                <div class="card-body">
                    <div class="row justify-content-end mb-3">
                        <a href="{{ route('masyarakat.pengaduan.create') }}" role="button" type="button" class="btn btn-primary" style="width:200px;">Tambah Pengaduan</a>
                    </div>

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Pengaduan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col" style="width:10%">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pengaduan as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td><img src="{{ asset('foto-pengaduan/'. $item->foto_pengaduan) }}" alt="Foto" style="width:40px;"></td>
                                    <td>{{ $item->judul_pengaduan }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->tgl_pengaduan)) }}</td>
                                    <td>
                                    <a href="{{ route('masyarakat.pengaduan.show', $item->id) }}" role="button" type="button" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            @empty
                                
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('layouts.masyarakat.preloader') --}}
@endsection