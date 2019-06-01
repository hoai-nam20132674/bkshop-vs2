<?php

namespace App\Http\Controllers\AuthClient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Systems;
use App\Products;
use App\TagCategories;
use App\ImagesProducts;
use App\ProductsDetail;
use App\Properties;
use App\ProductsProperties;
use App\PropertiesType;

class ClientController extends Controller
{
    //
    public function index(){
    	$system = Systems::where('id',1)->get()->first();
        $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
        $cate = $this->arrayColumn($cates,$col='id');
        $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')
            ->get();
        $productsGroup = $this->groupProduct($products);
        $products = $this->filterProduct($productsGroup);
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
            if($system->id ==1){
                $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
                $cate = $this->arrayColumn($cates,$col='id');
                $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('images_products.role',1)
                ->select('products.*', 'images_products.url AS avatar')
                ->get();
        		return view('front-end.page-content.home-business',['system'=>$system,'cates'=>$cates,'products'=>$products]);
            }
            else{
                $cate_highlights = Categories::where('systems_id',$system->id)->where('display',1)->where('highlights',1)->orderBy('updated_at', 'ASC')->get();
                
                
                // lọc sản phẩm nổi bật thuộc các danh mục đã chọn ra trả về mảng 2 chiều x,y. x là danh mục, y là sản phẩm
                $products_highlights = array();
                for($i=0;$i<count($cate_highlights);$i++){
                    $arrayIdCateChildHighlight = array();
                    $arrayIdCateChildHighlight = $this->getIdChildCategorieAllLevel($cate_highlights[$i]->id,$arrayIdCateChildHighlight);
                    $arrayIdCateChildHighlight[count($arrayIdCateChildHighlight)]=$cate_highlights[$i]->id;
                    $product = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->whereIn('products.categories_id',$arrayIdCateChildHighlight)->where('products.display',1)->where('products.highlights',1)->where('images_products.role',1)
                    ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')->orderBy('products.updated_at', 'DESC')
                    ->get();
                    $productsGroup = $this->groupProduct($product);
                    $product = $this->filterProduct($productsGroup);
                    if(count($product)==0){
                        $products_highlights[$i][0]=null;

                    }
                    elseif(count($product)>=10){
                        for($j=0;$j<10;$j++){
                            $products_highlights[$i][$j]=$product[$j];
                        }
                    }
                    else{
                        for($j=0;$j<count($product);$j++){
                            $products_highlights[$i][$j]=$product[$j];
                        }
                    }
                    
                }
                //end lọc sản phẩm nổi bật thuộc các danh mục đã chọn ra trả về mảng 2 chiều x,y. x là danh mục, y là sản phẩm
                // ----------------------------
                // lọc ra danh mục con của các danh mục highlight + danh mục highlight 
                $arrayIdChildCategorieHighlightContainer = array();
                $arrayIdChildCategorie = array();
                
                $q =0;
                foreach($cate_highlights as $cate_highlight){
                    
                    $array = $this->getIdChildCategorieAllLevel($cate_highlight->id,$arrayIdChildCategorie);
                    // thêm danh mục highlight và sắp sếp
                    if(count($array)==0){

                        $array[0]=$cate_highlight->id;
                        
                        $arrayIdChildCategorieHighlightContainer[$q][0]=$array[0];
                        
                        $q++;
                    }
                    else{
                        $tt = $array[0];
                        $array[0]=$cate_highlight->id;
                        for($i=1;$i<count($array);$i++){
                            $tg=$array[$i];
                            $array[$i]=$tt;
                            $tt=$tg;
                        }
                        $array[count($array)]=$tt;
                        for($j=0;$j<count($array);$j++){
                            $arrayIdChildCategorieHighlightContainer[$q][$j]=$array[$j];
                        }
                        $q++;
                    }
                    //end thêm danh mục highlight và sắp sếp
                }
                // end lọc ra danh mục con của các danh mục highlight + danh mục highlight
                // --------------------------
                // lọc sản phẩm mới thuộc các danh mục đã chọn ra trả về mảng 2 chiều x,y. x là danh mục, y là sản phẩm
                
                $products_news = array();

                for($i=0;$i<count($cate_highlights);$i++){

                    for($w=0;$w<count($arrayIdChildCategorieHighlightContainer[$i]);$w++){
                        $array=array();
                        $c = $this->getIdChildCategorieAllLevel($arrayIdChildCategorieHighlightContainer[$i][$w],$array);
                        $c[count($c)]=$arrayIdChildCategorieHighlightContainer[$i][$w];
                        $product = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->whereIn('products.categories_id',$c)->where('products.display',1)->where('images_products.role',1)
                        ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')->orderBy('products.id', 'DESC')
                        ->get();
                        $productsGroup = $this->groupProduct($product);
                        $product = $this->filterProduct($productsGroup);
                        if(count($product)==0){
                            $products_news[$i][$w][0]=null;

                        }
                        elseif(count($product)>=10){
                            for($j=0;$j<10;$j++){
                                $products_news[$i][$w][$j]=$product[$j];
                            }
                        }
                        else{
                            for($j=0;$j<count($product);$j++){
                                $products_news[$i][$w][$j]=$product[$j];
                            }
                        }
                    }
                }
                $cate_news = array();
                for($i=0;$i<count($arrayIdChildCategorieHighlightContainer);$i++){
                    for($j=0;$j<count($arrayIdChildCategorieHighlightContainer[$i]);$j++){
                        $cate_news[$i][$j] = Categories::where('id',$arrayIdChildCategorieHighlightContainer[$i][$j])->get()->first();
                    }
                }

                //end lọc sản phẩm mới thuộc các danh mục đã chọn ra trả về mảng 2 chiều x,y. x là danh mục, y là sản phẩm
                return view('front-end.page-content.home',['system'=>$system,'cates'=>$cates,'products_highlights'=>$products_highlights,'products_news'=>$products_news,'cate_highlights'=>$cate_highlights,'cate_news'=>$cate_news]);
                // $test =0;
                // $tt = 0;
                // foreach($products_highlights as $products_highlight){
                //     if($products_highlight[$tt]->isEmpty()){
                //         $test =1;
                //     }
                //     $tt++;
                // }
                // dd($products_news);
                
            }
    	}
    	if(!$cates->isEmpty()){
            $system = Systems::where('id',1)->get()->first();
            $cate = Categories::where('url',$url)->get()->first();
            $cates = Categories::where('systems_id',1)->where('display',1)->get();
            //lấy list danh mục các gian hàng có tag là danh mục root đang chọn 
            $arrayIdChild = $this->getCategorieChildRoot($cate->id);
            //end lấy danh mục con của danh mục root_categorie_id
            // --------------------------------------
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->whereIn('products.categories_id',$arrayIdChild)->where('products.display',1)->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')
            ->get();
            $productsGroup = $this->groupProduct($products);
            $products = $this->filterProduct($productsGroup);
            $cate = Categories::where('url',$url)->get()->first();
    		return view('front-end.page-content.categorie',['system'=>$system,'cates'=>$cates,'cate'=>$cate,'products'=>$products]);
    	}
        if(!$products->isEmpty()){
            $system = Systems::where('id',1)->get()->first();
            $cates = Categories::where('systems_id',1)->where('display',1)->get();
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->where('products.url',$url)->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')
            ->get();
            $productsGroup = $this->groupProduct($products);
            $products = $this->filterProduct($productsGroup);
            $images = ImagesProducts::where('products_id',$products[0]->products_id)->where('role',0)->get();
            $products_detail = ProductsDetail::where('products_id',$products[0]->products_id)->get();
            $arrayProductsDetailId = $this->arrayColumn($products_detail,$col='id');
            $products_properties = ProductsProperties::whereIn('products_detail_id',$arrayProductsDetailId)->get();
            $arrayPropertiesId = $this->arrayColumn($products_properties,$col='properties_id');
            $properties = Properties::whereIn('id',$arrayPropertiesId)->get();
            $arrayPropertiesTypeId = $this->arrayColumn($properties,$col='properties_type_id');
            $properties_type = PropertiesType::whereIn('id',$arrayPropertiesTypeId)->get();
            // dd($properties);
            $products = $products[0];
            return view('front-end.page-content.product',['system'=>$system,'cates'=>$cates,'products'=>$products,'images'=>$images]);
        }
    	
    }
    public function arrayColumn($object,$col){
        $array = array();
        $i = 0;
        foreach($object as $cate){
            $array[$i] = $cate->$col;
            $i++;
        }
        return $array;
    }
    // ------------------------------------------
    // trả về mảng id danh mục con của danh mục lựa chọn
    // $id id của danh mục lựa chọn
    // $arrayIdChildCategorie mảng rỗng array()
    // $arrayNumber chỉ số mảng = 0
    public function getIdChildCategorieAllLevel($id,$arrayIdChildCategorie){
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

                    $arrayIdChildCategorie[count($arrayIdChildCategorie)]=$array[$j];
                    $arrayIdChildCategorie = $this->getIdChildCategorieAllLevel($array[$j],$arrayIdChildCategorie);
            }
            
        }
        return $arrayIdChildCategorie;
    }

    // end trả về mảng id danh mục con của danh mục lựa chọn
    // -------------------------------------------
    // tìm kiếm bằng từ khóa trang root
    public function rootSearchText($cate_id, $cate_name, $search_text){
        if($cate_id ==0){
            $system = Systems::where('id',1)->get()->first();
            $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
            $cates_taget = Categories::select()->get();
            $cate = $this->arrayColumn($cates_taget,$col='id');
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('products.name', 'like', '%' .$search_text.'%')->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')
            ->get();
            $productsGroup = $this->groupProduct($products);
            $products = $this->filterProduct($productsGroup);
            // dd($products);
            return view('front-end.page-content.product-search',['system'=>$system,'cates'=>$cates,'products'=>$products]);
        }
        else{
            $system = Systems::where('id',1)->get()->first();
            $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
            //lấy list danh mục các gian hàng có tag là danh mục root đang chọn 
            $arrayIdChild = $this->getCategorieChildRoot($cate_id);
            //end lấy danh mục con của danh mục root_categorie_id
            // --------------------------------------
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->whereIn('products.categories_id',$arrayIdChild)->where('products.display',1)->where('products.name', 'like', '%' .$search_text.'%')->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')
            ->get();
            $productsGroup = $this->groupProduct($products);
            $products = $this->filterProduct($productsGroup);
            return view('front-end.page-content.product-search',['system'=>$system,'cates'=>$cates,'products'=>$products]);
        }
    }
    // end tìm kiếm bằng từ khóa trang root
    // -------------------------------------
    // tìm kiếm bằng từ khóa trên gian hàng
    public function businessSearchText($system_url, $cate_id, $cate_name, $search_text){
        if($cate_id ==0){
            $system = Systems::where('website',$system_url)->get()->first();
            $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
            $cate = $this->arrayColumn($cates,$col='id');
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->whereIn('products.categories_id',$cate)->where('products.display',1)->where('products.name', 'like', '%' .$search_text.'%')->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')
            ->get();
            $productsGroup = $this->groupProduct($products);
            $products = $this->filterProduct($productsGroup);
            return view('front-end.page-content.product-search',['system'=>$system,'cates'=>$cates,'products'=>$products]);
        }
        else{
            $system = Systems::where('website',$system_url)->get()->first();
            $cates = Categories::where('systems_id',$system->id)->where('display',1)->get();
            $arrayIdChildCategorie = array();
            $cate_taget = $this->getIdChildCategorieAllLevel($cate_id,$arrayIdChildCategorie);
            $cate_taget[count($cate_taget)] = $cate_id;
            $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->join('products_detail', 'products.id', '=', 'products_detail.products_id')->whereIn('products.categories_id',$cate_taget)->where('products.display',1)->where('products.name', 'like', '%' .$search_text.'%')->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar','products_detail.price AS maxPrice','products_detail.products_id')
            ->get();
            $productsGroup = $this->groupProduct($products);
            $products = $this->filterProduct($productsGroup);
            return view('front-end.page-content.product-search',['system'=>$system,'cates'=>$cates,'products'=>$products]);
        }
    }
    // end tìm kiếm bằng từ khóa trên gian hàng
    // ------------------------------
    // gom nhóm products_detail
    public function groupProduct($products){
        $productsGroup = array();
        $i=0;
        foreach($products as $product){
            $check=0;
            foreach($productsGroup as $prg){
                if($product->products_id == $prg[0]->products_id){
                    $check=1;
                    break;
                }
            }
            if($check==0){
                $array = array();
                $k=0;
                $pr = $product;
                foreach($products as $prs){
                    if($prs->products_id==$pr->products_id){
                        $array[$k] = $prs;
                        $k++;
                    }
                }
                $productsGroup[$i] = $array;
                $i++;
            }
        }
        return $productsGroup;
    }
    // end gom nhóm products_detail
    // --------------------------------
    // lọc sản products_detail có giá cao nhất
    public function filterProduct($productsGroup){
        $products =array();
        $i=0;
        foreach($productsGroup as $prg){
            $array = $prg[0];
            foreach($prg as $pr){
                if($pr->maxPrice>$array->maxPrice){
                    $array = $pr;
                }
            }
            $products[$i] = $array;
            $i++;
        }
        return $products;
    }
    // end lọc sản products_detail có giá cao nhất
    // trả về list danh mục của gian hàng thuộc danh mục cha root
    public function getCategorieChildRoot($cateRootId){
        $tag_categorie = TagCategories::where('root_categorie_id',$cateRootId)->get();
        $cate = array();
        $i=0;
        foreach($tag_categorie as $tag_cate){
            $cate[$i]=$tag_cate->categorie_id;
            $i++;
        }
        // -------------------------------------------
        // lấy danh mục con của danh mục root_categorie_id
        $arrayIdChild = array();
        foreach($cate as $cate_id){
            $arrayIdChildCategorie = array();
            $cate_taget = $this->getIdChildCategorieAllLevel($cate_id,$arrayIdChildCategorie);
            $cate_taget[count($cate_taget)] = $cate_id;

            // loại bỏ trùng lặp
            $cate_taget_final = array();
            $z=0;
            for($x =0;$x<count($cate_taget);$x++){
                $check =0;
                for($y =0;$y<count($arrayIdChild);$y++){
                    if($arrayIdChild[$y] == $cate_taget[$x]){

                    }
                    else{
                        $check++;
                    }
                }
                if($check == count($arrayIdChild)){
                    $cate_taget_final[$z] = $cate_taget[$x];
                    $z++;
                }
            }
            // end loại bỏ trùng lặp
            // -----------------------------------------
            $j=0;
            $count = count($arrayIdChild)+count($cate_taget_final);
            for($k =count($arrayIdChild);$k<$count;$k++){
                $arrayIdChild[$k] = $cate_taget_final[$j];
                $j++;
            }
        }
        return $arrayIdChild;
    }
    // end trả về list danh mục của gian hàng thuộc danh mục cha root
    public function test($id){
        $arrayIdChildCategorie = array();
        $array = $this->getIdChildCategorieAllLevel($id,$arrayIdChildCategorie);
        dd($array);
    }
}
