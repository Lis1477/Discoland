@extends('admin.layouts.base_adm')

@section('content')

<h3>Редактирование категории - {{ $item->name }}:</h3>

<form method="" action="" enctype='multipart/form-data'>

	<p>Имя категории:<br>
		<input type='text' name='name' value="{{ $item->name }}" size="70">
	</p>

	<p>Псевдоним (Оставь пустым, если не уверен!):<br>
		<input type='text' name='slug' value="{{ $item->slug }}" size="70">
	</p>

	<p>Выберите родителя:<br>
		<select name='parent_id'>
			<option @if ($item->parent_id == 0) {{ 'selected' }}@endif value = 0>0</option>
			@foreach ($cat as $one)
			<option @if ($item->parent_id == $one->id) {{ 'selected' }}@endif value="{{ $one->id }}">{{ $one->name }}</option>
			@endforeach
		</select>
	</p>

	<p>Текущая иконка:<br>
		<img src="{{ asset('img/product_img/'.$item->picture) }}" style="width: 50px;">
	</p>

	<p>Выбрать иконку:<br>
		<input type="file" name="upfl">
	</p>


	<p>Текст:<br>
		<textarea name="text" cols="100" rows="30">{!! $item->text !!}</textarea>
	</p>

	<p>Для description:<br>
		<textarea name='description' cols="100" rows="5">{{ $item->description }}</textarea>
	</p>

	<p>Вес:<br>
		<input type="number" name="order" min="1" value="{{ $item->order }}">
	</p>

	<p>Отображение:<br>
		<select name="display">
			<option value=1 selected>Да</option>
			<option value=0>Нет</option>
		</select>
	</p>

	<p>
		<button type='submit'>Подтвердить</button>
	</p>

</form>	

@endsection