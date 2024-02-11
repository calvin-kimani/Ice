@extends('ice')
@props(['title' => 'Index'])
@section('content')	
<div>
	<ul>
		@foreach($docs as $doc)
		<li class="bg-accent bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-full px-4 py-2 m-2 flex items-center">
			<a href="{{ route('docs.show', $doc->id) }}" class="text-white font-bold mr-2">
				{{ $doc->title }}
			</a>
			<button class="bg-red-500 bg-opacity-50 hover:bg-opacity-75 rounded-full w-6 h-6 flex justify-center items-center">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</li>
		@endforeach
	</ul>
</div>
@endsection