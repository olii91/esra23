@extends('layouts.main2')
@section('title', 'Dashboard')

@section('content')
<div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
        <div class="card-body ">
            <div class="row align-items-center">
                <div class="col-icon">
                    <div class="icon-big text-center icon-danger bubble-shadow-small">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                        <p class="card-category">Petugas</p>
                    <h4 class="card-title">{{ $userCount->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
        <div class="card-body ">
            <div class="row align-items-center">
                <div class="col-icon">
                    <div class="icon-big text-center icon-info bubble-shadow-small">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                        <p class="card-category">Masyarakat</p>
                    <h4 class="card-title">{{ $masCount->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
        <div class="card-body ">
            <div class="row align-items-center">
                <div class="col-icon">
                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                        <p class="card-category">Pengaduan</p>
                    <h4 class="card-title">{{ $pengCount->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
        <div class="card-body ">
            <div class="row align-items-center">
                <div class="col-icon">
                    <div class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                    <div class="numbers">
                        <p class="card-category">Pengaduan Selesai</p>
                    <h4 class="card-title">{{ $pengseCount->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection