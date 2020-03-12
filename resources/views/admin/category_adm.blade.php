@extends('admin.layouts.base_adm')

@section('content')

		<p><a href="#" class="button">Добавить Категорию</a></p>
		<br>
	@foreach($cat as $one)
		<p>
			<strong>{{ $one->name }}</strong> 
			<a href="{{ asset('adm/category/edit/'.$one->id) }}" class='button'>Редактировать</a>
			<a href="#" class='button'>Удалить</a>
		</p>
        @foreach($one->categories()->orderBy('order')->get() as $two)
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;{{ $two->name }}
			<a href="{{ asset('adm/category/edit/'.$two->id) }}" class='button'>Редактировать</a>
			<a href="#" class='button'>Удалить</a>
		</p>
		@endforeach
		<br>
	@endforeach

@endsection