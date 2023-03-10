@extends('layouts.main2')
@section('MasyarakatActive', 'active')
@section('title', 'Masyarakat')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Data Masyarakat</h4>
                <a class="btn btn-primary btn-round ml-auto" href="{{ route('petugas.masyarakat.create') }}">
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>
            </div>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Telpon</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Telpon</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @forelse ($masyarakat as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->username }}</td>
                                <td>{{ $p->telp }}</td>
                                <td>
                                    <div class="form-button-action">

                                        <form method="POST" action="{{ route('petugas.masyarakat.destroy', $p->nik) }}"
                                            class="form-inline">
                                            @csrf
                                            @method('DELETE')
                                            <div class="form-group" style="margin-right:45px;">
                                                <a href="{{ route('petugas.masyarakat.edit', $p->nik) }}" type="button"
                                                    data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Remove"
                                                    onclick="return confirm('Anda yakin ingin menghapus Data ini?')">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            @empty
                            {{-- <tr>Tidak Ada Data</tr> --}}
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