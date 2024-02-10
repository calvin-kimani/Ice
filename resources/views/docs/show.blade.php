@extends('ice')
@props(['title' => $doc->title])
@section('content')	
<div>
	<section class="mb-8">
		<h1 class="text-main font-bold text-xl mb-4 flex items-center justify-between">
			{{ $doc->title }}

			<form action="{{ route('docs.delete', $doc->id) }}">
			@method('delete') @csrf
				<x-button-delete />				
			</form>
		</h1>	
		<p>
			{{ $doc->description }}
		</p>
	</section>

	<section>
		<h1 class="text-main font-bold text-lg	">
			Notes
		</h1>		
		<p>
			{{ $doc->notes }}
		</p>
	</section>
</div>
@endsection