@extends('partials.layout')

@section('title', 'Create Tag')

@section('content')
    <div class="w-2/3 mx-auto card bg-base-300">
        <div class="card-body">
            <h2 class="card-title">Create New Tag</h2>
            @include('tags.form')
        </div>
    </div>
@endsection
