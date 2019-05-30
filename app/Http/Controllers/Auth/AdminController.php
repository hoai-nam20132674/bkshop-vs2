<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Systems;
use App\Properties;
use App\PropertiesType;
use App\Categories;
use App\Products;
use App\ImagesProducts;
use App\ImageShare;
use App\HomeSystems;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\addCategorieRequest;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index(){
    	return view('auth.page-content.index');
    }
    public function addUser() {
        $systems = Systems::select()->get();
        $system = Systems::where('id',Auth::user()->systems_id)->get()->first();
        return view('auth.page-content.addUser',['systems'=>$systems,'system'=>$system]);
    }
    public function addProduct() {
        $category = Categories::where('systems_id',Auth::user()->systems_id)->get();
        if(count($category)==0){
            return redirect('auth/them-danh-muc')->with(['flash_level'=>'danger','flash_message'=>'Vui lòng tạo danh mục sản phẩm trước khi thêm sản phẩm cho hệ thống của quý khách']);
        }
        else{
            $properties_type = PropertiesType::where('systems_id',Auth::user()->systems_id)->get();
            $properties_type_id = array();
            $i=0;
            foreach($properties_type as $prt){
                $properties_type_id[$i] = $prt->id;
                $i++;
            }
            $properties = Properties::whereIn('properties_type_id',$properties_type_id)->get();
        	return view('auth.page-content.addProduct',['properties'=>$properties,'properties_type'=>$properties_type,'category'=>$category]);
        }
    }
    public function addCategorie() {
        $category = Categories::where('systems_id',Auth::user()->systems_id)->get();
    	return view('auth.page-content.addCategorie',['category'=>$category]);
    }
    public function addHomeSystem(){
        $systems = Systems::where('display',1)->get();
        $home_system = HomeSystems::select()->get();
        return view('auth.page-content.addHomeSystem',['systems'=>$systems, 'home_system'=>$home_system]);
    }
    // -------------------
    public function listProducts() {
        $categories = Categories::where('systems_id',Auth::user()->systems_id)->get();
        $cate_id = array();
        $pr_id = array();
        $i=0;
        $j=0;
        foreach($categories as $cate){
            $cate_id[$i] = $cate->id;
            $i++;
        }
        $products = Products::join('images_products', 'products.id', '=', 'images_products.products_id')->whereIn('products.categories_id',$cate_id)->where('images_products.role',1)
            ->select('products.*', 'images_products.url AS avatar')
            ->get();
    	return view('auth.page-content.listProducts',['products'=>$products]);
        
    }
    public function listCategories() {
        $category = Categories::where('systems_id', Auth::user()->systems_id)->get();
    	return view('auth.page-content.listCategories',['category'=>$category]);
    }
    public function listUsers() {
        $users = User::where('systems_id',Auth::user()->systems_id)->get();
    	return view('auth.page-content.listUsers',['users'=>$users]);
    }
    // --------------------
    public function editUser($id) {
        $user=User::where('id',$id)->get()->first();
        return view('auth.page-content.editUser',['user'=>$user]);
    }
    public function editProduct() {
        return view('auth.page-content.editProduct');
    }
    public function editCategorie($id) {
        $cate = Categories::where('id',$id)->get()->first();
        return view('auth.page-content.editCategorie',['cate'=>$cate]);
    }
    // ----------------------
    public function postAddUser(addUserRequest $request){
        if(Auth::user()->role == 0 && Auth::user()->parent_id !=1){
            return redirect('auth/danh-sach-tai-khoan-quan-tri')->with(['flash_level'=>'danger','flash_message'=>'Bạn không có quyền thêm tài khoản']);
        }
        else{
            $user = new User;
            $user->addUser($request);
            return redirect('auth/danh-sach-tai-khoan-quan-tri')->with(['flash_level'=>'success','flash_message'=>'Thêm tài khoản thành công']);
        }
    }
    public function postAddProduct(addProductRequest $request){
        $product = new Products;
        $product->addProduct($request);
        return redirect('auth/danh-sach-san-pham')->with(['flash_level'=>'success','flash_message'=>'Thêm sản phẩm thành công']);
        
    }


    public function postAddCategorie(addCategorieRequest $request){
        $cate = new Categories;
        $cate->addCategorie($request);
        return redirect()->route('listCategories')->with(['flash_level'=>'success','flash_message'=>'Thêm danh mục thành công']);

    }
    public function postEditUser(){

    }
    public function postEditProduct(){

    }
    public function postEditCategorie(){

    }
    public function postAddHomeSystem(Request $request){
        $home_system = new HomeSystems;
        $home_system->addHomeSystem($request);
        return redirect('auth/trang-chu')->with(['flash_level'=>'success','flash_message'=>'Cài đặt danh mục hệ thống nổi bật trang chủ thành công']);

    }




    public function getListUsersResponse(){
    	$users = User::select()->get();
    	return response()->json($users);
    	// return $users;
    }
}
