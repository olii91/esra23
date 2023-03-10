@extends('layouts.main')
@section('LaporanActive', 'active')
@section('title', 'Laporan')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Laporan Masyarakat</h4>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Pengaduan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th style="width: 7%">Action</th>
                            <th style="width: 7%">Validasi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Pengaduan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Validasi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($laporan as $lap)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $lap->masyarakat->nama }}</td>
                                <td>{{ $lap->masyarakat->nik }}</td>
                                <td>{{ $lap->judul_pengaduan }}</td>
                                <td><img src="{{ asset('foto-pengaduan/'. $lap->foto_pengaduan) }}" alt="Foto" style="width:40px;"></td>
                                <td><strong>{{ ucFirst($lap->status) }}</strong></td>
                                <td>
                                    <div class="form-button-action justify-content-center d-flex">
                                        @if ($lap->status == '0')
                                            <a class="btn btn-success" type="button" href="{{ route('admin.laporan.updateStatus', $lap->id) }}" onclick="return confirm('Apakah anda yakin ingin memproses laporan?')">
                                                <span class="btn-label">
                                                </span>
                                                Proses
                                            </a>
                                        @elseif($lap->status == 'proses')
                                            <a class="btn btn-warning" type="button" href="{{ route('admin.laporan.updateStatus', $lap->id) }}" onclick="return confirm('Apakah anda yakin ingin menunda laporan?')">
                                                <span class="btn-label">
                                                    <i class="fa fa-exclamation-circle"></i>
                                                </span>
                                                Pending
                                            </a>
                                        @else
                                            <button class="btn btn-success" disabled="disabled">Selesai</button>
                                        @endif
                                        {{-- <button class="btn btn-success" disabled="disabled">Selesai</button> --}}
                                    </div>
                                </td>
                                <td>
                                    <div class="form-button-action justify-content-center d-flex">
                                        @if ($lap->status == '0')
                                            <button class="btn btn-info" disabled="disabled">
                                                <span class="btn-label">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                                Detail
                                            </button>
                                        @else
                                            <a class="btn btn-info" type="button" href="{{ route('admin.laporan.show', $lap->id) }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-info"></i>
                                                </span>
                                                Detail
                                            </a>
                                        @endif
                                    </div>
                                    {{-- <a class="btn btn-info" type="button" href="">
                                        <span class="btn-label">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        Detail
                                    </a> --}}
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
@endsection

@section('scripts')
    <script>
        $('#add-row').DataTable({});
    </script>
@endsection