@if(Auth::user()->systems_id ==1)
	<div class="site-sidebar">
		<div class="custom-scroll custom-scroll-light">
			<ul class="sidebar-menu">
				
				<li class="menu-title">Main</li>
				
				<li class="with-sub">
					<a href="#" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="tag tag-purple"></span>
						<span class="s-icon"><i class="ti-anchor"></i></span>
						<span class="s-text">HỆ THỐNG</span>
					</a>
					<ul>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Slide Header</a></li>
						<li><a href="{{url('/admin/ckfinder/ckfinder.html?type=Images&CKEditor=content&CKEditorFuncNum=1&langCode=vi')}}" target="_blank">Media</a></li>
						<li><a href="#">Cài đặt</a></li>

						<li><a href="{{URL::route('addHomeSystem')}}">gian hàng nổi bật</a></li>

					</ul>
				</li>

				<li class="menu-title">Components</li>
				<li class="with-sub">
					<a href="{{URL::route('listCategories')}}" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-gallery"></i></span>
						<span class="s-text">Danh mục</span>
					</a>
				</li>
				<li class="with-sub">
					<a href="{{URL::route('listProducts')}}" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-paint-bucket"></i></span>
						<span class="tag tag-success">50</span>
						<span class="s-text">Sản phẩm</span>
					</a>
				</li>
				
				<li class="with-sub">
					<a href="#" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-menu-alt"></i></span>
						<span class="s-text">Khách hàng</span>
					</a>
					<ul>
						<li><a href="{{URL::route('addSystem')}}">Tạo gian hàng</a></li>
					</ul>
				</li>
				<li class="with-sub">
					<a href="" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="tag tag-success">50</span>
						<span class="s-icon"><i class="ti-gallery"></i></span>
						<span class="s-text">Đơn hàng</span>
					</a>
				</li>
				
				<li class="with-sub">
					<a href="{{URL::route('listUsers')}}" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-menu-alt"></i></span>
						<span class="s-text">Tài khoản</span>
					</a>
				</li>
				
				
			</ul>
		</div>
	</div>
@else
	<div class="site-sidebar">
		<div class="custom-scroll custom-scroll-light">
			<ul class="sidebar-menu">
				
				<li class="menu-title">Main</li>
				
				<li class="with-sub">
					<a href="#" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="tag tag-purple"></span>
						<span class="s-icon"><i class="ti-anchor"></i></span>
						<span class="s-text">HỆ THỐNG</span>
					</a>
					<ul>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Slide Header</a></li>
						<li><a href="{{url('/admin/ckfinder/ckfinder.html?type=Images&CKEditor=content&CKEditorFuncNum=1&langCode=vi')}}" target="_blank">Media</a></li>
						<li><a href="#">Cài đặt hệ thống</a></li>
					</ul>
				</li>

				<li class="menu-title">Components</li>
				<li class="with-sub">
					<a href="{{URL::route('listCategories')}}" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-gallery"></i></span>
						<span class="s-text">Danh mục</span>
					</a>
				</li>
				<li class="with-sub">
					<a href="{{URL::route('listProducts')}}" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-paint-bucket"></i></span>
						<span class="tag tag-success">50</span>
						<span class="s-text">Sản phẩm</span>
					</a>
				</li>
				
				<li class="with-sub">
					<a href="#" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-menu-alt"></i></span>
						<span class="s-text">Khách hàng</span>
					</a>
					<ul>
						<li><a href="">Khách hàng mua</a></li>
						<li><a href="">Khách hàng đăng ký hợp tác</a></li>
					</ul>
				</li>
				<li class="with-sub">
					<a href="" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="tag tag-success">50</span>
						<span class="s-icon"><i class="ti-gallery"></i></span>
						<span class="s-text">Đơn hàng</span>
					</a>
				</li>
				<li class="with-sub">
					<a href="#" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-menu-alt"></i></span>
						<span class="s-text">Dịch vụ</span>
					</a>
					<ul>
						<li><a href="">Mua bán</a></li>
						<li><a href="">Quảng cáo</a></li>
					</ul>
				</li>
				
				<li class="with-sub">
					<a href="{{URL::route('listUsers')}}" class="waves-effect  waves-light">
						<span class="s-caret"><i class="fa fa-angle-down"></i></span>
						<span class="s-icon"><i class="ti-menu-alt"></i></span>
						<span class="s-text">User</span>
					</a>
				</li>
				
				<li class="menu-title compact-hide">System usage</li>
				<li class="compact-hide">
					<div class="progress-widget progress-widget-light">
						<div class="mb-0-5">
							SSD
							<span class="float-xs-right">5 GB</span>
						</div>
						<progress class="progress progress-rounded progress-success progress-sm" value="60" max="100">100%</progress>
						<div class="mb-0-5">
							CPU
							<span class="float-xs-right">80%</span>
						</div>
						<progress class="progress progress-rounded progress-danger progress-sm mb-0-5" value="80" max="100">100%</progress>
					</div>
				</li>
				<li class="menu-title compact-hide">Tags</li>
				<li class="compact-hide">
					<a href="javascript: void(0);" class="waves-effect  waves-light">
						<span class="s-icon"><i class="fa fa-circle-o text-danger"></i></span>
						<span class="s-text">Ideas</span>
					</a>
				</li>
				<li class="compact-hide">
					<a href="javascript: void(0);" class="waves-effect  waves-light">
						<span class="s-icon"><i class="fa fa-circle-o text-warning"></i></span>
						<span class="s-text">Projects</span>
					</a>
				</li>
				<li class="compact-hide">
					<a href="#" class="waves-effect  waves-light">
						<span class="s-icon"><i class="fa fa-circle-o text-primary"></i></span>
						<span class="s-text">Documentation</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
@endif