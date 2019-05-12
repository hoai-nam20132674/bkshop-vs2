<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ImageShare;
use App\ImagesProducts;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class Products extends Model
{
    //
    protected $table = 'products';



    public function addProduct($request){
        $image_share = $request->file('image-share')->getClientOriginalName();
        $avatar = $request->file('image')->getClientOriginalName();
    	$pr = new Products;
    	$pr->name = $request->name;
    	$pr->categories_id = $request->categories_id;
    	$pr->url = $request->url;
    	$pr->content = $request->content;
    	$pr->seo_keyword = $request->seo_keyword;
    	$pr->seo_description = $request->seo_description;
    	$pr->title = $request->title;
        $pr->share_image = $image_share;
        $pr->rate = 0;
        $pr->display = $request->display;
        $pr->views = 0;
        $properties = $request->properties;
        if(isset($properties)){
            $pr->price = 0;
            $pr->amount = $this->countAmount(count($properties),$request);
            $pr->save();
            for($i=0;$i<count($properties);$i++){
                if(isset($properties[$i])){
                    $productDetail = new ProductsDetail;
                    $productDetail->price = $request->price[$i];
                    $productDetail->amount = $request->amount[$i];
                    $productDetail->products_id = $pr->id;
                    $productDetail->save();
                    $countPropertiesDetail = count($properties[$i]);
                    for($j=0;$j<$countPropertiesDetail;$j++){
                        $productsProperties = new productsProperties;
                        $productsProperties->products_detail_id = $productDetail->id;
                        $productsProperties->properties_id = $properties[$i][$j];
                        $productsProperties->save();
                    }
                }
            }
        }
        else{
            $pr->price = $request->price[0];
            $pr->amount = $request->amount[0];
            $pr->save();
        }
        
        
    	$request->file('image-share')->move('uploads/images/products/image_share/',$image_share);
        $img_share = new ImageShare;
        $img_share->url = $image_share;
        $img_share->save();
        $request->file('image')->move('uploads/images/products/avatar/',$avatar);
        $img_avatar = new ImagesProducts;
        $img_avatar->role = 1;
        $img_avatar->url = $avatar;
        $img_avatar->products_id = $pr->id;
        $img_avatar->save();
        if(Input::hasFile('image-detail')){
            foreach(Input::file('image-detail') as $file){
                if(isset($file)){
                    $file_name = $file->getClientOriginalName();
                    $file->move('uploads/images/products/detail/',$file_name);
                    $img_detail = new ImagesProducts;
                    $img_detail->role = 0;
                    $img_detail->url = $file_name;
                    $img_detail->products_id = $pr->id;
                    $img_detail->save();
                }
            }
        }
        else{}


    }
    public function countAmount($countProperties,$request){
        $countAmount = 0;
        for($i=0;$i<$countProperties;$i++){
            $countAmount = $countAmount + $request->amount[$i];
        }
        return $countAmount;
    }
}
