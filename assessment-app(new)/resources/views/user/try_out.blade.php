@extends('user.layout.header')
@section('title','ASSIGNMENT')

@section('content')
<div class="row">
    <div class="col-sm-12" style="border:0px solid red">
        <div class="text-left pt-3 pb-5 mb-2" id="formContent" style="background-size: 300px;background-image: url('https://simulasi-tes.bppp.kemdikbud.go.id/images/logo-w.png');background-repeat: no-repeat;background-position: top right;">
            <div class="row row-atas">
                <div class="col-sm-4"><span style="font-size:18px">Soal nomor</span> <span style="font-size:20px" id="noSoal">1</span></div>
                <div class="col-sm-8 cont-btn-informasi">
                    <button class="btn-informasi btn btn-primary btn-round m" data-toggle="modal" data-target="#infoSoal" style="border-radius:30px;font-size:12px;"><i class="fa fa-info-circle d-sm-none"></i><span class="d-none d-sm-inline-block">INFORMASI SOAL</span></button>
                    <button class="btn-informasi btn btn-outline-secondary btn-round" style="border-radius:30px;font-size:12px;">Sisa Waktu : <b><span id="countdown">00:00</span></b></button>
                </div>
            </div>
            <div class="row pb-2 row-atas">
                <div class="col-sm-6"><small>Ukuran font soal:</small> <span style="font-size:12px" class="ml-2 mr-1 cfont" id="c1">A</span> <span style="font-size:16px" class="ml-2 mr-1 cfont"  id="c2">A</span> <span style="font-size:20px" class="ml-2 mr-1 cfont" id="c3">A</span></div>
                <div class="col-sm-6 mt-2 mataujian">
                   
                </div>
            </div>
            <div class="row pl-3 pr-3 pb-2 mb-1">
                <div class="col"  style="border-bottom:1px solid #eee"></div>
            </div>
            <!-- isi soal -->
            <div class="row pl-3 pr-3 pb-2 mb-2">
                <!-- Div untuk foto profil pengguna -->
                <div class="col-sm-2">
                    <!-- Isi dengan tag img untuk menampilkan foto profil -->
                    <img src="https://simulasi-tes.bppp.kemdikbud.go.id/no_user.jpg" alt="Logo" style="width:100%;border:1px solid #eee;padding:0px;border-radius:5px">
                    <div class="text-center mt-1 p-2" style="border:1px solid #eee; border-radius:5px;">
                        <div style="font-size:20px; font-family:courier;">
                            </strong>
                        </div>
                        <div style="font-size:14px;">
                            <strong>User 123</strong>
                        </div>
                    </div>
                    <div class="text-center mt-1 p-2" style="border:1px solid #eee; mataujian">
                        Kemampuan Memahami Bacaan dan Menulis
                    </div>
                    <div class="text-left pt-2 pl-1" style="border:1px solid #eee;">
                        <form id="formJawaban">
                            <!-- Form jawaban -->
                            <span class="d-none" id=""></span>
                            <span class="d-none" id=""></span>
                            <input type="hidden" name="jawaban_no[]" id="" value="">
                            <div id="jawaban-no-" class="btn  btn-outline-dark  btn-sm mb-2 mr-2 btn-lihat-soal" style="width:30px;height:30px;padding-top:5px;position:relative" onClick="lihatSoal('')">1
                                <div class="badge badge-light d-none" style="height:15px;width:15px;font-size:9px;border-radius:50%;position:absolute;top:-5px;right:-5px;border:1px solid #000;background:#fff">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div id="" class="badge badge-light d-none" style="height:15px;width:15px;font-size:9px;border-radius:50%;position:absolute;top:-5px;right:-5px;border:1px solid #000;background:#fff">
                                </div>
                            </div>
                            <div id="jawaban-no-" class="btn  btn-outline-dark  btn-sm mb-2 mr-2 btn-lihat-soal" style="width:30px;height:30px;padding-top:5px;position:relative" onClick="lihatSoal('')">2
                                <div class="badge badge-light d-none" style="height:15px;width:15px;font-size:9px;border-radius:50%;position:absolute;top:-5px;right:-5px;border:1px solid #000;background:#fff">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div id="" class="badge badge-light d-none" style="height:15px;width:15px;font-size:9px;border-radius:50%;position:absolute;top:-5px;right:-5px;border:1px solid #000;background:#fff">
                                </div>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
                <div class="col p-3 "  id="isisoal" style="border:2px solid #eee; border-top:10px solid #eee;">
                    <form id="formData" name="formData" class="form-horizontal" method="post" action="">
                            <input type="hidden" name="_method" value="POST">
                            <input type="hidden" id="subtest_id" name="subtest_id" value="3">
                            <input type="hidden" id="assessment_id" name="assessment_id" value="1">
                            <div class="soal-soal row" id="soal-no-1" style="flex">
                                <div class="col-lg-6 cont-soal" style="padding-right: 20px; height: 511.8px; overflow: auto;">
                                    <div style="text-align: justify;">
                                        <span style="font-size: 0.875rem;">
                                            ¹Tujuan pendidikan antikorupsi adalah membuat siswa mengenal lebih dini hal-hal yang berkenaan dengan korupsi, sehingga tercipta generasi yang sadar dan memahami bahaya korupsi. ²Model penyelenggaraan pendidikan antikorupsi bisa diterapkan dengan tiga cara, yaitu model terintegrasi dalam mata pelajaran, melalui ekstrakurikuler, dan model pembudayaan. ³Model pembudayaan dilakukan melalui pembiasaan nilai kejujuran dalam seluruh aktivitas kehidupan siswa. ⁴Oleh karena itu, perubahan dibutuhkan dalam menyemaikan kebaikan melalui lembaga pendidikan. ⁵Diperlukan komitmen yang kuat dan langkah konkret dalam menanamkan nilai kejujuran pada diri generasi muda agar supaya terbentuk pribadi mulia, jujur, dan bertanggung jawab terhadap amanat yang diberikan. ⁶Dengan demikian, sekolah memilikitugas besar dalam merealisasikan hal itu. ⁷Semua dapat berjalan sesuai harapan apabila ada peran nyata dari pihak sekolah, dukungan pemerintah, serta partisipasi aktif masyarakat.                                        </span>
                                    </div>
                                    <div style="text-align: right;">
                                        <span style="font-size: 0.875rem;">
                                            "Diadaptasi dari "
                                            <i>https://dindik-jatimprov.go.id/</i>
                                        </span>
                                    </div>
                                </div>
                            <div class="col-lg-6" style="border-left:5px dotted #eee;">
                                Kata itu pada kalimat (6) merujuk pada ....
                                <table class="table" style="margin-top:0px">
                                    <tbody>
                                        <tr>
                                            <td style="width: 20px; border:0px;padding:0px">
                                                <div class="radio icheck-primary">
                                                    <input id="pilihan_1_0" name="31PBM1" type="radio" value="A">
                                                    <label for="pilihan_1_0"></label>
                                                </div>
                                            </td>
                                            <td style="padding-top:15px;;border: 0px; padding:0px;padding-top: 5px">
                                                "Penanaman nilai kejujuran"
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px; border:0px;padding:0px">
                                                <div class="radio icheck-primary">
                                                    <input id="pilihan_1_1" name="31PBM1" type="radio" value="B">
                                                    <label for="pilihan_1_1"></label>
                                                </div>
                                            </td>
                                            <td style="padding-top:15px;;border: 0px; padding:0px;padding-top: 5px">
                                                "Penanaman nilai kejujuran"
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px; border:0px;padding:0px">
                                                <div class="radio icheck-primary">
                                                    <input id="pilihan_1_2" name="31PBM1" type="radio" value="C">
                                                    <label for="pilihan_1_2"></label>
                                                </div>
                                            </td>
                                            <td style="padding-top:15px;;border: 0px; padding:0px;padding-top: 5px">
                                                "Penanaman nilai kejujuran"
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20px; border:0px;padding:0px">
                                                <div class="radio icheck-primary">
                                                    <input id="pilihan_1_3" name="31PBM1" type="radio" value="D">
                                                    <label for="pilihan_1_3"></label>
                                                </div>
                                            </td>
                                            <td style="padding-top:15px;;border: 0px; padding:0px;padding-top: 5px">
                                                "Penanaman nilai kejujuran"
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row pl-3 pr-3 pb-1 mb-0">
                <div class="col" style="border-bottom:1px solid #eee"></div>
            </div>
            <div class="row pb-0 pt-2 mt-2 btn-bawah">
                <div class="col text-center"  style="">
                    <button class="btn btn-outline-danger btn-round btn-md btn-navigasi" style="border-radius:30px;"><i class="fa fa-chevron-circle-left"></i> <span class="d-none d-sm-inline-block">Soal sebelumnya</span></button>
                </div>
                <div class="col text-center"  style="">
                    <button class="btn btn-outline-warning btn-round btn-md btn-navigasi" style="border-radius:30px;"><input type="checkbox" id="c_ragu_ragu" value=""/> <span class="d-none d-sm-inline-block">Ragu-ragu</span></button>
                </div>
                <div class="col text-center"  style="">
                    <button class="btn btn-outline-primary btn-round btn-md btn-navigasi" style="border-radius:30px;" onclick="window.location.href = '{{ route('user.hasil') }}';">
                        <span class="d-none d-sm-inline-block">Soal berikutnya</span>
                        <i class="fa fa-chevron-circle-right"></i>
                    </button>                    
                </div>
            </div>            
    </div>
</div>

            
                        

<!-- Modal Waktu Habis -->
<div class="modal fadeIn" id="timeoutDialog" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body text-center pb-2 pt-5">
                <h5 class="modal-title" style="text-align:center">PERHATIAN !!</h5>
                <p>Waktu tes sudah habis !</p>
            </div>
            <div class="modal-footer text-center">
                <button class="btn btn-danger" onClick="selesaikanTes()">Ok, Lanjutkan !</button>
            </div>
    </div>
</div>

    <script type="text/javascript" src="https://simulasi-tes.bppp.kemdikbud.go.id/_assets/js/jquery/jquery.min.js"></script>
    @endsection
