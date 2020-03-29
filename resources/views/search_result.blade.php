@extends('layouts.base')

@section('content')

    <article>
    	<div class="container">
    		<div class="text-area">
                @include ('includes.product_menu')
    			<div>
                    <h1>Результат поиска по запросу <strong>&laquo{{ $search_string }}&raquo</strong></h1>

                    @if(!isset($products))
                    <p><strong>{{ $txt }}</strong></p>
                    @endif

                </div>
                <p style="clear: both;"></p>
    		</div>
    	</div>
    </article>

    @if(isset($products))
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
    @endif


@endsection