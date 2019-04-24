@extends('auth.layout.default')
@section('css')
	<link rel="stylesheet" href="{{asset('auth/vendor/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('auth/vendor/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('auth/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('auth/vendor/animate.css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('auth/vendor/jscrollpane/jquery.jscrollpane.css')}}">
	<link rel="stylesheet" href="{{asset('auth/vendor/waves/waves.min.css')}}">
	<link rel="stylesheet" href="{{asset('auth/vendor/switchery/dist/switchery.min.css')}}">
	<link rel="stylesheet" href="{{asset('auth/css/upload-image.css')}}">

	<!-- watches product -->
	<link rel="stylesheet" href="{{asset('css/style_watches.css')}}">
	<!-- end -->
@endsection()
@section('content')
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Thêm mới sản phẩm</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item"><a href="{{URL::route('authIndex')}}">Trang chủ</a></li>
				<li class="breadcrumb-item"><a href="{{URL::route('listProducts')}}">Danh sách sản phẩm</a></li>
				<li class="breadcrumb-item active">Thêm sản phẩm</li>
			</ol>
			<div class="box box-block bg-white">
				@if( count($errors) > 0)
		    	<div class="alert alert-danger">
		    		<ul>
		    			@foreach($errors->all() as $error)
		    				<li>{{$error}}</li>
		    			@endforeach
		    		</ul>
		    	</div>
		    	@endif
				<form action="{{URL::route('postAddProduct')}}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token()}}">
					<div class="row">
						<div class="col-md-9 0848384333">
							<div class="row">

								<div class="col-md-3">
									<a href="http://bkshop.vn/" target="_blank">
										<div style="background: #0275d8;" class="text-center">
											<span style="color: #fff; font-size:20px; ">http://bkshop.vn/</span>
										</div>
									</a>
								</div>
								<div class="col-md-9">
									<div class="form-group">	
										<input type="text" class="form-control" name="url" placeholder="Nhập Url" value="{{old('url')}}">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">Tên sản phẩm</label>
								<input type="text" class="form-control" name="name" placeholder="Nhập tiêu đề danh mục" value="{{old('name')}}">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Giá</label>
								<input type="text" class="form-control" name="price" placeholder="Nhập tiêu đề danh mục" value="{{old('price')}}">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tiêu đề</label>
								<input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề danh mục" value="{{old('title')}}">
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">Seo keywords</label>
								<input type="text" class="form-control" name="seo_keyword" placeholder="Keywords Seo" value="{{old('seo_keyword')}}">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Seo description</label>
								<input type="text" class="form-control" name="seo_description" placeholder="Description Seo" value="{{old('seo_description')}}">
							</div>
							<!-- <div class="form-group">
								<label for="exampleTextarea">Thông tin khuyến mãi</label>
								<textarea class="form-control" name="sale" rows="3">{{old('sale')}}</textarea>
								<script type="text/javascript">
							      var editor = CKEDITOR.replace('sale',{
							       language:'vi',
							       filebrowserImageBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Images',
							       filebrowserFlashBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Flash',
							       filebrowserImageUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							       filebrowserFlashUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							       });
							     </script>﻿
							</div>
							<div class="form-group">
								<label for="exampleTextarea">Thông tin sản phẩm</label>
								<textarea class="form-control" name="ttsp" rows="3">{{old('ttsp')}}</textarea>
								<script type="text/javascript">
							      var editor = CKEDITOR.replace('ttsp',{
							       language:'vi',
							       filebrowserImageBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Images',
							       filebrowserFlashBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Flash',
							       filebrowserImageUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							       filebrowserFlashUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							       });
							     </script>﻿
							</div>
							<div class="form-group">
								<label for="exampleTextarea">Thông số kỹ thuật</label>
								<textarea class="form-control" name="tskt" rows="3">{{old('tskt')}}</textarea>
								<script type="text/javascript">
							      var editor = CKEDITOR.replace('tskt',{
							       language:'vi',
							       filebrowserImageBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Images',
							       filebrowserFlashBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Flash',
							       filebrowserImageUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							       filebrowserFlashUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							       });
							     </script>﻿
							</div> -->
							<div class="form-group">
								<label for="exampleTextarea">Giới thiệu sản phẩm</label>
								<textarea class="form-control" name="content" rows="3">{{old('content')}}</textarea>
								<script type="text/javascript">
							      var editor = CKEDITOR.replace('content',{
							       language:'vi',
							       filebrowserImageBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Images',
							       filebrowserFlashBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Flash',
							       filebrowserImageUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							       filebrowserFlashUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							       });
							     </script>﻿
							</div>
							<div class="form-group product_line">
								<div class="product_detail" id="0" style="position: relative;">
									<div class="row">
										<div class="col-md-12">
											<div class="swatches" product-detail="0" >
												
									            
									            
									       	</div>
								       </div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="tag-properties-type">
												<?php $i =0; ?>
												@foreach($properties_type as $pptt)
													<span class="tag tag-primary tag-swatch" swatch-recoment="{{$i}}"><a>{{$pptt->name}}</a></span>
													<div class="swatch-root display-none" swatch-recoment="{{$i}}" >
														<div class="swatch clearfix " id="" swatch-recoment="{{$i}}" style="position: relative;">
										                  	<div class="header">{{$pptt->name}}</div>
										                  	
										                  	@foreach($properties as $ppt)
										                  		@if($ppt->properties_type_id == $pptt->id)
												                  	<div data-value="{{$ppt->value}}" class="swatch-element plain m available">
													                    <input class="" id="{{$i}}" type="radio" name="" value="{{$ppt->id}}" />
													                    <label for="{{$i}}">
													                      {{$ppt->value}}
													                      	<img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
													                    </label>
												                  	</div>
												                  	<?php $i++; ?>
												                @endif
										                  	@endforeach
										                  	<div class="close close-swatch" style="position: absolute; top: 0px; right: 0px;" >
										                  		<div title="XÓA THUỘC TÍNH"><i class="fa fa-close"></i></div>
										                  	</div>
										                </div>
										            </div>
										            <?php $i++; ?>

												@endforeach
											</div>
										</div>
									</div>
									<div class="close close-product-detail" style="position: absolute; top: 0px; right: 0px;" >
				                  		<div title="XÓA THUỘC TÍNH"><i class="fa fa-close"></i></div>
				                  	</div>
								</div>
							</div>
							<a><div class="icon-area add-product-line" style="text-align: center; padding: 0px 0px; margin: 20px 0px; border: 2px dashed #1FB264;"><i class="fa fa-plus"></i></div></a>
							
				            
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<select class="form-control" name="categorie_id">
									
									<option value="10">danh mục1</option>
									<option value="10">danh mục2</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="radio" name="display" value="1" checked>Hiển thị
								</label>
								<label>
									<input type="radio" name="display" value="0">Tắt hiển thị
								</label>
							</div>
							
							<div class="file-upload">	
							  	<div class="image-upload-wrap image-upload-wrap0">
								    <input class="file-upload-input file-upload-input0" type='file' name="image" onchange="readURL(this);" accept="image/*" />
								    <div class="drag-text">
								      <h3>Ảnh đại diện </h3>
								    </div>
							  	</div>
							  	<div class="file-upload-content file-upload-content0">
							    	<img class="file-upload-image file-upload-image0" src="#" alt="your image" />
							    	<div class="image-title-wrap image-title-wrap0">
							      		<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title image-title0 text-center">Uploaded Image</span></button>
							    	</div>
							  	</div>
							</div>
							
							
							<div class="file-upload">	
							  	<div class="image-upload-wrap image-upload-wrap1">
								    <input class="file-upload-input file-upload-input1" type='file' name="fimage[]" onchange="readURL1(this);" accept="image/*" />
								    <div class="drag-text">
								      <h3>Ảnh detail</h3>
								    </div>
							  	</div>
							  	<div class="file-upload-content file-upload-content1">
							    	<img class="file-upload-image file-upload-image1" src="#" alt="your image" />
							    	<div class="image-title-wrap image-title-wrap1">
							      		<button type="button" onclick="removeUpload1()" class="remove-image">Remove <span class="image-title image-title text-center">Uploaded Image</span></button>
							    	</div>
							  	</div>
							</div>
							<div id="more_image"></div>
							<div class="icon-area" style="text-align: center; padding: 50px 0px; margin: 20px 0px; border: 4px dashed #1FB264;"><i class="fa fa-plus" onclick="more_image()"></i></div>
							
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			
		</div>
	</div>
@endsection()
@section('js')
	<!-- Vendor JS -->
		<script type="text/javascript" src="{{asset('auth/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/tether/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/jscrollpane/mwheelIntent.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/waves/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/vendor/switchery/dist/switchery.min.js')}}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{asset('auth/js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/js/demo.js')}}"></script>
		<script type="text/javascript" src="{{asset('auth/js/upload-image.js')}}"></script>

		<!-- watches product -->
		<!-- <script  src="{{asset('js/index.js')}}"></script> -->
		<!-- end -->

		<script type="text/javascript">
			var i =2;
			function more_image(){
				var more_image = $("#more_image");
				more_image.append('<div class="file-upload"><div class="image-upload-wrap image-upload-wrap' + i + '"><input class="file-upload-input file-upload-input' + i + '" type="file" name="fimage[]" onchange="readURL' + i + '(this);" accept="image/*" /><div class="drag-text"><h3>Ảnh detail</h3></div></div><div class="file-upload-content file-upload-content' + i + '"><img class="file-upload-image file-upload-image' + i + '" src="#" alt="your image" /><div class="image-title-wrap image-title-wrap' + i + '"><button type="button" onclick="removeUpload' + i + '()" class="remove-image">Remove <span class="image-title image-title text-center">Uploaded Image</span></button></div></div></div>');
				i++;
			};
			// thêm product line
			$(".add-product-line").click(function(event) {
				event.preventDefault();
				var product_detail_number = $(".product_detail").length;
				var id=product_detail_number;
				var html = $(".product_detail[id=0]").html();
				$(".product_line").append('<div class="product_detail" id="'+id+'">'+html+'</div>');
				var line = $(".product_line").children(".product_detail[id="+id+"]");
				line.children().children().children(".swatches").attr('product-detail',id);
				line.children().children().children().children(".swatch").attr('product-with-swatch-select',id);
				var count_swatch_select = $(".swatch[product-with-swatch-select="+product_detail_number+"]").length;
				var i =0;
				var swatches = $(".swatches[product-detail=" +product_detail_number+ "]");
				for(i;i<count_swatch_select;i++){
			  		
			  		var swatch = swatches.children(".swatch[id="+i+"]");
			  		swatch.children().children("input").attr("name", "properties"+product_detail_number+"[" +i+ "]");
			  		
			  	}
				// console.log(html);
				console.log(count_swatch_select);
			});
			// end product line
		</script>
		<script type="text/javascript">

			// xóa một thuộc tính sản phẩm
			$('.swatches').on('click', '.close-swatch', function(event) {
			  	event.preventDefault();
			  	var product_detail_number = $(this).parent().attr('product-with-swatch-select');
			  	var count_swatch_select = $(".swatch[product-with-swatch-select="+product_detail_number+"]").length;
			  	var id = $(this).parent('.swatch').attr('id');
			  	var i = id;
			  	for(i;i<count_swatch_select;i++){
			  		id++;
			  		$(this).parent('.swatch').remove();
			  		var swatch = $(".swatch[id=" +id+ "]");
			  		swatch.attr('id', i);
			  		swatch.attr('swatch-select', i);
			  		swatch.find('input').attr("name", "properties"+product_detail_number+"[" +i+ "]");
			  	}
			});

			// end xóa một thuộc tính sản phẩm

			// thêm một thuộc tính sản phẩm
			$(".tag-swatch").click(function(event) {
				event.preventDefault();
				var tag_id = $(this).attr("swatch-recoment");
				var product_detail_number = $(this).parent().parent().parent().parent().attr('id');
				var count_swatch_select = $(".swatch[product-with-swatch-select="+product_detail_number+"]").length;
				var html = $(".swatch-root[swatch-recoment=" +tag_id+ "]").html();
				$(".swatches[product-detail="+product_detail_number+"]").append(html);
				$(".swatches[product-detail="+product_detail_number+"]").children(".swatch[swatch-recoment="+tag_id+"]").attr('product-with-swatch-select',product_detail_number);
				$(".swatches[product-detail="+product_detail_number+"]").children(".swatch[swatch-recoment="+tag_id+"]").attr('id',count_swatch_select);
				$(".swatches[product-detail="+product_detail_number+"]").children(".swatch[swatch-recoment="+tag_id+"]").attr('swatch-select',count_swatch_select);
				$(".swatches[product-detail="+product_detail_number+"]").children(".swatch[swatch-recoment="+tag_id+"]").children().children("input").attr("name", "properties"+product_detail_number+"[" +count_swatch_select+ "]");
				
			});
			// end thêm một thuộc tính sản phẩm
		</script>
@endsection