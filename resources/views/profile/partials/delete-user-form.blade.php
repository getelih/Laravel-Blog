<section>
    <header>
        <h2 class="text-lg font-medium text-primary">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm text-secondary">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <label for="delete-modal" class="btn btn-error">{{ __('Delete Account') }}</label>

    <input type="checkbox" id="delete-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <h2 class="text-lg font-medium text-primary">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>
            <p class="mt-1 text-sm text-secondary">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <form method="post" action="{{ route('profile.destroy') }}" class="mt-6">
                @csrf
                @method('delete')

                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-primary">{{ __('Password') }}</label>
                    <input type="password" name="password" id="password" class="input input-bordered w-full mt-2" placeholder="{{ __('Password') }}" required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-6 flex justify-end">
                    <label for="delete-modal" class="btn btn-secondary">{{ __('Cancel') }}</label>
                    <button type="submit" class="btn btn-error ml-3">{{ __('Delete Account') }}</button>
                </div>
            </form>
        </div>
    </div>
</section>
