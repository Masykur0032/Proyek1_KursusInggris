@extends('layouts.app')
@section('title', 'Show Post Galeri')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Posts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('galeris.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $galeri->image }}" width="500px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                {{ $galeri->keterangan }}
            </div>
        </div>
    </div>
@endsection