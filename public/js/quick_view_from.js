
	Bizweb.doNotTriggerClickOnThumb = false;
	function changeImageQuickView(img, selector) {
		var src = $(img).attr("src");
		src = src.replace("_compact", "");
		$(selector).attr("src", src);
	}
	var selectCallbackQuickView = function(variant, selector) {
		$('#quick-view-product form').show();
		var productItem = jQuery('.quick-view-product .product-item');
		addToCart = productItem.find('.add_to_cart_detail'),
			iq = productItem.find('.inventory_quantity'),
			sku = productItem.find('.masp'),
			productPrice = productItem.find('.price'),
			comparePrice = productItem.find('.old-price'),
			totalPrice = productItem.find('.total-price span');
		if(variant && variant.sku ){
			sku.text(variant.sku);
		}else{
			sku.text('Đang cập nhật');
		}
		if (variant) {
			var form = jQuery('#' + selector.domIdPrefix).closest('form');
			
			for (var i=0,length=variant.options.length; i<length; i++) {

				var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');				
				if (radioButton.size()) {
					
					radioButton.get(0).checked = true;
				}
			}	
		}
		if (variant && variant.available) {

			if(variant.inventory_management == 'bizweb'){
				if(variant.inventory_quantity == 0){
					iq.text("Hết hàng");
				}else{
					iq.text("Còn "+variant.inventory_quantity +" sản phẩm");
				}
			}else{
				iq.text("Còn hàng");
			}
			addToCart.removeClass('disabled').removeAttr('disabled');
			$(addToCart).find("span").text("THÊM VÀO GIỎ HÀNG");

			if(variant.price < 1){			   
				$("#quick-view-product .price").html('Liên hệ');
				$("#quick-view-product del, #quick-view-product .quantity_wanted_p").hide();
				$("#quick-view-product .prices .old-price").hide();

			}else{
				productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
				if ( variant.compare_at_price > variant.price ) {
					comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();         
					productPrice.addClass('on-sale');
				} else {
					comparePrice.hide();
					productPrice.removeClass('on-sale');
				}

				$(".quantity_wanted_p").show();


			}


			
			 updatePricingQuickView();
			  
			   /*begin variant image*/
			   if (variant && variant.featured_image) {
				   var originalImage = $("#product-featured-image-quickview");
				   var newImage = variant.featured_image;
				   var element = originalImage[0];
				   Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
					   $('#thumblist_quickview img').each(function() {
						   var parentThumbImg = $(this).parent();
						   var productImage = $(this).parent().data("image");
						   if (newImageSizedSrc.includes(productImage)) {
							   $(this).parent().trigger('click');
							   return false;
						   }
					   });
				   });
				   $('#product-featured-image-quickview').attr('src',variant.featured_image.src);
			   }			
			   } else {
				   addToCart.addClass('disabled').attr('disabled', 'disabled');
				   $('.inventory_quantity').text("Hết hàng");	
				   $(addToCart).find("span").text("Hết hàng");	
				   if (variant && variant.featured_image) {
					   var originalImage = $("#product-featured-image-quickview");
					   var newImage = variant.featured_image;
					   var element = originalImage[0];
					   Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
						   $('#thumblist_quickview img').each(function() {
							   var parentThumbImg = $(this).parent();
							   var productImage = $(this).parent().data("image");
							   if (newImageSizedSrc.includes(productImage)) {
								   $(this).parent().trigger('click');
								   return false;
							   }
						   });
					   });
					   $('#product-featured-image-quickview').attr('src',variant.featured_image.src);
				   }
				   if(variant){
					   if(variant.price < 1){			   
						   $("#quick-view-product .price").html('Liên hệ');
						   $("#quick-view-product del").hide();
						   $("#quick-view-product .quantity_wanted_p").hide();
						   $("#quick-view-product .prices .old-price").hide();
						   comparePrice.hide();
						   productPrice.removeClass('on-sale');
						   addToCart.addClass('disabled').attr('disabled', 'disabled');
						   $('.inventory_quantity').text("Hết hàng");	
						   $(addToCart).find("span").text("Hết hàng");				   
					   }else{
						   if ( variant.compare_at_price > variant.price ) {
							   comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();         
							   productPrice.addClass('on-sale');
						   } else {
							   comparePrice.hide();
							   productPrice.removeClass('on-sale');
						   }
						   $("#quick-view-product .price").html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
						   if ( variant.compare_at_price > variant.price ) {
							   $("#quick-view-product .prices .old-price").show();
						   }
						   $("#quick-view-product .quantity_wanted_p").show();


						   addToCart.addClass('disabled').attr('disabled', 'disabled');
						   $('.inventory_quantity').text("Hết hàng");	
						   $(addToCart).find("span").text("Hết hàng");
					   }
				   }else{
					   $("#quick-view-product .price").html('Liên hệ');
					   $("#quick-view-product del").hide();
					   $("#quick-view-product .quantity_wanted_p").hide();
					   $("#quick-view-product .prices .old-price").hide();
					   comparePrice.hide();
					   productPrice.removeClass('on-sale');
					   addToCart.addClass('disabled').attr('disabled', 'disabled');
					   $('.inventory_quantity').text("Hết hàng");	
					   $(addToCart).find("span").text("Hết hàng");	
				   }
			   }


			  };

