@extends('layouts.base')

@section('styles')
    @parent
	<!-- jmpress styles -->
    <link rel="stylesheet" type="text/css" href="css/jmstyle.css" />
@endsection

@section('scripts')
    @parent
	<!-- jmpress plugin -->
	<script type="text/javascript" src="js/jmpress.min.js"></script>
	<!-- jmslideshow plugin : extends the jmpress plugin -->
	<script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
	<script type="text/javascript">
		$(function() {
			var jmpressOpts	= {
				animation		: { transitionDuration : '2s' }
			};
			$( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
				autoplay	: true,
				bgColorSpeed: '.5s',
				arrows		: false
			}));
		});
	</script>

    <!-- Main Script -->
    <script src="js/main.js"></script>


@endsection

@section('content')

        <div class="container">
			<section id="jms-slideshow" class="jms-slideshow">
				<div class="step" data-color="color">
					<div class="jms-content">
						<a href="#">
							<p class="slider-head">Виниловые пластинки</p>
							<p class="slider-text">Мы продаем только НОВЫЕ пластинки (Новоделы).</p>
							<p class="slider-link">К покупкам</p>
						</a>
					</div>
					<img src="{{ asset('img/site_img/sl_vinyl.jpg') }}" />
				</div>
				<div class="step" data-color="color" data-y="900" data-rotate-x="80">
					<div class="jms-content">
						<a href="#">
							<p class="slider-head">CD компакт-диски</p>
							<p class="slider-text">Фирменные и лицензионные издания.</p>
							<p class="slider-link">К покупкам</p>
						</a>
					</div>
					<img src="img/2.png" />
				</div>
				<div class="step" data-color="color" data-x="-100" data-z="1500" data-rotate="170">
					<div class="jms-content">
						<a href="#">
							<p class="slider-head">Аксессуары</p>
							<p class="slider-text">Средства по уходу, упаковка, хранение.</p>
							<p class="slider-link">К покупкам</p>
						</a>
					</div>
					<img src="img/3.png" />
				</div>
				<div class="step" data-color="color" data-x="3000">
					<div class="jms-content">
						<a href="#">
							<p class="slider-head">Создай аккаунт</p>
							<p class="slider-text">Получи доступ к спецпредложениям, заказным каталогам и другим бонусам.</p>
							<p class="slider-link">Создать</p>
						</a>
					</div>
					<img src="img/4.png" />
				</div>
			</section>
        </div>




@endsection