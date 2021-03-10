<div class="item">
	<div class="item_product_main product_convert">
		
		<div class="product-thumbnail clearfix">
			<a class="image_thumb" href="/{{$product->url}}#content" title="{{$product->title}}">
				<img class="lazyload" src="{{asset('uploads/images/products/avatas/'.$product->avata)}}"  data-src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}">
			</a>

			<p class="sum">{{$product->seo_description}}</p>
			
		</div>
		<div class="product-info clearfix">
			<h3 class="product-name clearfix"><a href="/{{$product->url}}#content" title="{{$product->title}}">{{$product->name}}</a></h3>
			<ul class="clearfix profile hidden">
				<li class="position lazyload" data-src="https://bizweb.dktcdn.net/100/393/384/themes/773119/assets/position.png?1593488744761">&nbsp;Phường Gia Thụy, Long Biên, Hà Nội</li>
				<li class="lazyload" data-src="https://bizweb.dktcdn.net/100/393/384/themes/773119/assets/bed.png?1593488744761"><span>Phòng ngủ:&nbsp;</span> 02</li>
				<li class="lazyload" data-src="https://bizweb.dktcdn.net/100/393/384/themes/773119/assets/bath.png?1593488744761"><span>Phòng tắm:&nbsp;</span> 02</li>
				<li class="lazyload" data-src="https://bizweb.dktcdn.net/100/393/384/themes/773119/assets/square.png?1593488744761"><span>Diện tích:&nbsp;</span> Trên 50m2</li>
			</ul>
			<div class="clearfix price_button">
				
				
				<a style="width: 100%" class="btn-buy btn-cart btn btn-views bnt_hover_effect " title="Mua theo lô" href="/{{$product->url}}#content">
					Xem chi tiết <i class="fa fa-angle-right"></i>
				</a>
				
			</div>
		</div>
		
	</div>
</div>