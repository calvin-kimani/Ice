@props(['name'])

<div> 
    <input type="text" class="bg-accent h-10 my-1 outline-none rounded-lg p-2 focus:border focus:border-main" name="{{ $name }}" {{ $attributes }}> 
    <div>
        @error($name) <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
</div>