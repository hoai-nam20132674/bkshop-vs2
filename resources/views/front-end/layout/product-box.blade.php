@if($system->id ==1)
	<div class="product-box">	
		<div class="product-thumbnail">		
			<div class="sale-flash">Sale</div>
			<a href="/{{$pr->url}}" title="{{$pr->name}}">
				<img src="{{asset('uploads/images/products/avatar/'.$pr->avatar)}}" alt="{{$pr->title}}">
			</a>
		</div>
		<div class="product-info a-left">		
			<h3 class="product-name"><a href="/{{$pr->url}}" title="{{$pr->name}}">{{$pr->name}}</a></h3>
			<div class="price-box clearfix">			
				<div class="special-price f-left">
					<span class="price product-price">{{$pr->price}} đ</span>
				</div>
				
				<div class="old-price f-left">															 
					<span class="price product-price-old">{{$pr->maxPrice}} đ</span>
				</div>
				<div class="price-sale-flash f-left">-24% </div>
							
			</div>		
			
			
			<div class="bizweb-product-reviews-badge" data-id="8829397"></div>
		</div>
		
		<div class="product-action clearfix">
			<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8829397" enctype="multipart/form-data">			
				<div>

					
					<input type="hidden" name="variantId" value="14042109" />
					<button class="btn-buy btn-cart btn btn-primary left-to add_to_cart " data-title="Thêm vào giỏ hàng">
						Mua ngay
					</button>
					
					
					<a data-title ="Yêu thích" class="btn btn-gray iWishAdd iwishAddWrapper" href="javascript:;" data-customer-id="0" data-product="8829397" data-variant="14042109"><i class="fa fa-heart"></i></a>
					<a data-title = "Bỏ yêu thích" class="btn btn-gray iWishAdded iwishAddWrapper iWishHidden" href="javascript:;" data-customer-id="0" data-product="8829397" data-variant="14042109"><i class="fa fa-heart"></i></a>
					
					
					<a data-title="Xem nhanh" href="/bo-kem-duong-da-vichy-green" data-handle="bo-kem-duong-da-vichy-green" class="btn-gray btn_view btn  right-to quick-view">
						<i class="fa fa-search-plus"></i>
					</a>
					
				</div>
			</form>
		</div>

	</div>
@else
	<div class="product-box">	
		<div class="product-thumbnail">		
			<div class="sale-flash">Sale</div>
			<a href="/{{$system->website}}/{{$pr->url}}" title="{{$pr->name}}">
				<img src="{{asset('uploads/images/products/avatar/'.$pr->avatar)}}" alt="{{$pr->title}}">
			</a>
		</div>
		<div class="product-info a-left">		
			<h3 class="product-name"><a href="/{{$system->website}}/{{$pr->url}}" title="{{$pr->name}}">{{$pr->name}}</a></h3>
			<div class="price-box clearfix">			
				<div class="special-price f-left">
					<span class="price product-price">{{$pr->price}} đ</span>
				</div>
				
				<div class="old-price f-left">															 
					<span class="price product-price-old">{{$pr->maxPrice}} đ</span>
				</div>
				<div class="price-sale-flash f-left">-24% </div>
							
			</div>		
			
			
			<div class="bizweb-product-reviews-badge" data-id="8829397"></div>
		</div>
		
		<div class="product-action clearfix">
			<form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8829397" enctype="multipart/form-data">			
				<div>

					
					<input type="hidden" name="variantId" value="14042109" />
					<button class="btn-buy btn-cart btn btn-primary left-to add_to_cart " data-title="Thêm vào giỏ hàng">
						Mua ngay
					</button>
					
					
					<a data-title ="Yêu thích" class="btn btn-gray iWishAdd iwishAddWrapper" href="javascript:;" data-customer-id="0" data-product="8829397" data-variant="14042109"><i class="fa fa-heart"></i></a>
					<a data-title = "Bỏ yêu thích" class="btn btn-gray iWishAdded iwishAddWrapper iWishHidden" href="javascript:;" data-customer-id="0" data-product="8829397" data-variant="14042109"><i class="fa fa-heart"></i></a>
					
					
					<a data-title="Xem nhanh" href="/bo-kem-duong-da-vichy-green" data-handle="bo-kem-duong-da-vichy-green" class="btn-gray btn_view btn  right-to quick-view">
						<i class="fa fa-search-plus"></i>
					</a>
					
				</div>
			</form>
		</div>

	</div>
@endif	