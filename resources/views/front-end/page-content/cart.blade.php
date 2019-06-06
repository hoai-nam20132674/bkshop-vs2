@extends('front-end.layout.default')
@section('css-js-header')
	<link href="{{asset('css/bpr.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/productReviews.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
	@include('front-end.layout.categorie-list')
	@include('front-end.layout.breadcrumb')
	<section class="main-cart-page main-container col1-layout">
		<div class="main container hidden-xs">
			<div class="col-main cart_desktop_page cart-page">
				<div class="cart page_cart hidden-xs">
					<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
						<div class="bg-scroll">
							<div class="cart-thead">
								<div style="width: 17%;">Hình ảnh</div>
								<div style="width: 33%"><span class="nobr">Tên sản phẩm</span></div>
								<div style="width: 15%" class="a-center"><span class="nobr">Đơn giá</span></div>
								<div style="width: 14%" class="a-center">Số lượng</div>
								<div style="width: 15%" class="a-center">Thành tiền</div>
								<div style="width: 6%">Xoá</div>
							</div>
							<div class="cart-tbody">
								<div class="item-cart productid-14040562">
									<div style="width: 17%" class="image">
										<a class="product-image" title="Iphone 7 Red" href="/iphone-7-red">
											<img width="120" height="auto" alt="Iphone 7 Red" src="//bizweb.dktcdn.net/thumb/compact/100/266/879/products/24.jpg">
										</a>
									</div>
									<div style="width: 33%" class="a-center">
										<h2 class="product-name">
											<a href="/iphone-7-red">Iphone 7 Red</a>
											<span class="variant-title" style="display: none;"> - Default Title</span> 
										</h2>
									</div>
									<div style="width: 15%" class="a-center">
										<span class="item-price"> <span class="price pricechange">15.600.000₫</span></span>
									</div>
									<div style="width: 14%" class="a-center">
										<div class="input_qty_pr relative">
											<input class="variantID" type="hidden" name="variantId" value="14040562">
											<button onclick="var result = document.getElementById('qtyItem14040562'); var qtyItem14040562 = result.value; if( !isNaN( qtyItem14040562 ) &amp;&amp; qtyItem14040562 > 1 ) result.value--;return false;" class="reduced_pop items-count btn-minus" type="button" disabled="">–</button>
											<input type="text" maxlength="12" min="0" class="input-text number-sidebar input_pop input_pop qtyItem14040562" id="qtyItem14040562" name="Lines" size="4" value="1" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="fixfun(this);">
											<button onclick="var result = document.getElementById('qtyItem14040562'); var qtyItem14040562 = result.value; if( !isNaN( qtyItem14040562 )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">+</button>
										</div>
									</div>
									<div style="width: 15%" class="a-center">
										<span class="cart-price"> <span class="price">15.600.000₫</span></span>
									</div>
									<div style="width: 6%">
										<a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;" data-id="14040562">
											<span><span>Xóa</span></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="cart-collaterals cart_submit row">
						<div class="totals col-sm-12 col-md-12 col-xs-12">
							<div class="totals">
								<div class="inner">
									<button class="btn btn-gray f-left" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'">
										<span>Tiếp tục mua hàng</span>
									</button>
									<button class="btn  btn-gray f-right" title="Xóa toàn bộ đơn hàng" type="button" onclick="window.location.href='/cart/clear'">
										<span>Xóa toàn bộ đơn hàng</span>
									</button>
									<table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table">
										<colgroup>
											<col>
											<col>
										</colgroup>
										<tfoot>
											<tr>
												<td colspan="20" class="a-left"><span>Tổng tiền:</span> </td>
												<td class="a-right"><strong><span class="totals_price price">15.600.000₫</span></strong></td>
											</tr>
										</tfoot>
									</table>
									<ul class="checkout">
										<li class="clearfix">
											<button class="btn btn-primary button btn-proceed-checkout f-right" title="Tiến hành đặt hàng" type="button" onclick="window.location.href='/checkout'">
												<span>Thanh toán</span>
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="cart-mobile hidden-md hidden-lg hidden-sm">
			<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
				<div class="header-cart" style="background:#fff;">
					
					<div class="title-cart hidden">
						<h3>Giỏ hàng của bạn</h3>
					</div>
					
				</div>

				<div class="header-cart-content" style="background:#fff;">
					<div class="cart_page_mobile content-product-list">
						<div class="item-product item productid-14040562 ">
							<div class="item-product-cart-mobile">
								<a href="/iphone-7-red">	</a>
								<a class="product-images1" href="" title="Iphone 7 Red">
									<img width="80" height="150" alt="" src="//bizweb.dktcdn.net/thumb/small/100/266/879/products/24.jpg">
								</a>
							</div>
							<div class="title-product-cart-mobile">
								<h3><a href="/iphone-7-red" title="Iphone 7 Red">Iphone 7 Red</a></h3>
								<p>Giá: <span class="pricechange">15.600.000₫</span></p>
							</div>
							<div class="select-item-qty-mobile">
								<div class="txt_center">
									<input class="variantID" type="hidden" name="variantId" value="14040562">
									<button onclick="var result = document.getElementById('qtyMobile14040562'); var qtyMobile14040562 = result.value; if( !isNaN( qtyMobile14040562 ) &amp;&amp; qtyMobile14040562 > 0 ) result.value--;return false;" class="reduced items-count btn-minus" type="button" disabled="">–</button>
									<input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile14040562" id="qtyMobile14040562" name="Lines" size="4" value="1" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="fixfun(this);">
									<button onclick="var result = document.getElementById('qtyMobile14040562'); var qtyMobile14040562 = result.value; if( !isNaN( qtyMobile14040562 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button>
								</div>
								<a class="button remove-item remove-item-cart" href="javascript:;" data-id="14040562">Xoá</a>
							</div>
						</div>
					</div>
					<div class="header-cart-price" style="">
						<div class="title-cart ">
							<h3 class="text-xs-left">Tổng tiền</h3>
							<a class="text-xs-right totals_price_mobile">15.600.000₫</a>
						</div>
						<div class="checkout">
							<button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='/checkout'">
								<span>Tiến hành thanh toán</span>
							</button>
						</div>
					</div>
				</div>

			</form>

		</div>

	</section>
@endsection