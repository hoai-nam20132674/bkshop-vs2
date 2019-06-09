@extends('front-end.layout.default-product')
@section('css-js-header')
	<link href="{{asset('css/bpr.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/productReviews.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('title')
	Sản phẩm cùng loại
@endsection
@section('content')
	@include('front-end.layout.categorie-list')

	@include('front-end.layout.breadcrumb')
	@include('front-end.layout.product-container')
	@include('front-end.layout.section-hot-sale')
	
@endsection

@section('css-js-footer')
	<script src="{{asset('js/zoom-image.js')}}" type="text/javascript"></script>
	<!-- <script src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/recentview.js?1558087405072" type="text/javascript"></script> -->
	
	<!-- <script src="{{asset('js/jquery.elevatezoom308.min.js')}}" type="text/javascript"></script> -->
	
	<script src="{{asset('js/jquery.prettyphoto.min005e.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.prettyphoto.init.min367a.js')}}" type="text/javascript"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		$(document).on('click', '.check', function(event) {
			// event.preventDefault();
			var swatch = $(this).parent();
			swatch.children(".check").attr('check',0);
			$(this).attr('check',1);
			count_properties = $(".swatch").length;
			check = $(".check[check=1]").length;
			var products_id = $("#add-to-cart").attr('products_id');
			var properties_select = '';
			for(var i=0;i<count_properties;i++){
				var selector = $(".swatch[id="+i+"]");
				properties_select = properties_select+'-'+selector.children(".check[check=1]").attr('properties_id');
			}
			var url = 'get-price-product-detail/'+products_id+''+properties_select;
			if(check == count_properties){
				$.ajax({
				  type: "GET",
				  url: url,
				  dataType: 'html',
				  success: function(data){
				  	for(var i=0;i<data.length;i++){
						if(data[i] == ':'){
							var price = data.substring(0,i);
							var j = i;
							j++;
							var length = data.length;
							length++;
							var quantity = data.substring(j,length);
						}
					}
				    $(".price-detail").attr('price',price);
				    price = price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')+' đ';
				    $(".price-detail").empty();
				    $(".price-detail").append(price);
				    $(".count-product-detail").empty();
				    $(".count-product-detail").append(quantity);
				  }
				});
			}
			
		});
		$(document).on('click', '#add-to-cart', function(event) {
			event.preventDefault();
			count_properties = $(".swatch").length;
			check = $(".check[check=1]").length;
			if(check!=count_properties){
				swal("Không thành công", "Vui lòng chọn thuộc tính cho sản phẩm", "warning");
			}
			else{
				var properties_select = '';
				var text = '';
				for(var i=0;i<count_properties;i++){
					var selector = $(".swatch[id="+i+"]");
					properties_select = properties_select+'-'+selector.children(".check[check=1]").attr('properties_id');
					text = text+' '+selector.children(".check[check=1]").attr('properties_type')+' '+selector.children(".check[check=1]").attr('data-value');

				}
				var products_id = $(this).attr('products_id');
				var quantity = $(this).parent().children().children("input").val();
				var url = 'check-add-to-cart/'+products_id+'-'+quantity+''+properties_select;
				$.ajax({
					type: 'GET',
					url: url,
					dataType: 'html',
					success: function(data) {
						if(data=='hết hàng'){
							swal(text+" đã hết hàng", "Vui lòng chọn thuộc tính khác cho sản phẩm này", "warning");
						}
						else if(data=='không đủ hàng'){
							swal(text+" không đủ ", "Vui lòng chọn số lượng it hơn " +quantity+  " sản phẩm", "warning");
						}
						else{
							for(var i=0;i<data.length;i++){
								if(data[i] == ':'){
									var products_detail_id = data.substring(0,i);
								}
							}
							url = 'add-to-cart/'+products_detail_id+'-'+quantity;
							$.ajax({
								type: 'GET',
								url: url,
								dataType: 'html',
								success: function(data) {
									swal({
									  title: "Thêm vào giỏ hàng thành công",
									  text: "",
									  icon: "success",
									  buttons: true,
									  buttons: ["Giỏ hàng", true],
									})
									.then((willDelete) => {
									  if (willDelete) {
									  	//cập nhật số lượng sản phẩm giỏ hàng
									  	cartCount = $(".cartCount").attr('cart-count');
									  	cartCount = parseInt(cartCount);
									  	quantity = parseInt(quantity);
										$(".cartCount").empty();
										$(".cartCount").append(cartCount+quantity);
										$(".cartCount").attr('cart-count',cartCount+quantity);
										//end
										// --------------
										// cập nhật item giỏ hàng
										var element = $(".product-cart[data-id="+products_detail_id+"]");
										//kiểm tra sản phẩm đã có trong giỏ hàng chưa
									    if( element.length ==0){ //chưa có
									    	var product_url = location.href;
									    	var title = $(".title-head").attr('title');
									    	var avatar = $("img.avatar").attr('src');
									    	var price = $(".price-detail").attr('price');
									    	var totalPrice = price*quantity;
									    	price = price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')+' đ';
									    	var html = '<li class="item product-cart" data-id="'+products_detail_id+'"><div class="border_list"><a class="product-image" href="'+product_url+'" title="'+title+'"><img alt="'+title+'" src="'+avatar+'" width="100"></a><div class="detail-item"><div class="product-details"><p class="product-name"><a href="'+product_url+'" title="'+title+'">'+title+' '+text+'</a></p></div><div class="product-details-bottom"><span class="price pricechange">Giá: '+price+'</span><a data-id="'+products_detail_id+'" title="Xóa" class="remove-item-cart fa fa-trash-o" price="'+totalPrice+'">&nbsp;</a><div class="quantity-select qty_drop_cart"><p data-id="'+products_detail_id+'" value="'+quantity+'">Số Lượng: '+quantity+'</p></div></div></div></div></li>';
									    	$(".list-item-cart").append(html);
									    	var price_plus = parseInt(totalPrice);
											var old_total_price = parseInt($(".totalPrice").attr('price'));
											var new_total_price = old_total_price + price_plus;
											$(".totalPrice").empty();
											$(".totalPrice").attr('price',new_total_price);
											new_total_price = new_total_price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')+' đ';
											$(".totalPrice").append(new_total_price);
									    }

									    else{ //chưa có sản phẩm trong giỏ hàng
									    	var old_quantity = parseInt($("p[data-id="+products_detail_id+"]").attr('value'));
									    	var new_quantity = old_quantity + quantity;
									    	$("p[data-id="+products_detail_id+"]").attr('value',new_quantity);
									    	$("p[data-id="+products_detail_id+"]").empty();
									    	$("p[data-id="+products_detail_id+"]").append('Số lượng: '+new_quantity);
									    	var price = $(".price-detail").attr('price');
									    	var price_plus = parseInt(price*quantity);
									    	var old_total_price = parseInt($(".totalPrice").attr('price'));
									    	var new_total_price = old_total_price + price_plus;
									    	$(".totalPrice").empty();
											$(".totalPrice").attr('price',new_total_price);
											$(".remove-item-cart[data-id="+products_detail_id+"]").attr('price',new_total_price);
											new_total_price = new_total_price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')+' đ';
											$(".totalPrice").append(new_total_price);

									    }

									  } else {
									    window.location='cart';
									  }
									});
								}
								
							});

						}
						
					}
					
				});
				
			}
			
			
			
			
		});
	</script>

@endsection

