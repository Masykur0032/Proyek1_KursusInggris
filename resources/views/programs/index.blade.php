@extends('layouts.app')
@section('title', 'Program')
@include('layouts.nav')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>NTC Kursus Inggris | Program</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('programs.create') }}"> Create New Post</a>
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
            <th>Title</th>
            <th>Image</th>
            <th>Body</th>
            <th>Action</th>
        </tr>
        @foreach ($programs as $program)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $program->title }}</td>
            <td><img src="/image/{{ $program->image }}" width="100px"></td>
            <td>{{ Str::limit($program->body, 50,'...') }}</td>
            <td>
                <form action="{{ route('programs.destroy',$program->id) }}" method="POST">
     
                    <a class="btn btn-info" style="width: 80px; border: 1px solid white;" href="{{ route('programs.show',$program->id) }}">Show</a> <br>
      
                    <a class="btn btn-primary" style="width: 80px; border: 1px solid white;" href="{{ route('programs.edit',$program->id) }}">Edit</a> <br>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" style="width: 80px; border: 1px solid white;" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $programs->links() !!}
        
@endsection