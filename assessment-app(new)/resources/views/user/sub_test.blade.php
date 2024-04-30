@extends('user.layout.header')
@section('title','ASSIGNMENT')

@section('content')
<div class="row">
    <div class="col-sm-12" style="border:0px solid red">
        <div class="text-left pt-3 pb-5 mb-2" id="formContent" style="background-size: 300px;background-image: url('https://simulasi-tes.bppp.kemdikbud.go.id/images/logo-w.png');background-repeat: no-repeat;background-position: top right;">
            <div class="row row-atas">
                <div class="col-sm-4">
                    <span style="font-size:20px">TRYOUT 01 KAWAL PTN-KU</span> 
                    <span style="font-size:20px" id="noSoal">1</span>
                </div>
            </div>
            <div class="row pb-2  row-atas">
                <div class="col-sm-6">
                    <b class="text-success">23 April 2023 (Mulai Pukul 21:00 )</b> 
                    <b style="font-size:20px">-</b> 
                    <b class="text-danger">30 April 2023 (Berakhir Pukul 23:59 )</b>
                </div>
            </div>
            <div class="row pl-3 pr-3 pb-2 mb-1">
                <div class="col"  style="border-bottom:1px solid #eee"></div>
            </div>
            <!-- isi soal -->
            <div class="row pl-3 pr-3 pb-2 mb-2">
                <div class="col p-3 "  id="isisoal" style="border:2px solid #eee; border-top:10px solid #eee;">
                    <p align="left">
                        <a class="btn btn-outline-danger btn-round btn-md" style="border-radius:30px;" href="http://127.0.0.1:8000/assessment/index">
                            <i class="fa fa-chevron-circle-left"></i> 
                            <span class="d-none d-sm-inline-block">Kembali</span>
                        </a>
                    </p>
                    <table class="table">
                        <thead>
                            <tr style="font-weight: bold">
                                <td>Komponen Ujian</td>
                                <td align="center">Waktu Ujian</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kemampuan Penalaran Umum (PU)</td>
                                <td align="center">0.5 menit</td>
                                <td>
                                    <a class="btn btn-outline-danger btn-round btn-sm" style="border-radius:30px;" href="#">SUBTES (PU) SUDAH SELESAI</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengetahuan dan Pemahaman Umum (PPU)</td>
                                <td align="center">0.5 menit</td>
                                <td>
                                    <a class="btn btn-outline-danger btn-round btn-sm" style="border-radius:30px;" href="#">SUBTES (PPU) SUDAH SELESAI</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kemampuan Memahami Bacaan dan Menulis (PBM)</td>
                                <td align="center">25 menit</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-round btn-sm" style="border-radius:30px;" href="{{ route('user.try_out') }}">MULAI UJIAN TRYOUT <i class="fa fa-chevron-circle-right"></i></a>
                                </td>
                            </tr>
                            <!-- tambahkan baris sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row pb-0 pt-2 mt-2">
                <b>Catatan: </b>
                <ul>
                    <li>
                        <i> Tombol MULAI UJIAN TRYOUT akan AKTIF setelah waktu ujian sudah mulai: <b class="text-success">23 April 2023  (Pukul 21:00 )</b></i>
                    </li>
                    <li>
                        <i> Ketika Anda Klik "MULAI UJIAN TRYOUT", maka waktu akan mulai berjalan sesuai Waktu Ujian Setiap Subtes</i>
                    </li>
                </ul>
            </div>

            <div class="row pl-3 pr-3 pb-1 mb-0">
                <div class="col"  style="border-bottom:1px solid #eee"></div>
            </div>

            <div class="row pb-0 pt-2 mt-2 btn-bawah">
                <div class="col text-center"  style=""></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://simulasi-tes.bppp.kemdikbud.go.id/_assets/js/jquery/jquery.min.js"></script>
    @endsection
