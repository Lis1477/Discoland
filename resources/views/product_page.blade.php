@extends('layouts.base')

@section('content')

    <article>
    	<div class="container">
    		<div class="text-area">
                @include ('includes.product_menu')
                <div class='product-page_category-ico'>
                    <img src="{{ asset('img/site_img/'.$cat->picture) }}" alt="{{ $cat->name }}">
                </div>
    			{!! $cat->text !!}
                <p style="clear: both;"></p>
    		</div>
    	</div>
    </article>

	<section>
        <div class="container">
            <div class="text-area">

                <div class="product-page_show-product-block">
                @foreach ($products as $item)
                    @foreach ($view_cat as $one)
                        @foreach($one->categories()->get() as $two)
                            @if($two->id == $item->category_id)
                                @php
                                    $cat_slug = $two->slug;
                                    break;
                                @endphp
                            @endif
                        @endforeach
                    @endforeach

                <div class='product-page_show-product-element'>

                    <div class='product-page_show-product_pic'>
                        <a href="{{ asset('katalog/'.$cat_slug.'/'.$item->slug) }}"><img src="{{ asset('img/product_img/'.$item->sm_picture) }}" alt="{!! $item->name !!}" title="{!! $item->name !!}"></a>
                    </div>

                    <div class='product-page_show-product_info1'>
                        <div class='product-page_show-product_name'>
                            <a class='cat' href="{{ asset('katalog/'.$cat_slug.'/'.$item->slug) }}">{!! $item->name !!}</a>
                        </div>

                        <div class='product-page_show-product_price'>
                            <p>Цена: <span class='big-text'>{{ $item->price }} руб.</span></p>
                        </div>

                    </div>

                    <div class='product-page_show-product_info2'>
                        <p>{!! $item->pretext !!}</p>
                    </div>

                    <div class='product-page_show-product_info3'>

                        <div class="product-page_show-product_more-info">
                            <a href="{{ asset('katalog/'.$cat_slug.'/'.$item->slug) }}"><i class="fa fa-link"></i> Подробнее</a>
                        </div>

                        @if($item->in_stock == 0)
                        <div class="product-page_show-product_to-order">
                            <i class="fa fa-envelope"></i>
                            <a href="#"><span class='order_rem'>нет на складе</span><br>заказать</a>
                        </div>
                        @else
                        <div class="product-page_show-product_to-cart">
                            <a class="addCart" href="#" id="good-{{ $item->id }}-{{ $item->price }}" rel="nofollow"><i class="fa fa-shopping-cart"></i> В корзину</a>
                        </div>
                        @endif
                    </div>
                </div>


                @endforeach
                </div>

                @if($products->total() > $products->count())
                <div class="product-page_show-product_paginator">
                    {{ $products->links() }}
                </div>
                @endif

            </div>
        </div>
    </section>






@endsection