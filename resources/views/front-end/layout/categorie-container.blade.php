<div class="container">
	<div class="row">					
		<section class="main_container collection col-lg-9 col-md-9 col-lg-push-3 col-md-push-3">
			<div class="box-heading relative">
				<h1 class="title-head page_title"> Tất cả sản phẩm</h1>
			</div>
			<div class="category-products products">
				<section class="products-view products-view-grid">
					<div class="row">
						@foreach($products as $pr)
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
							@include('front-end.layout.product-box')		
						</div>
						@endforeach
					</div>
					<div class="text-xs-right">
		
						<nav class="clearfix">
							<ul class="pagination clearfix f-right">
							     
								<li class="page-item disabled"><a class="page-link" href="#">«</a></li>





								<li class="active page-item disabled"><a class="page-link" href="javascript:;">1</a></li>




								<li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a></li>



								<li class="page-item"><a class="page-link" onclick="doSearch(3)" href="javascript:;">3</a></li>



								<li class="page-item"><a class="page-link" onclick="doSearch(4)" href="javascript:;">4</a></li>




								<li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">
								<i class="fa  fa-caret-right hidden-lg hidden-md"></i>
								<span class="hidden-xs hidden-sm">Trang tiếp</span>
								</a></li>
							  
							</ul>
						</nav>
						
					</div>
				</section>
			</div>
		</section>
		<aside class="dqdt-sidebar sidebar left left-content col-lg-3 col-md-3 col-lg-pull-9 col-md-pull-9">
			<script src="//bizweb.dktcdn.net/100/266/879/themes/720483/assets/search_filter.js?1558087405072" type="text/javascript"></script>
	
			<script src="//bizweb.dktcdn.net/100/266/879/themes/720483/assets/search_filter.js?1558087405072" type="text/javascript"></script>
			<div class="aside-filter">
				<div class="filter-container">	
					<div class="filter-container__selected-filter" style="display: none;">
						<div class="filter-container__selected-filter-header clearfix">
							<span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
							<a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
						</div>
						<div class="filter-container__selected-filter-list">
							<ul></ul>
						</div>
					</div>
				</div>


				<aside class="aside-item filter-vendor">
					<div class="aside-title">
						<h2 class="title-head margin-top-0"><span>Tìm theo thương hiệu</span></h2>
					</div>
					<div class="aside-content filter-group">
						<ul>

							<li class="filter-item filter-item--check-box filter-item--green ">
								<span>
									<label for="filter-acer">
										<input type="checkbox" id="filter-acer" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Acer" value="(Acer)" data-operator="OR">
										<i class="fa"></i>
										Acer
									</label>
								</span>
							</li>

							<li class="filter-item filter-item--check-box filter-item--green ">
								<span>
									<label for="filter-anne-klein">
										<input type="checkbox" id="filter-anne-klein" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Anne Klein" value="(Anne Klein)" data-operator="OR">
										<i class="fa"></i>
										Anne Klein
									</label>
								</span>
							</li>

						</ul>
					</div>
				</aside>
				

				
				
				<aside class="aside-item filter-price">
					<div class="aside-title">
						<h2 class="title-head margin-top-0"><span>Tìm theo mức giá</span></h2>
					</div>
					<div class="aside-content filter-group">
						<ul>
							<li class="filter-item filter-item--check-box filter-item--green">
								<span>
									<label for="filter-duoi-100-000d">
										<input type="checkbox" id="filter-duoi-100-000d" onchange="toggleFilter(this);" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR">
										<i class="fa"></i>
										Giá dưới 100.000đ
									</label>
								</span>
							</li>
							<li class="filter-item filter-item--check-box filter-item--green">
								<span>
									<label for="filter-100-000d-200-000d">
										<input type="checkbox" id="filter-100-000d-200-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="100.000đ - 200.000đ" value="(>100000 AND <200000)" data-operator="OR">
										<i class="fa"></i>
										100.000đ - 200.000đ							
									</label>
								</span>
							</li>	
											
						</ul>
					</div>
				</aside>

				<aside class="aside-item filter-type">
					<div class="aside-title">
						<h2 class="title-head margin-top-0"><span>Tìm theo loại sản phẩm</span></h2>
					</div>
					<div class="aside-content filter-group">
						<ul>
							<li class="filter-item filter-item--check-box filter-item--green">
								<span>
									<label for="filter-ao">
										<input type="checkbox" id="filter-ao" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type" data-text="Áo" value="(Áo)" data-operator="OR">
										<i class="fa"></i>
										Áo
									</label>
								</span>
							</li>
							
							
							
							<li class="filter-item filter-item--check-box filter-item--green">
								<span>
									<label for="filter-bo-chia-cong-usb">
										<input type="checkbox" id="filter-bo-chia-cong-usb" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type" data-text="Bộ chia cổng USB" value="(Bộ chia cổng USB)" data-operator="OR">
										<i class="fa"></i>
										Bộ chia cổng USB
									</label>
								</span>
							</li>
							
							
							
							<li class="filter-item filter-item--check-box filter-item--green">
								<span>
									<label for="filter-dien-thoai">
										<input type="checkbox" id="filter-dien-thoai" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type" data-text="Điện thoại" value="(Điện thoại)" data-operator="OR">
										<i class="fa"></i>
										Điện thoại
									</label>
								</span>
							</li>

						</ul>
					</div>
				</aside>

				<aside class="aside-item filter-tag-style-1">
					<div class="aside-title">
						<h2 class="title-head margin-top-0"><span>Tìm theo màu sắc</span></h2>
					</div>
					<div class="aside-content margin-top-20 filter-group clearfix">
						<ul style="overflow: visible;">

							<li class="filter-item color filter-item--check-box filter-item--green">
								<span>
									<label for="filter-vang">
										<input type="checkbox" id="filter-vang" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Vàng" value="(Vàng)" data-operator="OR">
										<i class="fa vang" style="background-color:#F4FA58;"></i>
										Vàng
									</label>
								</span>
							</li>	

							<li class="filter-item color filter-item--check-box filter-item--green">
								<span>
									<label for="filter-do">
										<input type="checkbox" id="filter-do" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Đỏ" value="(Đỏ)" data-operator="OR">
										<i class="fa do" style="background-color:#FF0000;"></i>
										Đỏ
									</label>
								</span>
							</li>	

							<li class="filter-item color filter-item--check-box filter-item--green">
								<span>
									<label for="filter-trang">
										<input type="checkbox" id="filter-trang" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Trắng" value="(Trắng)" data-operator="OR">
										<i class="fa trang" style="background-color:#FFFFFF;border:1px solid #ebebeb;"></i>
										Trắng
									</label>
								</span>
							</li>	

						</ul>
					</div>
				</aside>

			</div>	

			<div class="aside-item aside-mini-list-product">
				<div >
					<div class="aside-title margin-top-5">
						<h2 class="title-head">
							<a href="/san-pham-noi-bat">Sản phẩm nổi bật</a>
						</h2>
					</div>
					<div class="aside-content related-product">
						<div class="product-mini-lists">											
							<div class="products">					
								<div class="product-mini-item clearfix   on-sale">
									<a href="/collections/all/products/bo-kem-duong-da-vichy-green" class="product-img">
										
										
										<img src="//bizweb.dktcdn.net/100/266/879/themes/720483/assets/product-1.png?1558087405072"  data-lazyload="//bizweb.dktcdn.net/thumb/small/100/266/879/products/21-06313806-ef67-4a30-a7cc-7ff839258fbd-2d957b54-f59b-46d6-a893-59ddfb0042ca-ed90a187-2be5-4e1a-99ba-1ad09aed7e9a-5ecdc5aa-a189-4ce3-ae5c-18e0c2190f4b.jpg?v=1509336635723" alt="Bộ kem dưỡng da Vichy Green">
									</a>
									<div class="product-info"> 
										<h3><a href="/collections/all/products/bo-kem-duong-da-vichy-green" title="Bộ kem dưỡng da Vichy Green" class="product-name">Bộ kem dưỡng da Vichy Green</a></h3>    		
										<div class="price-box">
											
											
											
											<span class="price f-left"><span class="price product-price">600.000₫</span> </span> <!-- Giá Khuyến mại -->
											<span class="old-price  f-left"><del class="sale-price">790.000₫</del> </span> <!-- Giá gốc -->
											<div class="price-sale-flash f-left">-24% </div>
											
											
											
										</div>
									</div>
								</div>																

								<div class="product-mini-item clearfix   on-sale">
									<a href="/collections/all/products/bo-kem-duong-da-vichy-red" class="product-img">
										
										
										<img src="//bizweb.dktcdn.net/100/266/879/themes/720483/assets/product-1.png?1558087405072"  data-lazyload="//bizweb.dktcdn.net/thumb/small/100/266/879/products/15-3140b4c2-bf67-48d9-b3ac-76fe7f544c63-a63a215d-7322-4aea-9766-64df0a83a138-c9d8af8b-eb0d-4a32-bdfb-c319f7557afb.jpg?v=1509336584713" alt="Bộ kem dưỡng da Vichy Red">
									</a>
									<div class="product-info"> 
										<h3><a href="/collections/all/products/bo-kem-duong-da-vichy-red" title="Bộ kem dưỡng da Vichy Red" class="product-name">Bộ kem dưỡng da Vichy Red</a></h3>    		
										<div class="price-box">
											
											
											
											<span class="price f-left"><span class="price product-price">600.000₫</span> </span> <!-- Giá Khuyến mại -->
											<span class="old-price  f-left"><del class="sale-price">790.000₫</del> </span> <!-- Giá gốc -->
											<div class="price-sale-flash f-left">-24% </div>
											
											
											
										</div>
									</div>
								</div>																
								<div class="product-mini-item clearfix   on-sale">
									<a href="/collections/all/products/bo-kem-duong-da-dove" class="product-img">
										
										
										<img src="//bizweb.dktcdn.net/100/266/879/themes/720483/assets/product-1.png?1558087405072"  data-lazyload="//bizweb.dktcdn.net/thumb/small/100/266/879/products/11-b0629fc1-15ea-4207-956e-9e523d7bda6c-6ed62d78-a09e-4113-9b75-18aeb7496f60.jpg?v=1509332956927" alt="Bộ kem dưỡng da Dove">
									</a>
									<div class="product-info"> 
										<h3><a href="/collections/all/products/bo-kem-duong-da-dove" title="Bộ kem dưỡng da Dove" class="product-name">Bộ kem dưỡng da Dove</a></h3>    		
										<div class="price-box">
											
											
											
											<span class="price f-left"><span class="price product-price">600.000₫</span> </span> <!-- Giá Khuyến mại -->
											<span class="old-price  f-left"><del class="sale-price">790.000₫</del> </span> <!-- Giá gốc -->
											<div class="price-sale-flash f-left">-24%</div>
											
											
											
										</div>
									</div>
								</div>																

								<div class="product-mini-item clearfix   on-sale">
									<a href="/collections/all/products/bo-kem-duong-da-veckme" class="product-img">
										
										
										<img src="//bizweb.dktcdn.net/100/266/879/themes/720483/assets/product-1.png?1558087405072"  data-lazyload="//bizweb.dktcdn.net/thumb/small/100/266/879/products/22-3e443df3-e99d-4269-abc3-6be63a9c7213.jpg?v=1509332869787" alt="Bộ kem dưỡng da Veckme">
									</a>
									<div class="product-info"> 
										<h3><a href="/collections/all/products/bo-kem-duong-da-veckme" title="Bộ kem dưỡng da Veckme" class="product-name">Bộ kem dưỡng da Veckme</a></h3>    		
										<div class="price-box">
											
											
											
											<span class="price f-left"><span class="price product-price">600.000₫</span> </span> <!-- Giá Khuyến mại -->
											<span class="old-price  f-left"><del class="sale-price">790.000₫</del> </span> <!-- Giá gốc -->
											<div class="price-sale-flash f-left">-24% </div>
										</div>
									</div>
								</div>																

							</div><!-- /.products -->
							
						</div>
					</div>
				</div>
			</div>
			<script>
				var selectedSortby;
				var tt = 'Thứ tự';
				var selectedViewData = "data";
				var filter = new Bizweb.SearchFilter()
				
				 function toggleFilter(e) {
					 _toggleFilter(e);
					 renderFilterdItems();
					 doSearch(1);
				 }
				  function _toggleFilterdqdt(e) {
					  var $element = $(e);
					  var group = 'Khoảng giá';
					  var field = 'price_min';
					  var operator = 'OR';	 
					  var value = $element.attr("data-value");	
					  filter.deleteValuedqdt(group, field, value, operator);
					  filter.addValue(group, field, value, operator);

					  renderFilterdItems();
					  doSearch(1);
				  }

				  function _toggleFilter(e) {
					  var $element = $(e);
					  var group = $element.attr("data-group");
					  var field = $element.attr("data-field");
					  var text = $element.attr("data-text");
					  var value = $element.attr("value");
					  var operator = $element.attr("data-operator");
					  var filterItemId = $element.attr("id");

					  if (!$element.is(':checked')) {
						  filter.deleteValue(group, field, value, operator);
					  }
					  else{
						  filter.addValue(group, field, value, operator);
					  }

					  $(".catalog_filters li[data-handle='" + filterItemId + "']").toggleClass("active");
				  }

				  function renderFilterdItems() {
					  var $container = $(".filter-container__selected-filter-list ul");
					  $container.html("");

					  $(".filter-container input[type=checkbox]").each(function(index) {
						  if ($(this).is(':checked')) {
							  var id = $(this).attr("id");
							  var name = $(this).closest("label").text();

							  addFilteredItem(name, id);
						  }
					  });

					  if($(".filter-container input[type=checkbox]:checked").length > 0)
						  $(".filter-container__selected-filter").show();
					  else
						  $(".filter-container__selected-filter").hide();
				  }

				  function addFilteredItem(name, id) {
					  var filteredItemTemplate = "<li class='filter-container__selected-filter-item' for='{3}'><a href='javascript:void(0)' onclick=\"{0}\"><i class='fa fa-close'></i> {1}</a></li>";
					  filteredItemTemplate = filteredItemTemplate.replace("{0}", "removeFilteredItem('" + id + "')");
					  filteredItemTemplate = filteredItemTemplate.replace("{1}", name);
					  filteredItemTemplate = filteredItemTemplate.replace("{3}", id);
					  var $container = $(".filter-container__selected-filter-list ul");
					  $container.append(filteredItemTemplate);
				  }

				  function removeFilteredItem(id) {
					  $(".filter-container #" + id).trigger("click");
				  }

				  function clearAllFiltered() {
					  filter = new Bizweb.SearchFilter();
					  

					   $(".filter-container__selected-filter-list ul").html("");
						$(".filter-container input[type=checkbox]").attr('checked', false);
						$(".filter-container__selected-filter").hide();

						doSearch(1);
					   }

					   function doSearch(page, options) {
						   if(!options) options = {};

						   //NProgress.start();
						   $('.aside.aside-mini-products-list.filter').removeClass('active');
						   awe_showPopup('.loading');
						   filter.search({
							   view: selectedViewData,
							   page: page,
							   sortby: selectedSortby,
							   success: function (html) {
								   var $html = $(html);
								   // Muốn thay thẻ DIV nào khi filter thì viết như này
								   var $categoryProducts = $($html[0]); 
								   var xxx = $categoryProducts.find('.call-count');
								  

								   $('#ttfix').html(xxx.text());

								   $(".category-products").html($categoryProducts.html());
								   pushCurrentFilterState({sortby: selectedSortby, page: page});
								   awe_hidePopup('.loading');
								   initQuickView();
								   awe_lazyloadImage();
								   $('[data-toggle="tooltip"]').tooltip({container: 'body'}); 
								   $('.add_to_cart').click(function(e){
									   e.preventDefault();
									   var $this = $(this);						   
									   var form = $this.parents('form');						   
									   $.ajax({
										   type: 'POST',
										   url: '/cart/add.js',
										   async: false,
										   data: form.serialize(),
										   dataType: 'json',
										   error: addToCartFail,
										   beforeSend: function() {  
											   if(window.theme_load == "icon"){
												   awe_showLoading('.btn-addToCart');
											   } else{
												  
											   }
										   },
										   success: addToCartSuccess,
										   cache: false
									   });
								   });
								   $('html, body').animate({
									   scrollTop: $('.category-products').offset().top
								   }, 0);
								   $('.owl-carousel:not(.not-dqowl)').each( function(){
									   var small_xs_item = $(this).attr('data-smxs-items');
									   var xs_item = $(this).attr('data-xs-items');
									   var md_item = $(this).attr('data-md-items');
									   var lg_item = $(this).attr('data-lg-items');
									   var sm_item = $(this).attr('data-sm-items');	
									   var margin=$(this).attr('data-margin');
									   var dot=$(this).attr('data-dot');
									   var nav=$(this).attr('data-nav');
									   if (typeof margin !== typeof undefined && margin !== false) {    
									   } else{
										   margin = 30;
									   }
									   if (typeof small_xs_item !== typeof undefined && small_xs_item !== false) {    
									   } else{
										   small_xs_item = 1;
									   }
									   if (typeof xs_item !== typeof undefined && xs_item !== false) {    
									   } else{
										   xs_item = 1;
									   }
									   if (typeof sm_item !== typeof undefined && sm_item !== false) {    

									   } else{
										   sm_item = 3;
									   }	

									   if (typeof md_item !== typeof undefined && md_item !== false) {    
									   } else{
										   md_item = 3;
									   }
									   if (typeof lg_item !== typeof undefined && lg_item !== false) {    
									   } else{
										   lg_item = 4;
									   }
									   if (typeof dot !== typeof undefined && dot !== true) {   
										   dot= dot;
									   } else{
										   dot = false;
									   }
									   if (typeof nav !== typeof undefined && nav !== true) {   
										   nav= nav;
									   } else{
										   nav = false;
									   }		

									   $(this).owlCarousel({
										   loop:false,
										   margin:Number(margin),
										   responsiveClass:true,
										   dots:dot,
										   responsive:{
											   0:{
												   items:Number(small_xs_item),
												   nav:nav
											   },
											   350:{
												   items:Number(xs_item),
												   nav:nav
											   },
											   768:{
												   items:Number(sm_item),
												   nav:nav
											   },
											   992:{
												   items:Number(md_item),
												   nav:nav					
											   },
											   1200:{
												   items:Number(lg_item),
												   nav:nav					
											   }
										   }
									   })
								   });

								   resortby(selectedSortby);					   
								   awe_callbackW();
								   $('.open-filters').removeClass('open');
								   $('.dqdt-sidebar').removeClass('open');
								   if(window.BPR)
									   return window.BPR.initDomEls(), window.BPR.loadBadges();

							   }
						   });		

					   }

					   function sortby(sort) {			 
						   switch(sort) {
							   case "price-asc":
								   selectedSortby = "price_min:asc";					   
								   break;
							   case "price-desc":
								   selectedSortby = "price_min:desc";
								   break;
							   case "alpha-asc":
								   selectedSortby = "name:asc";
								   break;
							   case "alpha-desc":
								   selectedSortby = "name:desc";
								   break;
							   case "created-desc":
								   selectedSortby = "created_on:desc";
								   break;
							   case "created-asc":
								   selectedSortby = "created_on:asc";
								   break;
							   default:
								   selectedSortby = "";
								   break;
						   }

						   doSearch(1);
					   }

					   function resortby(sort) {
						   switch(sort) {				  
							   case "price_min:asc":
								   tt = "Giá tăng dần";
								   break;
							   case "price_min:desc":
								   tt = "Giá giảm dần";
								   break;
							   case "name:asc":
								   tt = "Tên A → Z";
								   break;
							   case "name:desc":
								   tt = "Tên Z → A";
								   break;
							   case "created_on:desc":
								   tt = "Hàng mới nhất";
								   break;
							   case "created_on:asc":
								   tt = "Hàng cũ nhất";
								   break;
							   default:
								   tt = "Mặc định";
								   break;
						   }			   
						   $('#sort-by > ul > li > span').html(tt);

					   }


					   function _selectSortby(sort) {			 
						   resortby(sort);
						   switch(sort) {
							   case "price-asc":
								   selectedSortby = "price_min:asc";
								   break;
							   case "price-desc":
								   selectedSortby = "price_min:desc";
								   break;
							   case "alpha-asc":
								   selectedSortby = "name:asc";
								   break;
							   case "alpha-desc":
								   selectedSortby = "name:desc";
								   break;
							   case "created-desc":
								   selectedSortby = "created_on:desc";
								   break;
							   case "created-asc":
								   selectedSortby = "created_on:asc";
								   break;
							   default:
								   selectedSortby = sort;
								   break;
						   }
					   }

					   function toggleCheckbox(id) {
						   $(id).click();
					   }

					   function pushCurrentFilterState(options) {

						   if(!options) options = {};
						   var url = filter.buildSearchUrl(options);
						   var queryString = url.slice(url.indexOf('?'));			  
						   if(selectedViewData == 'data_list'){
							   queryString = queryString + '&view=list';				 
						   }
						   else{
							   queryString = queryString + '&view=grid';				   
						   }

						   pushState(queryString);
					   }

					   function pushState(url) {
						   window.history.pushState({
							   turbolinks: true,
							   url: url
						   }, null, url)
					   }
					   function switchView(view) {			  
						   switch(view) {
							   case "list":
								   selectedViewData = "data_list";					   
								   break;
							   default:
								   selectedViewData = "data";

								   break;
						   }			   
						   doSearch(1);
					   }

					   function selectFilterByCurrentQuery() {
						   var isFilter = false;
						   var url = window.location.href;
						   var queryString = decodeURI(window.location.search);
						   var filters = queryString.match(/\(.*?\)/g);

						   if(filters && filters.length > 0) {
							   filters.forEach(function(item) {
								   item = item.replace(/\(\(/g, "(");
								   var element = $(".filter-container input[value='" + item + "']");
								   element.attr("checked", "checked");
								   _toggleFilter(element);
							   });

							   isFilter = true;
						   }

						   var sortOrder = getParameter(url, "sortby");
						   if(sortOrder) {
							   _selectSortby(sortOrder);
						   }

						   if(isFilter) {
							   doSearch(1);
						   }
					   }

					   function getParameter(url, name) {
						   name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
						   var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
							   results = regex.exec(url);
						   return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
					   }

					   $( document ).ready(function() {
						   selectFilterByCurrentQuery();
						   $('.filter-group .filter-group-title').click(function(e){
							   $(this).parent().toggleClass('active');
						   });

						   $('.filter-mobile').click(function(e){
							   $('.aside.aside-mini-products-list.filter').toggleClass('active');
						   });

						   $('#show-admin-bar').click(function(e){
							   $('.aside.aside-mini-products-list.filter').toggleClass('active');
						   });

						   $('.filter-container__selected-filter-header-title').click(function(e){
							   $('.aside.aside-mini-products-list.filter').toggleClass('active');
						   });
					   });
			</script>	
		</aside>
		<div id="open-filters" class="open-filters hidden-lg hidden-md">
			<i class="fa fa-filter"></i>
			<span>Lọc</span>
		</div>
	</div>
</div>