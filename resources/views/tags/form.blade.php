<form action="{{ isset($tag) ? route('tags.update', $tag) : route('tags.store') }}" method="POST">
    @csrf
    @isset($tag)
        @method('PUT')
    @endisset

    <label class="w-full form-control">
        <div class="label">
            <span class="label-text">Tag Name</span>
        </div>
        <input name="name" type="text" placeholder="Tag name" value="{{ old('name', $tag->name ?? '') }}"
               class="w-full input input-bordered @error('name') input-error @enderror" />
        @error('name')
            <span class="label-text-alt text-error">{{ $message }}</span>
        @enderror
    </label>

    <input type="submit" class="btn btn-primary mt-4" value="{{ isset($tag) ? 'Update' : 'Create' }}">
</form>
