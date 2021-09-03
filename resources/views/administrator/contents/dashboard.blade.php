<!-- template -->
@extends('administrator.layouts.dash')
<!-- judul -->
@section('judul', 'Dashboard')
{{-- isi contents --}}
@section('contents')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-rocket icon-gradient bg-tempting-azure"></i>
                </div>
                <div>Beranda
                    <div class="page-title-subheading">Beranda aplikasi khusus hanya untuk yang mempunyai akses.</div>
                </div>
            </div>
        </div>
    </div>

    {{-- end header --}}

    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <h6 class="widget-subheading">Dana</h6>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers mb-0 w-100">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">
                                        <small class="opacity-5">Rp.</small>
                                        140.000.000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <h6 class="widget-subheading">Anggota Putra</h6>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers mb-0 w-100">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">
                                        {{-- <small class="opacity-5">Rp.</small> --}}
                                        40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-left card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <h6 class="widget-subheading">Anggota Putri</h6>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers mb-0 w-100">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">
                                        {{-- <small class="opacity-5">Rp.</small> --}}
                                        15
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
