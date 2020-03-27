
                	<div class="single-product">
                    	<div class="product-f-image">
                    		<div class="single-product-img">
                    			<img src="{{ asset('img/product_img/'.$one->sm_picture) }}" alt="">
                    		</div>
                    	    <div class="product-hover">
                    	        <a href="#" class="add-to-cart-link addCart" id="good-{{ $one->id }}-{{ $one->price }}" rel="nofollow"><i class="fa fa-shopping-cart"></i> В корзину</a>
                                @php $cat_link = $cat->where('id', $one->category_id)->first(); @endphp
                        	    <a href="{{ asset('katalog/'.$cat_link->slug.'/'.$one->slug) }}" class="view-details-link"><i class="fa fa-link"></i> Подробнее</a>
                    	    </div>
	                    	<p class="product-name"><a href="#">{{ $one->name }}</a></p>
	                    	<p class="product-price">{{ $one->price }} BYN</p> 
                    	</div>
                	</div>
