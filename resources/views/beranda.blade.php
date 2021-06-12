@extends('layouts.template')

@section('title', 'Beranda')
@section('banner', 'BERANDA')

@section('content')
@foreach ($post as $post)
<table id="tblcontent" align="center">
    <tr>
        <td>
            <p class="cntntitle">
            <a style="color:black" href="{{ $post->link }}">{{ $post->title }}</a>
            <center><hr style="color: #4D4378; width:99%; opacity:100%" size="5"></center>
            </p>
            <p class="cntnsecond">published on {{ $post->created_at->diffForHumans() }}</p>
            <p class="cntn">
            {!! nl2br($post->body) !!}
            </p>
            <center><img style="width: auto; height: 300px;" src="/image/{{ $post->image }}"></center>
            <p class="cntn">
            {!! nl2br($post->detail) !!}
            </p>
        </td>
    </tr>
</table>
<br>
@endforeach

@endsection