
<!DOCTYPE html>
<html lang="vi">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">				
		<title>{{$cate->title}}</title>
		<!-- ================= Page description ================== -->
		
		<meta name="description" content="{{$cate->seo_description}}">
		
		<!-- ================= Meta ================== -->
		<meta name="keywords" content="{{$cate->seo_keyword}}"/>		
		<link rel="canonical" href="/{{$cate->url}}"/>
		<meta name='revisit-after' content='1 days' />
		<meta name="robots" content="noodp,index,follow" />
		<!-- ================= Favicon ================== -->
		
		<link rel="icon" href="{{asset('uploads/images/icon/'.$system->shortcut_logo)}}" type="image/x-icon" />
		
		<!-- Facebook Open Graph meta tags -->
		

		<meta property="og:type" content="website">
		<meta property="og:title" content="{{$cate->title}}">
		<meta property="og:image" content="{{asset('uploads/images/categories/share_image'.$cate->share_image)}}">

		<meta property="og:description" content="{{$cate->seo_description}}">
		<meta property="og:url" content="/{{$cate->website}}">
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
		<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog">
			<div class="modal-dialog wrap-modal-login" role="document">
				<div class="text-xs-center">
					<div id="login">
						<div class="row row-noGutter">
							<div class="col-sm-12">
								<div class="content a-center">
									<h5 class="title-modal"><a class="active" href="#">Đăng nhập tài khoản</a> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#dangky">Đăng ký tài khoản mới</a></h5>

									<form accept-charset="UTF-8" action="/account/login" id="customer_login" method="post">
										<input name="FormType" type="hidden" value="customer_login" />
										<input name="utf8" type="hidden" value="true" />
										<div class="form-signup" >
											
										</div>
										<div class="form-signup a-left clearfix">
											<fieldset class="form-group">
												<label> Email <span class="required">*</span></label>
												<input type="email" class="form-control form-control-lg" value="" name="email" id="customer_email" placeholder="Nhập ID*" required>
											</fieldset>
											<fieldset class="form-group">
												<label> Mật khẩu<span class="required">*</span></label>
												<input type="password" class="form-control form-control-lg" value="" name="password" id="customer_password" placeholder="Nhập mật khẩu*" required>
											</fieldset>
											<div class="a-center">
												<p class="margin-bottom-15"><a href="#" class="btn-link-style btn-link-style-active" onclick="showRecoverPasswordForm();return false;">Quên mật khẩu ?</a></p>
												<!-- <a href="/account/register" class="btn-link-style">Đăng ký tài khoản mới</a> -->
											</div>
											<fieldset class="form-group">
												<input class="btn btn-primary btn-full" type="submit" value="Đăng nhập" />
											</fieldset>	


										</div>

										<div id="social_login_widget"></div>
										<div class="link-popup"><p>
											Chưa có tài khoản đăng ký 
											<a href="#" class="margin-top-20" data-dismiss="modal" data-toggle="modal" data-target="#dangky">Tại đây</a>
											</p>
										</div>
									</form>
								</div>

							</div>

						</div>

					</div>

					<div id="recover-password" class="form-signup" style="display: none">
						<div class="row row-noGutter">
							<div class="col-sm-12">
								<div class="content a-center">

									<h5 class="title-modal"><a class="active" href="#">Lấy lại mật khẩu</a></h5>
									<p>Chúng tôi sẽ gửi thông tin lấy lại mật khẩu vào email đăng ký tài khoản của bạn</p>

									<form accept-charset="UTF-8" action="/account/recover" id="recover_customer_password" method="post">
										<input name="FormType" type="hidden" value="recover_customer_password" />
										<input name="utf8" type="hidden" value="true" />
										<div class="form-signup" >
											
										</div>
										<div class="form-signup clearfix">
											<fieldset class="form-group">
												<input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Email*" required>
											</fieldset>
										</div>
										<div class="action_bottom">
											<input class="btn btn-primary btn-full" type="submit" value="Gửi" />
											<a href="#" class="margin-top-10 btn  btn-full btn-dark btn-style-active btn-recover-cancel" onclick="hideRecoverPasswordForm();return false;">Hủy</a>
										</div>
									</form>
									<div ><p>Chào mừng bạn đến với <a href="/">BKMART</a></p></div>
								</div>
							</div>

						</div>

					</div>

					

				</div>
			</div>
		</div>
		<!-- Modal Đăng ký-->
		<div class="modal fade" id="dangky" tabindex="-1" role="dialog">
			<div class="modal-dialog wrap-modal-login" role="document">
				<div class="text-xs-center">
					<div >
						<div class="row row-noGutter">
							<div class="col-sm-12">
								<div class="content a-center">
									<h5 class="title-modal"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#dangnhap">Đăng nhập tài khoản</a> <a href="#" class="active">Đăng ký tài khoản mới</a></h5>
									
									<form accept-charset="UTF-8" action="/account/register" id="customer_register" method="post">
										<input name="FormType" type="hidden" value="customer_register" />
										<input name="utf8" type="hidden" value="true" /><input type="hidden" id="Token-62c72dd84b4e458db37ea1f03320d947" name="Token" /><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
										<script>
										grecaptcha.ready(function() {
										grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/account/register"})
										.then(function(token) {
										document.getElementById("Token-62c72dd84b4e458db37ea1f03320d947").value = token
										});
										});
										</script>
										<div class="form-signup" >
											
										</div>
										<div class="form-signup a-left clearfix">
											<fieldset class="form-group">
												<label> Họ tên<span class="required">*</span></label>
												<input type="text" class="form-control form-control-lg" value="" name="firstName" id="firstName"  placeholder="Họ tên*" required >
											</fieldset>
											<fieldset class="form-group">
												<label> Email <span class="required">*</span></label>
												<input type="email" class="form-control form-control-lg" value="" name="email" id="email"  placeholder="Email" required="">
											</fieldset>
											<fieldset class="form-group">
												<label> Mật khẩu <span class="required">*</span></label>
												<input type="password" class="form-control form-control-lg" value="" name="password" id="password" placeholder="Mật khẩu*" required >
											</fieldset>

											<fieldset class="form-group">
												<button  value="Đăng ký" class="btn btn-primary btn-full">Đăng ký</button>
											</fieldset>

										</div>
									</form>
								
									<div class="link-popup"><p>
										Đã có tài khoản đăng nhập 
										<a href="#" class="margin-top-20" data-dismiss="modal" data-toggle="modal" data-target="#dangnhap">Tại đây</a>
										</p></div>
								</div>
							</div>
							
						</div>

					</div>
				</div>
			</div>
		</div>


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
		<script src="{{asset('js/cs.script.js')}}" type="text/javascript"></script>
		<!-- Quick view -->
		
		<script src="{{asset('js/quickview.js')}}" type="text/javascript"></script>


		<script src="{{asset('js/option-selectors.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/api.jquery.js')}}" type="text/javascript"></script>
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