@extends('admin.layouts.base_adm')

@section('content')
		@foreach($users as $user)
		<p>{{ $user->name }}</p>
		@endforeach
@endsection