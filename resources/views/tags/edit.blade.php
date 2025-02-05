@extends('partials.layout')

@section('title', 'Edit Tag')

@section('content')
    <div class="w-2/3 mx-auto card bg-base-300">
        <div class="card-body">
            <h2 class="card-title">Edit Tag</h2>
            @include('tags.form', ['tag' => $tag])
        </div>
    </div>
@endsection
