<?php

namespace App\Http\Controllers\AuthClient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Systems;
use App\Products;
use App\TagCategories;

class ClientController extends Controller
{
    //
    public function index(){
    	$system = Systems::where('id',1)->get()->first();
        $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
        $cate = $this->arrayCategorieId($cates);
        $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('images_products.role',1)
        ->select('products.*', 'images_products.url AS avatar')
        ->get();
    	return view('front-end.page-content.home',['system'=>$system,'cates'=>$cates,'products'=>$products]);
    }
    public function rootPageContent($url) {
    	$cates = Categories::where('url', $url)->get();
        $products = Products::where('url',$url)->get(); 
    	$systems = Systems::where('website',$url)->get();
    	if($url == 'admin'){
    		return view('auth.login');
    	}
    	if(!$systems->isEmpty()){
    		$system = $systems->first();
            $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
            $cate = $this->arrayCategorieId($cates);
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar')
            ->get();

    		return view('front-end.page-content.home-business',['system'=>$system,'cates'=>$cates,'products'=>$products]);
    	}
    	if(!$cates->isEmpty()){
            $system = Systems::where('id',1)->get()->first();
    		return view('front-end.page-content.categorie',['system'=>$system]);
    	}
        if(!$products->isEmpty()){
            $system = Systems::where('id',1)->get()->first();
            return view('front-end.page-content.product',['system'=>$system]);
        }
    	
    }
    public function arrayCategorieId($cates){
        $array = array();
        $i = 0;
        foreach($cates as $cate){
            $array[$i] = $cate->id;
            $i++;
        }
        return $array;
    }
    // trả về mảng id danh mục con của danh mục lựa chọn
    // $id id của danh mục lựa chọn
    // $arrayIdChildCategorie mảng rỗng array()
    // $arrayNumber chỉ số mảng = 0
    public function getIdChildCategorieAllLevel($id,$arrayIdChildCategorie,$arrayNumber){
        $cates=Categories::where('parent_id', $id)->get();
        $i=0;
        $array = array();
        foreach($cates as $cate){
            if($cate->id == $cate->parent_id){

            }
            else{
                $array[$i] = $cate->id;
                $i++;
            }
        }

        if(count($array)==0){
            
        }
        else{
            for($j=0;$j<count($array);$j++){

                    $arrayIdChildCategorie[$arrayNumber]=$array[$j];
                    $arrayNumber++;
                    $arrayIdChildCategorie = $this->getIdChildCategorieAllLevel($array[$j],$arrayIdChildCategorie,$arrayNumber);
                    $arrayNumber++;
            }
            
        }
        return $arrayIdChildCategorie;
    }
    // public function test($id){
    //     $arrayIdChildCategorie = array();
    //     $arrayNumber = 0;
    //     $array = $this->getIdChildCategorieAllLevel($id,$arrayIdChildCategorie,$arrayNumber);
    //     dd($array);
    // }
    // end trả về mảng id danh mục con của danh mục lựa chọn
    public function rootSearchText($cate_id, $cate_name, $search_text){
        if($cate_id ==0){
            $system = Systems::where('id',1)->get()->first();
            $cates_taget = Categories::select()->get();
            $cate = $this->arrayCategorieId($cates_taget);
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('products.name', 'like', '%' .$search_text.'%')->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar')
            ->get();
            dd($products);
        }
        else{
            $system = Systems::where('id',1)->get()->first();
            $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
            $tag_categorie = TagCategories::where('root_categorie_id',$cate_id)->get();
            $cate = array();
            $i=0;
            foreach($tag_categorie as $tag_cate){
                $cate[$i]=$tag_cate->categorie_id;
                $i++;
            }
            $arrayIdChildCategorie = array();
            $arrayNumber = 0;
            foreach($cate as $cate_id){
                $cate_taget = $this->getIdChildCategorieAllLevel($cate_id,$arrayIdChildCategorie,$arrayNumber);
                $cate_taget[count($cate_taget)] = $cate_id;
                $j=0;
                $count = count($arrayIdChildCategorie)+count($cate_taget);
                for($k =count($arrayIdChildCategorie);$k<$count;$k++){
                    $arrayIdChildCategorie[$k] = $cate_taget[$j];
                    $j++;
                }

            }
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('products.name', 'like', '%' .$search_text.'%')->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar')
            ->get();
            dd($arrayIdChildCategorie);
        }
    }
    public function businessSearchText($system_url, $cate_id, $cate_name, $search_text){
        if($cate_id ==0){
            $system = Systems::where('website',$system_url)->get()->first();
            $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
            $cate = $this->arrayCategorieId($cates);
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('products.name', 'like', '%' .$search_text.'%')->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar')
            ->get();
            dd($products);
        }
        else{
            $system = Systems::where('website',$system_url)->get()->first();
            $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
            $arrayIdChildCategorie = array();
            $arrayNumber = 0;
            $cate_taget = $this->getIdChildCategorieAllLevel($cate_id,$arrayIdChildCategorie,$arrayNumber);
            $cate_taget[count($cate_taget)] = $cate_id;
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->whereIn('products.categories_id',$cate_taget)->where('products.display',1)->where('products.name', 'like', '%' .$search_text.'%')->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar')
            ->get();
            dd($products);
        }
    }

}
