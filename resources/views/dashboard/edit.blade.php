@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit News Post</h2>

        <form action="{{ route('news.update', $News->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $News->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $News->description }}</textarea>
            </div>          
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
