@extends('layouts.template')

@section('title', 'Program')
@section('banner', 'PROGRAM')

@section('content')

@foreach ($program as $program)
<table id="tblcontent" align="center">
    <tr>
        <td>
            <p class="cntntitle">
                {{ $program->title }}
                <center><hr style="color: #4D4378; width:99%; opacity:100%" size="5"></center>
            </p>
            <p class="cntn">
            {!! nl2br($program->body) !!}
            </p>
            <center><img style="width: auto; height: 300px;" src="/image/{{ $program->image }}"></center>
            <br>
        </td>
    </tr>
</table>
<br>
@endforeach

<center style="font-size: 20px;font-family:'Adobe Devagnari'; font-weight: bold;">
Untuk informasi lebih lanjut langsung ke kantor NTC Tulungagung Cabang Kampung Inggris.<br>
Alamat : Srigading, Bolorejo, Kauman, Tulungagung (Barat pasar Kliwon 500 meter) atau hubungi<br>
Telp/WA : 0858 5636 2225<br>
Email : adm.ntctulungagung@gmail.com
</center>

@endsection