<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tryout KAWAL PTNKU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://simulasi-tes.bppp.kemdikbud.go.id/_assets/css/icheck-bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BB3NLM7RX6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-BB3NLM7RX6');
    </script>
    {{--<script type="text/javascript" src="https://simulasi-tes.bppp.kemdikbud.go.id/_assets/js/jquery/jquery.2.1.1.min.js"></script>
    <script src="https://simulasi-tes.bppp.kemdikbud.go.id/_assets/js/jquery.timer.js"></script>--}}
</head>
<body>

<!-- HEADER -->
<div class="container-fluid text-dark fixed-header" style="background:#fff; height:155px;position:fixed;top:0;left:0;right:0;">
    <div class="row">
        <div class="col pl-5 pt-1">
            <table>
                <tr>
                    <td>
                        <img style="margin:5px;height:150px;margin-top:-15px" src="{{ asset('assets/images/logo_01.png') }}">
                    </td>
                    <td>
                        <h4 class="text-primary">KAWAL PTN-KU</h4>
                        <h6 class="text-dark"><i>Kawal Terus PTN Impian Anda Bersama Kami</i></h6>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col pl-5 pt-1 mt-4 pr-5 text-right">
            <table align="right">
                <tr>
                    <td style="vertical-align:top">
                        <div>
                            <small>User 123<br>
                                <a href="/">Logout</a>
                            </small>
                        </div>
                    </td>
                    <td>
                        <div class="pl-1 pr-1 pt-1 pb-1" style="background:#fff;border-radius:2px;border:1px solid #326698">
                            <i class="fa fa-graduation-cap fa-flip-horizontal"></i>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- END HEADER -->

<div class="container-fluid fadeInDown mb-5" style="margin-top:100px;">
    @yield('content')
</div>

</body>
</html>
