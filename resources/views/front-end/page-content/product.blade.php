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
	<!-- <script src="{{asset('js/zoom-image.js')}}" type="text/javascript"></script> -->
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

