@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-base-200">
    <div class="card w-full sm:max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-primary">{{ __('Confirm Password') }}</h2>
            <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div class="form-control">
                    <label for="password" class="label">
                        <span class="label-text">{{ __('Password') }}</span>
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" class="input input-bordered w-full">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Button -->
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary w-full">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
