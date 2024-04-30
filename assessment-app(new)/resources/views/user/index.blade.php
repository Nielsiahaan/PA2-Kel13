@extends('user.layout.header')
@section('title', 'ASSIGNMENT')

@section('content')
<div class="row">
    <div class="col-sm-12" style="border: 0px solid red;">
        <div class="text-left pt-3 pb-5 mb-2" id="formContent" style="background-size: 300px; background-image: url('https://simulasi-tes.bppp.kemdikbud.go.id/images/logo-w.png'); background-repeat: no-repeat; background-position: top right;">
            <div class="row row-atas">
                <div class="col-sm-4">
                    <span style="font-size: 20px;">DAFTAR TRYOUT AKTIF </span>
                    <span style="font-size: 20px; color: #0d0d0d;">KAWAL PTNKU</span>
                </div>
            </div>
            <div class="row pb-2  row-atas"></div>
            <div class="row pl-3 pr-3 pb-2 mb-1">
                <div class="col" style="border-bottom: 1px solid #eee;"></div>
            </div>
            <!-- isi soal -->
            <div class="row pl-3 pr-3 pb-2 mb-2">
                <div class="col p-3" id="isisoal" style="border: 2px solid #eee; border-top: 10px solid #eee;">
                    <table class="table">
                        <thead>
                            <tr style="font-weight: bold;">
                                <td>TRYOUT</td>
                                <td align="center">TANGGAL PELAKSANAAN</td>
                                <td>AKSI</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TRYOUT 01 KAWAL PTN-KU</td>
                                <td align="center">
                                    <b class="text-success">23 April 2023 (Mulai Pukul 21:00 )</b>
                                    <br>
                                    <b style="font-size: 20px;">-</b>
                                    <br>
                                    <b class="text-danger">30 April 2023 (Berakhir Pukul 23:59 )</b>
                                </td>
                                <td>
                                    <a class="btn btn-outline-primary btn-round btn-lg" style="border-radius: 30px;" href="{{ route('user.sub_test') }}">LIHAT UJIAN TRYOUT <i class="fa fa-chevron-circle-right"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row pl-3 pr-3 pb-1 mb-0">
                <div class="col" style="border-bottom: 1px solid #eee;"></div>
            </div>

            <div class="row pb-0 pt-2 mt-2 btn-bawah">
                <div class="col text-center"></div>
            </div>
        </div>
    </div>

</div>
@endsection
