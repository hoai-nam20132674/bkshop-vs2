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
	<script type="text/javascript">
		$(document).on('click', '#add-to-cart', function(event) {
			event.preventDefault();
			var url = $(this).attr("url");
			if(url==''){
				console.log('rỗng');
			}
		});
	</script>

@endsection

