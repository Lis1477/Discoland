<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Панель управления сайтом DISCOLAND.BY</title>
<link href="{{ asset('css/admstyles.css') }}" rel='stylesheet' type='text/css'>
<link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="/image/x-icon">

</head>

<body>

	<div class="admin-menu">
		<h2>Меню:</h2>
		<p><a href="#">Адреса</a></p>
		<p><a href="#">Рассылки</a></p>
		<p><a href="#">Каталоги</a></p>
		<br>
		<p><a href="{{ asset('adm/category') }}">Категории</a></p>
		<p><a href="#">Товары</a></p>
		<p><a href="#">Новинки</a></p>
		<p><a href="#">Заказы</a></p>
		<br>
		<p><a href="#">Курс RUS</a></p>
		<br>
		<p><a href="#">Генератор Sitemap</a></p>
   </div>

   <div class="admin-content">

@yield('content')

   </div>   





</body>
</html>