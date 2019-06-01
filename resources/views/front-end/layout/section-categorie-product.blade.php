<?php $i=0; ?>
@foreach($cate_highlights as $cate)
<section class="awe-section-5">	
	<div class="section section-collection section-collection-1">
		<div class="container">

			<div class="collection-border">

				<div class="collection-main">
					<div class="row ">

						<div class="col-lg-12 col-sm-12">
							
							<div class="e-tabs not-dqtab ajax-tab-2"  data-section="ajax-tab-2">
								<div class="row row-noGutter">
									<div class="col-sm-12">
										<div class="content">
											<div class="section-title">
												<h2>
													{{$cate->name}}
												</h2>
											</div>
											<div>
												<ul class="tabs tabs-title tab-mobile clearfix hidden-sm hidden-md hidden-lg">
													<li class="prev"><i class="fa fa-angle-left"></i></li>
													<li class="tab-link tab-title hidden-sm hidden-md hidden-lg current tab-titlexs" data-tab="tab-1">
														
														<span>Thời trang nam</span>
														
													</li>
													<li class="next"><i class="fa fa-angle-right"></i></li>
												</ul>
												<ul class="tabs tabs-title ajax clearfix hidden-xs">
													<?php $j=1; ?>
													@foreach($cate_news[$i] as $cate_new)
													
														<li class="tab-link has-content" data-tab="tab-{{$j}}" data-url="/thoi-trang-nam">
															<span> {{$cate_new->name}} </span>
														</li>
														<?php $j++; ?>
													@endforeach
													
													
												</ul>
												<?php $k=1; ?>
												@foreach($products_news[$i] as $products_new)
													<div class="tab-{{$k}} tab-content">
														
														<div class="products products-view-grid owl-carousel" data-lgg-items="5" data-lg-items='5' data-md-items='4' data-sm-items='3' data-xs-items="2" data-xss-items="2" data-margin='14' data-nav="true">
															@foreach($products_new as $pr)
																@if($pr == null)
																	<div class="container">
																		<span>không có sản phẩm nổi bật nào trong danh mục này</span>
																		
																	</div>
																@else
																	<div class="item">
																		@include('front-end.layout.product-box')
																	</div>
																@endif
															@endforeach

														</div><!-- /.products -->
														
														
													</div>
													<?php $k++; ?>
												@endforeach
												
												
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<?php $i++; ?>
@endforeach