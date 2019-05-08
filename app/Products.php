<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';



    public function addProduct($request){
    	$pr = new Products;
    	$pr->name = $request->name;
    	$pr->categories_id = $request->categories_id;
    	$pr->url = $request->url;
    	$pr->content = $request->content;
    	$pr->seo_keyword = $request->seo_keyword;
    	$pr->seo_description = $request->seo_description;
    	$pr->title = $request->title;
    	$file_name = $request->file('image-share')->getClientOriginalName();
    	$request->file('image-share')->move('uploads/images/products/',$file_name);
    	$pr->share_image = $file_name;
    	$pr->rate = 0;
    	$pr->display = $request->display;
    	$pr->views = 0;
    	$pr->save;
    }
}
