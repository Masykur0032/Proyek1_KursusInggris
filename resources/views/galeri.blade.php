@extends('layouts.template')

@section('title', 'Galeri')
@section('banner', 'GALERI')

@section('content')

<table style="width: 90%; background-color:transparent;" align="center">
<tr>
    <td>
        <div class="row">
            @foreach ($galeri as $galeri)
            <div class="col-md-4">
                <div class="card mb-4">
                    <p class="cntn" style="text-align:center;">
                        @if($galeri->image)
                            <img style="width: 100%; height: 300px; object-fit: cover; object-position: center;" src="/image/{{ $galeri->image }}">
                        @endif
                        {{ $galeri->keterangan }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </td>
</tr>
</table>

@endsection