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

                    @include ('includes.product-element')

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