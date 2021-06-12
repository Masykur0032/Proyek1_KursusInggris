<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>NTC Kursus Inggris: @yield('title')</title>
    <style>
        body{
            background-color: #9587CF;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        #tblcontent{
            border-radius: 5px 5px;
            background: rgba(255, 255, 255, 0.7);
            width: 99%;
        }
        .cntn{
            text-align: justify;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 20px;
            font-family:'Adobe Devagnari';
        }
        .cntntitle{
            text-align: justify;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 22px;
            font-weight: bold;
            font-family:'Adobe Devagnari';
        }
        .cntnsecond{
            text-align: justify;
            padding-left: 10px;
            padding-right: 10px;
            color: #D8005F;
            font-size: 15px;
            font-family:'Adobe Devagnari';
            line-height: 0;
        }
        a:link {
        text-decoration: none;
        }
        a:visited {
        color: white;
        }
        a:hover {
        color: white;
        font-weight: bold;
        }
    </style>
</head>
<body class="title">
    @include('layouts.nav')
    <br>
    <table width="100%" bgcolor="white">
        <tr align="right">
            <th width="50%"><font style="font-size:35px; font-family:'Adobe Devagnari'"><i>NTC Kursus Inggris</i></font></th>
            <td align="left" width="50%" rowspan="2"><font style="font-size:50px; font-family:'Adobe Devagnari'"><b>&nbsp;| @yield('banner')</b></font></td>
        </tr>
        <tr>
            <td align="right"><font style="font-size:20px; font-family:'Adobe Devagnari'"><i>The Fastest Way to Master English</i></font></td>
        </tr>
    </table>

    <br>

    @yield('content')
    
    <!--
    <table id="tblcontent" align="center">
        <tr>
            <td>
                @yield('content')
            </td>
        </tr>
    </table>
    -->

    <table style="width:100%; background-color:#D8005F;">
        <tr>
            <td width="30%">&emsp;<a href="https://docs.google.com/forms/d/e/1FAIpQLScW7viahhnBqPd3k2Xgx3ztQBCU5aIlr7WyEyVWNLZUAClytw/closedform">Formulir</a></td>
            <td width="30%">&emsp;<a href="program">Program</a></td>
            <td width="30%">&emsp;<a href="profil">Profil</a></td>
        </tr>
        <tr>
            <td>&emsp;<a href="galeri">Galeri</a></td>
            <td>&emsp;<a href="contact">Contact Us</a></td>
            <td>&emsp;<a href="http://www.ntckursusinggris.com/p/toefl-online.html">TOEFL Online</a></td>
        </tr>
        <tr>
            <td>&emsp;<a href="/">Home</a></td>
            <td>&emsp;<a href="https://www.facebook.com/pg/KursusBahasaNTC/photos/?ref=page_internal">Fanspage</a></td>
            <td>&emsp;<a href="https://www.facebook.com/pg/KursusBahasaNTC/photos/?ref=page_internal">Album</a></td>
        </tr>
    </table>
    @include('layouts.footer')
</body>
</html>