@extends('front-end.layout.default')
@section('css-js-header')
	<link href="{{asset('css/bpr.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/productReviews.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.contact-form{
		    background: #fff;

		}
		.contact-form .form-control{
		    border-radius:1rem;
		}
		.contact-image{
		    text-align: center;
		}
		.contact-image img{
		    border-radius: 6rem;
		    width: 11%;
		    margin-top: -3%;
		    transform: rotate(29deg);
		}
		.contact-form form{
		}
		.contact-form form .row{
		    margin-bottom: -7%;
		}
		.contact-form h3{
		    margin-bottom: 8%;
		    margin-top: -10%;
		    text-align: center;
		    color: #0062cc;
		}
		.contact-form .btnContact {
		    width: 100%;
		    border: none;
		    border-radius: 1rem;
		    padding: 1.5%;
		    background: #dc3545;
		    font-weight: 600;
		    color: #fff;
		    cursor: pointer;
		}
		.btnContactSubmit
		{
		    width: 100%;
		    border-radius: 1rem;
		    padding: 1.5%;
		    color: #fff;
		    background-color: #0062cc;
		    border: none;
		    cursor: pointer;
		}
	</style>
@endsection
@section('content')
	@include('front-end.layout.categorie-list')
	@include('front-end.layout.breadcrumb')
	<section class="main-cart-page main-container col1-layout">
		<div class="main container hidden-xs">
			<div class="col-main cart_desktop_page cart-page">
				<div class="cart page_cart hidden-xs">
					<form action="/cart" novalidate="" class="margin-bottom-0">
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
								@php
									$content = Cart::getContent();

								@endphp
								@foreach($content as $item)
									@php
										$products_properties = App\ProductsProperties::where('products_detail_id',$item->id)->get();
										$properties_id = App\Http\Controllers\AuthClient\ClientController::arrayColumn($products_properties,$col='properties_id');
										$properties = App\Properties::join('properties_type','properties.properties_type_id','=','properties_type.id')->whereIn('properties.id',$properties_id)->select('properties.*','properties_type.name')->get();
										
									@endphp
									<div class="item-cart product-cart " data-id="{{$item->id}}">
										<div style="width: 17%" class="image">
											<a class="product-image" title="{{$item->name}}" href="{{$item->attributes->url}}">
												<img width="100%" height="auto" alt="{{$item->name}}" src="{{asset('uploads/images/products/avatar/'.$item->attributes->img)}}">
											</a>
										</div>
										<div style="width: 33%" class="a-center">
											<h2 class="product-name">
												<a class="pr-name" pr-name="@foreach($properties as $pp) {{$pp->name}} {{$pp->value}},@endforeach" href="{{$item->attributes->url}}">{{$item->name}} @foreach($properties as $pp) {{$pp->name}} {{$pp->value}},@endforeach</a>
												<span class="variant-title" style="display: none;"> - Default Title</span> 
											</h2>
										</div>
										<div style="width: 15%" class="a-center">
											<span class="item-price"> <span class="price pricechange">{!!number_format($item->price)!!} đ</span></span>
										</div>
										<div style="width: 14%" class="a-center">
											<div class="input_qty_pr relative">
												<button class="item-count btn-minus qtyminus" data-field="quantity{{$item->id}}" type="button">–</button>
												<input type="text" maxlength="12" min="0" id="qty" data-id="{{$item->id}}" data-field='quantity{{$item->id}}' class="qty input-text number-sidebar input_pop " name="quantity" size="2" value="{{$item->quantity}}" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onChange="if(this.value == '')this.value=1;">
												<button class="item-count btn-plus qtyplus" data-field="quantity{{$item->id}}" type="button">+</button>
											</div>
										</div>
										<div style="width: 15%" class="a-center">
											<span class="cart-price"> <span class="price" >{!!number_format($item->price*$item->quantity)!!} đ</span></span>
										</div>
										<div style="width: 6%">
											<a class="button remove-item remove-item-cart" title="Xóa" data-id="{{$item->id}}" price="{{$item->price*$item->quantity}}">
												<span><span>Xóa</span></span>
											</a>
										</div>
									</div>
								@endforeach
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
										<span>Cập nhật đơn hàng</span>
									</button>
									<table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table">
										<colgroup>
											<col>
											<col>
										</colgroup>
										<tfoot>
											<tr>
												<td colspan="20" class="a-left"><span>Tổng tiền:</span> </td>
												<td class="a-right"><strong><span class="totals_price price totalPrice" price="{{Cart::getTotal()}}">{!!number_format(Cart::getTotal())!!} đ</span></strong></td>
											</tr>
										</tfoot>
									</table>
									
								</div>
							</div>
						</div>
					</div>
					<div class="container contact-form">
			            
			            <form action="{{URL::route('postAddOrder')}}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token()}}">
			               	<div class="row">
			                    <div class="col-md-6">
			                    	@if(Auth::guard('users_client')->check())
				                        <div class="form-group">
				                            <input type="text" name="name" class="form-control" placeholder="Họ tên" value="{{Auth::guard('users_client')->user()->name}}" />
				                        </div>
				                        <div class="form-group">
				                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{Auth::guard('users_client')->user()->email}}" />
				                        </div>
				                        <div class="form-group">
				                            <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" value="{{Auth::guard('users_client')->user()->phone}}" />
				                        </div>
				                        <div class="form-group">
				                            <input type="text" name="address" class="form-control" placeholder="Địa chỉ giao hàng" value="{{old('address')}}" />
				                        </div>
			                        @else
			                        	<div class="form-group">
				                            <input type="text" name="name" class="form-control" placeholder="Họ tên" value="{{old('name')}}" />
				                        </div>
				                        <div class="form-group">
				                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}" />
				                        </div>
				                        <div class="form-group">
				                            <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" value="{{old('phone')}}" />
				                        </div>
				                        <div class="form-group">
				                            <input type="text" name="address" class="form-control" placeholder="Địa chỉ giao hàng" value="{{old('address')}}" />
				                        </div>
				                    @endif
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <textarea name="messages" class="form-control" placeholder="Lời nhắn" style="width: 100%; height: 150px;"></textarea>
			                        </div>
			                        <div class="form-group">
			                            <input type="submit" name="btnSubmit" class="btnContact" value="ĐẶT HÀNG" />
			                        </div>
			                    </div>
			                </div>
			            </form>
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
						@foreach($content as $item)

							@php
								$products_properties = App\ProductsProperties::where('products_detail_id',$item->id)->get();
								$properties_id = App\Http\Controllers\AuthClient\ClientController::arrayColumn($products_properties,$col='properties_id');
								$properties = App\Properties::join('properties_type','properties.properties_type_id','=','properties_type.id')->whereIn('properties.id',$properties_id)->select('properties.*','properties_type.name')->get();
								
							@endphp
							<div class="item-product item product-cart " data-id="{{$item->id}}">
								<div class="item-product-cart-mobile">
									<a href="/iphone-7-red">	</a>
									<a class="product-images1" href="{{$item->attributes->url}}" title="{{$item->name}}">
										<img width="80" height="150" alt="" src="{{asset('uploads/images/products/avatar/'.$item->attributes->img)}}">
									</a>
								</div>
								<div class="title-product-cart-mobile">
									<h3><a class="pr-name" pr-name="@foreach($properties as $pp) {{$pp->name}} {{$pp->value}},@endforeach" href="{{$item->attributes->url}}" title="{{$item->name}}">{{$item->name}} @foreach($properties as $pp) {{$pp->name}} {{$pp->value}},@endforeach</a></h3>
									<p>Giá: <span class="pricechange">{!!number_format($item->price)!!} đ</span></p>
								</div>
								<div class="select-item-qty-mobile">
									<div class="txt_center">

										<button class="reduced item-count btn-minus qtyminus" data-field="quantity{{$item->id}}" type="button">–</button>
										<input type="text" maxlength="12" min="0" id="qty" data-id="{{$item->id}}" data-field='quantity{{$item->id}}' class="qty input-text number-sidebar input_pop " name="quantity" size="2" value="{{$item->quantity}}" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onChange="if(this.value == '')this.value=1;">
										<button class="increase item-count btn-plus qtyplus" data-field="quantity{{$item->id}}" type="button">+</button>
									</div>
									<a class="button remove-item remove-item-cart" data-id="{{$item->id}}" price="{{$item->price*$item->quantity}}">Xoá</a>
								</div>
							</div>
						@endforeach
					</div>
					<div class="header-cart-price" style="">
						<div class="title-cart ">
							<h3 class="text-xs-left">Tổng tiền</h3>
							<a class="text-xs-right totals_price_mobile totalPrice" price="{{Cart::getTotal()}}">{!!number_format(Cart::getTotal())!!} đ</a>
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
@section('css-js-footer')
	
@endsection