@extends('layouts.base')

@section('content')

    <article>
    	<div class="container">
    		<div class="text-area">

		    @include ('includes.product_menu')



<div class="shopping-cart">
	<h1>Корзина</h1>

    <div style="display: block;" class="hPe shopping-cart_empty">Корзина пуста!</div>
    <div style="display: none;" class="hPb shopping-cart_block">

		<table>
			<tr class='shopping-cart_title'>
				<td class="shopping-cart_del-but"></td>
				<td class="shopping-cart_product-name">Продукт</td>
				<td class="shopping-cart_kol">Кол-во</td>
				<td class="shopping-cart_price">Цена (BYN)</td>
			</tr>

            @php
                $itogo = 0;
                $colvo_vsego = 0;
            @endphp

            @foreach($tov as $one => $value)
                @if(isset($value->id))
                    @php
                        $summa = $value->price * $val[$value->id];
                        $itogo += $summa;
                        $colvo = $val[$value->id];
                        $colvo_vsego += $colvo;
                    @endphp

			<tr class="shopping-cart_goods">
				<td class="shopping-cart_del-but">
					<a title="Удалить этот товар из корзины" class="remove" href="{{ asset('korzina-tovarov/delete/'.$value->id)}}"><img src="{{ asset('img/site_img/button_delete.gif') }}" alt="Удалить товар"></a>
				</td>
				<td class="shopping-cart_product-name">
					<div>
						<img src="{{ asset('img/product_img/'.$value->sm_picture) }}">
					</div>
					<div>
						{{ $value->name }}
					</div>
				</td>

				<td class="shopping-cart_kol">
					<form name="pro" action="{{ asset('korzina-tovarov/edit/'.$value->id) }}" method="post">
						{{csrf_field()}}
						<input type="number" min=1 max="{{ $value->in_stock }}" name="colvo" value="{{ $colvo }}" title="Максимальное количество на складе - {{ $value->in_stock }} шт."> шт.
						<input type="submit" class="button" value="Пересчитать">
					</form>
				</td>

				<td class="shopping-cart_price">@php echo number_format((float)($summa), 2, '.', '') @endphp</td>

                @endif
            @endforeach

			<tr class="shopping-cart_total">
				<td class="shopping-cart_del-but"></td>
				<td class="shopping-cart_product-name"></td>
				<td class="shopping-cart_kol">Итого: </td>
				<td class="shopping-cart_price">@php echo number_format((float)($itogo), 2, '.', '') @endphp</td>
			</tr>
		</table>


	<div class="shopping-cart_complete-order">
		<a href="" title="Перейти к оформлению заказа">Перейти к оформлению</a>
	</div>

	<div class="shopping-cart_clear">
			<button style="display: none;" class="button" id="clearBasket"><img src="{{ asset('img/site_img/button_delete.gif') }}" alt="Удалить товар">Очистить корзину</button>
	</div>

	</div>
</div>



<div style="clear: both;"></div>


            </div>
        </div>
    </section>






@endsection
