@extends('layouts.app')
@section('title', 'Galeri')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>NTC Kursus Inggris | Galeri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('galeris.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        @foreach ($galeris as $galeri)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $galeri->image }}" width="100px"></td>
            <td>{{ $galeri->keterangan }}</td>
            <td>
                <form action="{{ route('galeris.destroy',$galeri->id) }}" method="POST">
     
                    <a class="btn btn-info" style="width: 80px; border: 1px solid white;" href="{{ route('galeris.show',$galeri->id) }}">Show</a> <br>
      
                    <a class="btn btn-primary" style="width: 80px; border: 1px solid white;" href="{{ route('galeris.edit',$galeri->id) }}">Edit</a> <br>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" style="width: 80px; border: 1px solid white;" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $galeris->links() !!}
        
@endsection