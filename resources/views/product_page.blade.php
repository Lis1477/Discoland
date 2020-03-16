@extends('layouts.base')

@section('content')

    @include ('includes.product_menu')

    <article>
    	<div class="container">
    		<div class="text-area">
                    <div class='product-page_category-ico'>
                        <img src="{{ asset('img/product_img/'.$cat->picture) }}" alt="{{ $cat->name }}">
                    </div>
    			{!! $cat->text !!}
    		</div>
    	</div>
    </article>

	<section>
    </section>






@endsection