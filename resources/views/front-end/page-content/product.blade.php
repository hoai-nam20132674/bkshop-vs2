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
	@if(Auth::guard('users_client')->user())
		<div class="feedback fancybox-overlay fancybox-overlay-fixed" style=" background-color: #000000a8; width: auto;height: auto;display: none"><div class="fancybox-wrap fancybox-desktop fancybox-type-inline fancybox-opened" tabindex="-1" style="width: 330px; height: auto; position: absolute; top: 42px; left: 786px; opacity: 1; overflow: visible;"><div class="fancybox-skin" style="padding: 15px; width: auto; height: auto;"><div class="fancybox-outer"><div class="fancybox-inner" style="overflow: auto; width: 300px; height: auto;"><div class="bizweb-product-reviews-form" id="bpr-form_8828371" style="">
	        <form method="POST" action="{{URL::route('postAddFeedback')}}" id="bizweb-product-reviews-frm" name="bizweb-product-reviews-frm">
	            <input type="hidden" name="_token" value="{{ csrf_token()}}">
	            <h4>Đánh giá sản phẩm</h4>
	            <fieldset class="bpr-form-rating">
	                <div id="dvRating" style="cursor: pointer; color: rgb(255, 190, 0);"><i data-alt="1" class="star star-on-png" title="bad"></i>&nbsp;<i data-alt="2" class="star star-off-png" title="poor"></i>&nbsp;<i data-alt="3" class="star star-off-png" title="regular"></i>&nbsp;<i data-alt="4" class="star star-off-png" title="good"></i>&nbsp;<i data-alt="5" class="star star-off-png" title="gorgeous"></i><input name="score" type="hidden"></div>
	                <input type="hidden" name="rating" id="review_rate" value="0">
	                <span class="bpr-form-message-error"></span>
	            </fieldset>
	            <fieldset class="bpr-form-contact">
	                <div class="bpr-form-contact-name require">
	                    <input type="text" maxlength="128" id="review_author" name="name" value="{{Auth::guard('users_client')->user()->name}}" placeholder="Nhập tên của bạn" disabled>
	                    <span class="bpr-form-message-error"></span>
	                </div>
	                <div class="bpr-form-contact-email require">
	                    <input type="text" maxlength="128" id="review_email" name="email" value="{{Auth::guard('users_client')->user()->email}}" placeholder="nguyenvan@gmail.com" disabled>
	                    <span class="bpr-form-message-error"></span>
	                </div>
	                <div class="bpr-form-contact-email require" style="opacity: 0;position: absolute; z-index: -1;">
	                    <input type="text" maxlength="128" id="review_email" name="rate" value="1" >
	                    <span class="bpr-form-message-error"></span>
	                </div>
	                <div class="bpr-form-contact-email require" style="opacity: 0;position: absolute; z-index: -1;">
	                    <input type="text" maxlength="128" id="review_email" name="user_id" value="{{Auth::guard('users_client')->user()->id}}" >
	                    <span class="bpr-form-message-error"></span>
	                </div>
	                <div class="bpr-form-contact-email require" style="opacity: 0;position: absolute; z-index: -1;">
	                    <input type="text" maxlength="128" id="review_email" name="product_id" value="{{$products->id}}" >
	                    <span class="bpr-form-message-error"></span>
	                </div>
	            </fieldset>
	            <fieldset class="bpr-form-review">
	                
	                <div class="bpr-form-review-body">
	                    <textarea maxlength="1500" id="review_body" name="messages" rows="5" placeholder="Nội dung" required></textarea>
	                    <span class="bpr-form-message-error"></span>
	                </div>
	            </fieldset>
	            <fieldset class="bpr-form-review-error">
	                <p class="error"></p>
	            </fieldset>
	            <fieldset class="bpr-form-actions">
	                <input type="submit" value="Gửi" class="bpr-button-submit" style="width: 100%">
	            </fieldset>
	        </form>
	    </div></div></div><a title="Close" class="fancybox-item fancybox-close close-feedback"></a></div></div></div>
	@endif
@endsection

@section('css-js-footer')
	<script src="{{asset('js/zoom-image.js')}}" type="text/javascript"></script>
	<!-- <script src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/recentview.js?1558087405072" type="text/javascript"></script> -->
	
	<!-- <script src="{{asset('js/jquery.elevatezoom308.min.js')}}" type="text/javascript"></script> -->
	
	<script src="{{asset('js/jquery.prettyphoto.min005e.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.prettyphoto.init.min367a.js')}}" type="text/javascript"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="{{asset('js/product.js')}}" type="text/javascript"></script>

@endsection

