<section>
    <header>
        <h2 class="text-lg font-medium text-primary">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm text-secondary">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="current_password" class="block text-sm font-medium text-primary">
                {{ __('Current Password') }}
            </label>
            <input id="current_password" name="current_password" type="password" class="input input-bordered w-full mt-2" autocomplete="current-password" required />
            @error('current_password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-primary">
                {{ __('New Password') }}
            </label>
            <input id="password" name="password" type="password" class="input input-bordered w-full mt-2" autocomplete="new-password" required />
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-primary">
                {{ __('Confirm Password') }}
            </label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="input input-bordered w-full mt-2" autocomplete="new-password" required />
            @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <div class="alert alert-success shadow-lg p-2 text-sm">
                    <span>{{ __('Saved.') }}</span>
                </div>
            @endif
        </div>
    </form>
</section>
