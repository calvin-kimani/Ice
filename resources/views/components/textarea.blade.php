@props(['name'])

<div>
    <textarea class="bg-accent outline-none rounded-lg focus:border focus:border-main p-2 w-full" name="{{ $name }}" {{ $attributes }}>
    </textarea>

    <div>
        @error($name) <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
</div>