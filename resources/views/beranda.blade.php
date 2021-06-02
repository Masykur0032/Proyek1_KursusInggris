@extends('layouts.template')

@section('title', 'Beranda')
@section('banner', 'BERANDA')

@section('content')
@foreach ($post as $post)
<p class="cntntitle">
<a style="color:black" href="{{ $post->link }}">{{ $post->title }}</a>
</p>
<p class="cntnsecond">published on {{ $post->created_at->diffForHumans() }}</p>
<p class="cntn">
{!! nl2br($post->body) !!}
</p>
<center><img style="width: auto; height: 300px;" src="/image/{{ $post->image }}"></center>
<p class="cntn">
{!! nl2br($post->detail) !!}
</p>
<center><hr style="color: #D8005F; width:99%;" size="5"></center> 
@endforeach

@endsection