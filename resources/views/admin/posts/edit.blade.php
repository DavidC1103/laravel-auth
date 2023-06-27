@extends('layouts.admin')

@section('content')
<div class="p-4">
    <h2 class="fs-4 text-secondary my-4">
        Home Edit
    </h2>
    <form action="{{ route('admin.posts.update')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Descrizione</label>
            <textarea class="form-control" name="text" id="text" cols="10" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
