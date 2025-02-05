@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-base-200">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-primary">{{ __('Reset Password') }}</h2>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="form-control">
                    <label for="email" class="label">
                        <span class="label-text">{{ __('Email') }}</span>
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" class="input input-bordered w-full">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-control mt-4">
                    <label for="password" class="label">
                        <span class="label-text">{{ __('Password') }}</span>
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="input input-bordered w-full">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-control mt-4">
                    <label for="password_confirmation" class="label">
                        <span class="label-text">{{ __('Confirm Password') }}</span>
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input input-bordered w-full">
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary w-full">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
