
<!DOCTYPE html>
<html lang="vi">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">				
		<title>{{$system->title}}</title>
		<!-- ================= Page description ================== -->
		
		<meta name="description" content="{{$system->seo_description}}">
		
		<!-- ================= Meta ================== -->
		<meta name="keywords" content="{{$system->seo_keyword}}"/>		
		<link rel="canonical" href="/{{$system->website}}"/>
		<meta name='revisit-after' content='1 days' />
		<meta name="robots" content="noodp,index,follow" />
		<!-- ================= Favicon ================== -->
		
		<link rel="icon" href="{{asset('uploads/images/systems/logo/'.$system->shortcut_logo)}}" type="image/x-icon" />
		
		<!-- Facebook Open Graph meta tags -->
		

		<meta property="og:type" content="website">
		<meta property="og:title" content="{{$system->title}}">
		<meta property="og:image" content="{{asset('uploads/images/systems/share/'.$system->share_image)}}">

		<meta property="og:description" content="{{$system->seo_description}}">
		<meta property="og:url" content="/{{$system->website}}">
		<meta property="og:site_name" content="BKMART">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@">

		<!-- Header JS -->
		<script src="{{asset('js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>

		<!-- Bizweb javascript customer -->
		
		<!-- ================= Google Fonts ================== -->
		
		
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet" type="text/css" />
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">

		<!-- Plugin CSS -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Build Main CSS -->
		<link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/style.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/module.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/responsive.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/fix.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/iwish.css')}}" rel="stylesheet" type="text/css" />
		<style>
			.tagdacbiet{
				padding: 0 15px;
				line-height: 24px;
				color: #fff;
				bottom: 0;
				background: $main-color;
				font-size: 10px;
				font-weight: 600;
				text-transform: inherit;
				font-family: Arial;
				text-align: center;
				white-space: nowrap;
				text-overflow: ellipsis;
				width: 100%;
				overflow: hidden;		
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f22060+0,f7793c+100,f7793c+100 */
				background: lighten(#f21f60,5%); /* Old browsers */
				background: -moz-linear-gradient(top, lighten(#f21f60,5%) 0%, darken(#f7793c,10%) 100%, darken(#f7793c,10%) 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(top, lighten(#f21f60,5%) 0%,darken(#f7793c,10%) 100%,darken(#f7793c,10%) 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, lighten(#f21f60,5%) 0%,darken(#f7793c,10%) 100%,darken(#f7793c,10%) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='lighten($main-color,10%)', endColorstr='darken($main-color2,10%)',GradientType=0 ); /* IE6-9 */

			}
		</style>

		<!-- <script src="{{asset('js/iwishheader.js')}}" type="text/javascript"></script> -->

		<!-- Bizweb conter for header -->

		@yield('css-js-header')

	</head>
	<body>
		
		@include('front-end.layout.header')
		<!-- Main content -->		
		<h1 class="hidden">Zomart</h1>

		@yield('section-slide')

		@yield('content')

		@include('front-end.layout.section-policy')

		@include('front-end.layout.footer')
		<!-- Modal Đăng nhập -->
		@include('front-end.layout.modal-login')
		<!-- Modal Đăng ký-->
		@include('front-end.layout.modal-register')


		<div class="addcart-popup product-popup awe-popup">
			<div class="overlay no-background"></div>
			<div class="content">
				<div class="row row-noGutter">
					<div class="col-xl-6 col-xs-12">
						<div class="btn btn-full btn-primary a-left popup-title"><i class="fa fa-check"></i>Thêm vào giỏ hàng thành công
						</div>
						<a href="javascript:void(0)" class="close-window close-popup"><i class="fa fa-close"></i></a>
						<div class="info clearfix">
							<div class="product-image margin-top-5">
								<img alt="popup" src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/logo.png?1558087405072" style="max-width:150px; height:auto"/>
							</div>
							<div class="product-info">
								<p class="product-name"></p>
								<p class="quantity color-main"><span>Số lượng: </span></p>
								<p class="total-money color-main"><span>Tổng tiền: </span></p>

							</div>
							<div class="actions">    
								<button class="btn  btn-primary  margin-top-5 btn-continue">Tiếp tục mua hàng</button>        
								<button class="btn btn-gray margin-top-5" onclick="window.location='/cart'">Kiểm tra giỏ hàng</button>
							</div> 
						</div>

					</div>			
				</div>

			</div>    
		</div>
		<div class="error-popup awe-popup">
			<div class="overlay no-background"></div>
			<div class="popup-inner content">
				<div class="error-message"></div>
			</div>
		</div>
		


		<div id="popup-cart" class="modal fade" role="dialog">
			<div id="popup-cart-desktop" class="clearfix">
				<div class="title-popup-cart">
					<i class="fa fa-check" aria-hidden="true"></i> Bạn đã thêm <span class="cart-popup-name" style="color: red;"></span> vào giỏ hàng
				</div>
				<div class="title-quantity-popup">
					<a href="/cart">
						Giỏ hàng của bạn <span class="cart-popup-count"></span> sản phẩm <i class="fa fa-caret-right" aria-hidden="true"></i>
					</a>
				</div>
				<div class="content-popup-cart clearfix">
					<div class="thead-popup">
						<div style="width: 54%;" class="text-left">Sản phẩm</div>
						<div style="width: 15%;" class="text-center">Đơn giá</div>
						<div style="width: 15%;" class="text-center">Số lượng</div>
						<div style="width: 15%;" class="text-center">Thành tiền</div>
					</div>
					<div class="tbody-popup">
					</div>
					<div class="tfoot-popup">
						<div class="tfoot-popup-1 clearfix">
							<div class="pull-left popup-ship hidden">

								<p>Giao hàng trên toàn quốc</p>
							</div>
							<div class="pull-right popup-total">
								<p>Thành tiền: <span class="total-price"></span></p>
							</div>
						</div>
						<div class="tfoot-popup-2 clearfix margin-bottom-40">
							<a class="button btn-proceed-checkout" title="Tiến hành thanh toán" href="/checkout"><span>Tiến hành thanh toán</span></a>  
							<a class="button btn-continue btn btn-gray margin-right-10" title="Xem giỏ hàng" href="/cart"><span><span>Vào xem giỏ hàng</span></span></a>
							<a class="button btn-continue btn btn-gray margin-right-10" title="Tiếp tục mua hàng" onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua hàng</span></span></a>
							
						</div>
					</div>
				</div>
				<a title="Close" class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-close" style="color: #fff;"></i></a>
			</div>

		</div>
		<div id="myModal" class="modal fade" role="dialog"></div>
		
		

		<div id="quick-view-product" class="quickview-product" style="display:none;">
			<div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
			<div class="quick-view-product"></div>
			<div id="quickview-modal" style="display:none;">
				<div class="block-quickview primary_block row">
					<div class="product-left-column col-xs-12 col-sm-6 col-md-5">
						<div class="clearfix image-block">
							<span class="view_full_size">
								<a class="img-product" title="" href="#">
									<img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" src="/logo.png" alt="quickview"  />
								</a>
							</span>
							<div class="loading-imgquickview" style="display:none;"></div>
						</div>
						<div class="more-view-wrapper clearfix">
							<div id="thumbs_list_quickview">
								<ul class="product-photo-thumbs not-dqowl quickview-more-views-owlslider owl-carousel owl-theme" id="thumblist_quickview"></ul>
							</div>
						</div>
					</div>
					<div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-7">
						<h3><a class="qwp-name" href="">&nbsp;</a></h3>
						<div class="qv-header-info">
							Thương hiệu:
							<span class="vendor">Chưa cập nhật</span>					
							<span class="line">|</span>
							Mã SP: 
							<span class="masp">Chưa cập nhật</span>
						</div>			
						<div class="quickview-info">
							<span class="prices">
								<span class="price"></span>
								<del class="old-price"></del>
								<span class="vat">(Đã bao gồm thuế VAT)</span>
							</span>
						</div>	
						<div class="product-description rte rte-summary"></div>



						<form action="/cart/add" method="post" enctype="multipart/form-data" class="variants form-ajaxtocart">

							<select name='variantId' class="hidden" style="display:none"></select>
							<div class="clearfix"></div>
							<div class="quantity_wanted_p margin-top-15">
								<label for="quantity-detail" class="quantity-selector hidden">Số lượng: </label>
								<div class="custom custom-btn-number">
									<span class="qtyminus" data-field="quantity">-</span>							
									<input type="text" id="quantity-detail" data-field='quantity' name="quantity" value="1" class="quantity-selector text-center" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onChange="if(this.value == '')this.value=1;">
									<span class="qtyplus" data-field="quantity">+</span>										

								</div>

								<button type="submit" name="add" class="btn btn-primary add_to_cart add_to_cart_detail ajax_addtocart">
									<span >THÊM VÀO GIỎ HÀNG</span>
								</button>
							</div>
							<div class="total-price" style="display:none">
								<label>Tổng cộng: </label>
								<span></span>
							</div>

						</form>
						<div class="contact">Gọi <a href="tel:0342911168">0342.911.168</a> để được tư vấn miễn phí</div>

					</div>

				</div>      
				<a title="Close" class="quickview-close close-window" href="javascript:;"><i class="fa   fa-close"></i></a>
			</div>    
		</div>
		<!-- <script src="{{asset('js/cs.script.js')}}" type="text/javascript"></script> -->
		<!-- Quick view -->
		
		<!-- <script src="{{asset('js/quickview.js')}}" type="text/javascript"></script> -->


		<!-- <script src="{{asset('js/option-selectors.js')}}" type="text/javascript"></script> -->
		<script src="{{asset('js/update-cart.js')}}" type="text/javascript"></script>
		<!-- Plugin JS -->
		<script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>	
		<script src="{{asset('js/bootstrap.min.js')}}"></script>

		<script src="{{asset('js/iwish.js')}}" type="text/javascript"></script>
		<!-- Main JS -->
		<script src="{{asset('js/main.js')}}" type="text/javascript"></script>
		<!-- Product detail JS,CSS -->
		<!-- search js-->
		<script src="{{asset('js/search.js')}}" type="text/javascript"></script>
		<!-- end search -->
		<script type="text/javascript">
			function showRecoverPasswordForm() {
				document.getElementById('recover-password').style.display = 'block';
				document.getElementById('login').style.display='none';
			}

			function hideRecoverPasswordForm() {
				document.getElementById('recover-password').style.display = 'none';
				document.getElementById('login').style.display = 'block';
			}

			if (window.location.hash == '#recover') { showRecoverPasswordForm() }
		</script>

		@yield('css-js-footer')
		

	</body>
</html>