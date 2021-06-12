@extends('layouts.app')
@section('title', 'Beranda')
@include('layouts.nav')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>NTC Kursus Inggris | Beranda</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
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
            <th>Link</th>
            <th>Image</th>
            <th>Body</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->link }}</td>
            <td><img src="/image/{{ $post->image }}" width="100px"></td>
            <td>{{ Str::limit($post->body, 50,'...') }}</td>
            <td>{{ Str::limit($post->detail, 50,'...') }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
     
                    <a class="btn btn-info" style="width: 80px; border: 1px solid white;" href="{{ route('posts.show',$post->id) }}">Show</a> <br>
      
                    <a class="btn btn-primary" style="width: 80px; border: 1px solid white;" href="{{ route('posts.edit',$post->id) }}">Edit</a> <br>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" style="width: 80px; border: 1px solid white;" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $posts->links() !!}
        
@endsection