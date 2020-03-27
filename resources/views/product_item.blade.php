@extends('layouts.base')

@section('content')

    <article>
    	<div class="container">
    		<div class="text-area">

		    @include ('includes.product_menu')

				<div class="product-detail_name text">
					<h1>{{ $prod->name }}</h1>
				</div>

				<div class="product-detail_pic-block">

					<div class="product-detail_pic">
						<a href="{{ asset('img/product_img/'.$prod->big_picture) }}" rel='simplebox'><img src="{{ asset('img/product_img/'.$prod->sm_picture) }}" alt="{{ $prod->name }}">
							<p class="product-detail_zoom"><img src="{{ asset('img/site_img/zoom_ico.png') }}">УВЕЛИЧИТЬ</p>
						</a>
					</div>

				</div>

				<div class="product-detail_price-block">
					<div class="product-detail_price">
						<p>Цена: <span class="big-text color-text">{{ $prod->price }} руб.</span></p>
						@if(!empty($prod->code))
						<p>Штрих-код: {{ $prod->code }}</p>
						@endif
						@if($prod->in_stock > 0)
							@php $in_stock_unswer = "Да"; @endphp
						@else
							@php $in_stock_unswer = "Нет"; @endphp
						@endif
						<p>Наличие на складе: {{ $in_stock_unswer }}</p>
					</div>
					@if($prod->in_stock > 0)
                    <div class="">
                        <a class="addCart" href="#" id="good-{{ $prod->id }}-{{ $prod->price }}" rel="nofollow"><i class="fa fa-shopping-cart"></i> В корзину</a>
                    </div>
					@elseif($prod->display == 1)
					<div>Заказать</div>
					<div class='product-detail_to-order-rem'><p>Ожидание: 3 - 8 недель.</p></div>
					@else
					<div class='product-detail_to-order-rem'><p>К заказу - не доступно.</p></div>
					@endif
				</div>

				<div class='product-detail_product-info text'>
					{!! $prod->text !!}
				</div>
            </div>
        </div>
    </section>






@endsection