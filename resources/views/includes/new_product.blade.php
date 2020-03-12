
                	<div class="single-product">
                    	<div class="product-f-image">
                    		<div class="single-product-img">
                    			<img src="{{ asset('img/product_img/'.$one->sm_picture) }}" alt="">
                    		</div>
                    	    <div class="product-hover">
                    	        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> В корзину</a>
                        	    <a href="#" class="view-details-link"><i class="fa fa-link"></i> Подробнее</a>
                    	    </div>
	                    	<p class="product-name"><a href="#">{{ $one->name }}</a></p>
	                    	<p class="product-price">{{ $one->price }} BYN</p> 
                    	</div>
                	</div>
