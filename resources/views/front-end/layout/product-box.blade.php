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
			
			
			<div class="bizweb-product-reviews-badge" >
				<div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
					<i data-alt="1" class="star-on-png" title="Not rated yet!">
						
					</i>&nbsp;<i data-alt="2" class="star-on-png" title="Not rated yet!">
						
					</i>&nbsp;<i data-alt="3" class="star-on-png" title="Not rated yet!">
						
					</i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!">
						
					</i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!">
						
					</i><input name="score" type="hidden" readonly="">
				</div>
			</div>
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
			
			
			<div class="bizweb-product-reviews-badge" >
				<div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);">
					<i data-alt="1" class="star-on-png" title="Not rated yet!">
						
					</i>&nbsp;<i data-alt="2" class="star-on-png" title="Not rated yet!">
						
					</i>&nbsp;<i data-alt="3" class="star-on-png" title="Not rated yet!">
						
					</i>&nbsp;<i data-alt="4" class="star-half-png" title="Not rated yet!">
						
					</i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!">
						
					</i><input name="score" type="hidden" readonly="">
				</div>
			</div>
		</div>
		
		

	</div>
@endif	