@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card bg-base-100 dark:bg-gray-800 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-primary">{{ __('Dashboard') }}</h2>
                <div class="alert alert-success shadow-lg p-4 text-lg">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
