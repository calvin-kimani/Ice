@extends('ice')
@props(['title' => 'New Doc'])
@section('content')	
<div>
	@livewire('NewDocForm')	
</div>
@endsection