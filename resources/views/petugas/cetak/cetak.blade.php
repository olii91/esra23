<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="justify-content-center row mt-3">
            <h1 class="text-center">Data Pengaduan</h1>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cetakLaporan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->masyarakat->nik }}</td>
                            <td>{{ $item->judul_pengaduan }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->tgl_pengaduan)) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <th style="width:100%">Tidak Ada Data</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>