@extends('layouts.admin')

@section('content')
<div class="p-4">
    <h2 class="fs-4 text-secondary my-4">
        Home Posts
    </h2>

    <table class="table dc-table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
              <td>{{ $post->id}}</td>
              <td>{{ $post->title}}</td>
              <td>{{ $post->date}}</td>
              <td>
                <button class="btn btn-primary"><a href="{{route('admin.posts.show', $post)}}">Show</a></button>
                <button class="btn btn-success"><a href="{{route('admin.posts.edit', $post)}}">Edit</a></button>
                <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di voler cancellare {{$post->title}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><a href="{{route('admin.posts.destroy', $post->id)}}">Delete</a></button>
                  </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>

@endsection
