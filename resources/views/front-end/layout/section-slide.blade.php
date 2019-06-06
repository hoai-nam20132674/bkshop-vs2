<section class="awe-section-1">	
	<div class="section section-category ">
		<div class="cate-overlay"></div>
		<div class="container">
			<div class="row row-noGutter">
				<div class="col-lg-3 col-262">
					<div class="cate-sidebar">
						<nav>
							<div class="hidden-md  hidden-lg">
								<h2 class="mobile-title">
									Danh mục sản phẩm
								</h2>
							</div>		
							<ul id="nav" class="site-nav vertical-nav">
								@if($system->id == 1)
									@foreach($cateRoot as $cate)
										@php
											$tag_cate = App\TagCategories::where('root_categorie_id',$cate->id)->where('highlights',1)->get();
											$array = App\Http\Controllers\AuthClient\ClientController::arrayColumn($tag_cate,$col='categorie_id');
											$array = App\Categories::whereIn('id',$array)->get();
											$array = App\Http\Controllers\AuthClient\ClientController::arrayColumn($array,$col='systems_id');
											$array = App\Systems::whereIn('id',$array)->get();
										@endphp
											<li class="lev-1 nav-item  clearfix has-mega mega-menu">
												<div class="icon">
													<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/cate1_icon.png?1558087405072" alt="Mobile & Tablet">
													<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/cate1_w_icon.png?1558087405072" alt=" Mobile & Tablet">
												</div>
												<a href="/smartphone">
													<span>{{$cate->name}} 
													<i class="label new">new</i>
													</span>
													<p>Khuyến mại giá cực sốc</p>
													
													 <i class="fa fa-angle-right"></i>
													
													
												</a>
												@if(count($array) != 0)  
													
													<ul class="dropdown-menu mega-menu-content clearfix ">
														
														<li class="col-sm-12">
															<span>Những đơn vị cung cấp sản phẩm uy tín bạn có thể lựa chọn</span>
		
															<ul>
																@foreach($array as $ar)
																<li class="col-sm-3">
																	<ul class="mega-item">
																		<li class="h3">
																			<a href="/{{$ar->website}}">
																				<img src="{{asset('uploads/images/systems/logo/'.$ar->logo)}}">
																				
																				 <i class="fa fa-angle-right hidden-lg hidden-md"></i>
																			</a>
																		</li>
																	</ul>
																</li>
																@endforeach

															</ul>
														</li>
														
		
													</ul>
												@else
												@endif
												
											</li>
									@endforeach

							

									<li class="lev-1 xemthem hidden-lgg nav-item  clearfix ">
										<a href="javascript:;">
											<span> Xem thêm</span>
											<p>Xem hết menu</p>				
										</a> 
									</li>
									<li class="lev-1 thugon hidden-lgg nav-item  clearfix ">
										<a href="javascript:;">
											<span> Thu gọn</span>
											<p>Thu gọn menu</p>				
										</a> 
									</li>
								@else

								<li class="lev-1 nav-item  clearfix has-mega mega-menu">
									<div class="icon">
										<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/cate1_icon.png?1558087405072" alt="Mobile & Tablet">
										<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/cate1_w_icon.png?1558087405072" alt=" Mobile & Tablet">
									</div>
									<a href="/smartphone">
										<span> Mobile & Tablet 
										<i class="label new">new</i>
										</span>
										<p>Khuyến mại giá cực sốc</p>
										
										 <i class="fa fa-angle-right"></i>
										
										
									</a>  
									
									<ul class="dropdown-menu mega-menu-content clearfix ">
										
										<li class="col-sm-12">
											<ul>
												
												
												<li class="col-sm-3">
													<ul class="mega-item">
														<li class="h3">
															<a href="/smartphone">
																<span> Smartphone</span>
																 <i class="fa fa-angle-right hidden-lg hidden-md"></i>
															</a>
														</li>
														

														<li class="lev-2 nav-item">
															<a class="nav-link" href="/thiet-bi-khac">Iphone</a>
														</li>

														

														<li class="lev-2 nav-item">
															<a class="nav-link" href="/smartphone">Samsung</a>
														</li>

														

														<li class="lev-2 nav-item">
															<a class="nav-link" href="/smartphone">Sony</a>
														</li>

														

														<li class="lev-2 nav-item">
															<a class="nav-link" href="/smartphone">Xaomi</a>
														</li>

														

														<li class="lev-2 nav-item">
															<a class="nav-link" href="/smartphone">Asus</a>
														</li>

														

														<li class="lev-2 nav-item">
															<a class="nav-link" href="/smartphone">B Phone</a>
														</li>

														
													</ul>
												</li>

											</ul>
										</li>

									</ul>
									
								</li>

								<li class="lev-1 nav-item  clearfix ">
									<div class="icon">
										<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/cate2_icon.png?1558087405072" alt="Điện thoại thông minh">
										<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/cate2_w_icon.png?1558087405072" alt=" Điện thoại thông minh">
									</div>
									<a href="/smartphone">
										<span> Điện thoại thông minh 
										<i class="label "></i>
										</span>
										<p>TV Led, Loa, DVD, Dàn máy...</p>
										
										
									</a>  
									
								</li>

								<li class="lev-1 xemthem hidden-lgg nav-item  clearfix ">
									<a href="javascript:;">
										<span> Xem thêm</span>
										<p>Xem hết menu</p>				
									</a> 
								</li>
								<li class="lev-1 thugon hidden-lgg nav-item  clearfix ">
									<a href="javascript:;">
										<span> Thu gọn</span>
										<p>Thu gọn menu</p>				
									</a> 
								</li>
								@endif
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-lg-9 col-fix262 col-md-12">
					<div class="cate-banner">
						<div id="slider" class="home-slider owl-carousel" data-lg-items='1' data-md-items='1' data-sm-items='1' data-xs-items="1" data-xss-items="1" data-margin='0' data-nav="true">
							
							
							
							
							
							
							
							
							<div class="item">
								<a href="#" class="clearfix">
									<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/slider_1.png?1558087405072" alt="Alt">
								</a>	
							</div>
							
							
							
							
							
							
							
							
							
							<div class="item">
								<a href="#" class="clearfix">
									<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/slider_2.png?1558087405072" alt="Alt">
								</a>	
							</div>
							
							
							
							
							
							
							
							
							
							<div class="item">
								<a href="#" class="clearfix">
									<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/slider_3.png?1558087405072" alt="Alt">
								</a>	
							</div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
						</div><!-- /.products -->
						<div class="row row-noGutter hidden-sm hidden-xs">
							<div class="col-sm-6">
								<a href="#">
									<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/slider-banner1.png?1558087405072" alt="Zomart" />
								</a>
							</div>
							<div class="col-sm-6">
								<a href="#">
									<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/slider-banner2.png?1558087405072" alt="Zomart" />
								</a>
							</div>
						</div>
						
					</div>
					<div class="banner-product  hidden-sm hidden-xs hidden-md">
						<a href="#">
							<img src="https://bizweb.dktcdn.net/100/266/879/themes/720483/assets/slider-banner3.png?1558087405072" alt="Zomart" />
						</a>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>