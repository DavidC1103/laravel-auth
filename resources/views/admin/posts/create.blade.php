@extends('layouts.admin')



@section('content')
<div class="p-4">
    <h2 class="fs-4 text-secondary my-4">
        Home Create
    </h2>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Descrizione</label>
            <textarea class="form-control @error('text') is-invalid @enderror" name="text" id="text" cols="10" rows="10"></textarea>
            @error('text')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>

@endsection
