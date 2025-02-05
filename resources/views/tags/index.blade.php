@extends('partials.layout')

@section('title', 'Tags')

@section('content')
    <a href="{{ route('tags.create') }}" class="btn btn-primary">New Tag</a>
    <div class="my-4 text-center">
        {{ $tags->links() }}
    </div>
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr class="hover">
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->created_at }}</td>
                    <td>{{ $tag->updated_at }}</td>
                    <td>
                        <div class="join">
                            <a href="{{ route('tags.edit', ['tag' => $tag]) }}" class="join-item btn btn-warning">Edit</a>
                            <button form="delete-tag-{{ $tag->id }}" class="join-item btn btn-error">Delete</button>
                        </div>
                        <form id="delete-tag-{{ $tag->id }}" action="{{ route('tags.destroy', ['tag' => $tag]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Name</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tfoot>
    </table>
    <div class="my-4 text-center">
        {{ $tags->links() }}
    </div>
@endsection
