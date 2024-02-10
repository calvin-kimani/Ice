<form action="" wire:submit="save" class="space-y-3">
    <div class="container">
        <label class="font-bold text-lg block" for="title">Title</label>
        <x-input-text wire:model="form.title" name="title" id="title" value="{{ old('form.title') }}" />
        <div>
            @error('form.title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="container">
        <label class="font-bold text-lg block" for="description">Description</label>
        <x-textarea wire:model="form.description" name="description" id="description" value="{{ old('form.description') }}" />
        <div>
            @error('form.description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>
    
    <div class="container">
        <label class="font-bold text-lg block" for="notes">Notes</label>
        <x-textarea wire:model="form.notes" name="notes" id="notes" value="{{ old('form.notes') }}"/>
        <div>
            @error('form.notes') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mt-8">
        <x-button-submit />
    </div>
</form>