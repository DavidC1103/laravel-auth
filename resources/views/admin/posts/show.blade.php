@extends('layouts.admin')

@section('content')
<div class="p-4">
    <h2 class="fs-4 text-secondary my-4">
        Home Show
    </h2>
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title"><strong>Titolo:</strong> {{$post['title']}}</h5>
            <p class="card-text"><strong>Data:</strong> {{$post->date}}</p>
        </div>

        <div class="card-body">
            <p><strong>Text:</strong> {{$post->text}}</p>
            <a href="{{route('admin.posts.edit', $post)}}" class="card-link btn btn-success" style="width: 10rem">Edit</a>
        </div>
  </div>
</div>
@endsection
