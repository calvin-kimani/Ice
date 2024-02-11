<div class="p-2 overflow-y-auto w-full h-full">
	<form action="" class="bg-accent h-10 flex items-center space-x-1 rounded-lg mt-2 p-2 text-sm">
		<x-phosphor-magnifying-glass-bold class="w-6 h-6 float-left"/>

		<input type="text" placeholder="Search" class="w-full h-full bg-accent outline-none mx-2">
	</form>

	<ul class="mt-8 font-bold space-y-1">
		@foreach($docs as $doc)
		<li class="h-10 w-full">
			<a href="{{ route('docs.show', $doc->id) }}" wire:navigate class="block w-full h-full p-2 @if(Request::is('docs/' . $doc->id)) bg-accent border-l border-main border-l-2 @endif hover:bg-accent text-main flex items-center text-ellipsis truncate overfl-x-auto">
				{{ $doc->title }}
			</a>
		</li>
		@endforeach

	</ul>
</div>