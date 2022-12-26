@extends('layouts.front')

@section('title', 'detail')

@push('css')
<style>
    .daftar-donasi.nav-pills .nav-link.active, 
    .daftar-donasi.nav-pills .show>.nav-link {
        background: transparent;
        color: var(--dark);
        border-bottom: 3px solid var(--blue);
        border-radius: 0;
    }
</style>
@endpush

@section('content')
{{-- Banner --}}
<div class="banner bg-charity2">
    <div class="container">
        <h2 class="fa-2x text-white">Hallo</h2>
    </div>
</div>

{{-- Detail --}}
<div class="detail bg-white">
    <div class="container py-5">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="d-flex align-items-center">
                    <div class="img rounded-circle" style="width: 60px; overflow:hidden;">
                        <img src="#" alt="" class="w-100">   
                        <img src="{{ asset('AdminLTE/dist/img/user1-128x128.jpg') }}" alt="" class="w-100">
                    </div>
                    <div class="ml-3">
                        <strong class="d-block">oke</strong>
                        <small class="text-muted">434343</small>
                    </div>
                </div>

                <div class="thumbnail rounded mt-4" style="overflow: hidden">
                        <img src="#" class="w-100" alt="...">
                        <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17affada31b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17affada31b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2295.5265625%22%3E%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="w-100" alt="...">
                </div>

                <div class="body mt-4">
AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg
                    <div class="kategori border-top pt-3">
                            <a href="#" class="badge badge-primary p-2 rounded-pill"></a>
                    </div>

                    <hr class="d-lg-none d-block">
                </div>
            </div>
            <div class="col-lg-4">
                <x-card>
                    <h1 class="font-weight-bold"></h1>
                    <p class="font-weight-bold">Terkumpul dari Rp. 90000000</p>
                    <div class="progress" style="height: .3rem;">
                        <div class="progress-bar" role="progressbar" style=""></div>
                    </div>
                    <div class="d-flex justify-content-between mt-1">
                        <p>60% tercapai</p>
                        <p>selesai 555</p>
                        <p>tersisa 555</p>
                    </div>

                    <div class="donasi mt-2 mb-4">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Donasi Sekarang</a>
                    </div>
        
                    <h4 class="font-weight-bold">Donatur saya</h4>
                    <ul class="nav nav-pills mb-3 daftar-donasi" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-waktu-tab" data-toggle="pill" href="#pills-waktu"
                                role="tab" aria-controls="pills-waktu" aria-selected="true">Waktu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-jumlah-tab" data-toggle="pill" href="#pills-jumlah"
                                role="tab" aria-controls="pills-jumlah" aria-selected="false">Jumlah</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-waktu" role="tabpanel"
                            aria-labelledby="pills-waktu-tab">
                       
                            <div  class="mt-1" >
                                <p class="font-weight-bold mb-0">5535</p>
                                <p class="font-weight-bold mb-0">444</p>
                                <p class="font-weight-bold mb-0">Rp. 900000</p>
                                <p class="text-muted mb-0">dsd</p>
                            </div>
                            <p class="text-muted mb-0">Belum tersedia</p>
                        </div>
                        <div class="tab-pane fade" id="pills-jumlah" role="tabpanel"
                            aria-labelledby="pills-jumlah-tab">
                          
                            <div class="mt-1" >
                                <p class="font-weight-bold mb-0">ccc</p>
                                <p class="font-weight-bold mb-0">ss</p>
                                <p class="font-weight-bold mb-0">Rp. 555</p>
                                <p class="text-muted mb-0">4444</p>
                            </div>
                            <p class="text-muted mb-0">Belum tersedia</p>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</div>
@endsection