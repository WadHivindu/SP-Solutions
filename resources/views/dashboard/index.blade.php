@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>News</h2>
        <a href="{{ route('news.create') }}" class="btn btn-success mb-2">Create Post</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <input type="checkbox" class="toggle-active" data-id="{{ $post->id }}"
                                {{ $post->is_active ? 'checked' : '' }} />
                        </td>
                        <td>
                            <a href="{{ route('news.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form class="delete-form" action="{{ route('news.destroy', $post->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-sm btn-danger delete_btn">{{ __('Delete') }}</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('js')
@endpush

@push('custom-scripts')
    <script>
    
    </script>
@endpush
