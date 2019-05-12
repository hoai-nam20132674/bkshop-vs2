<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Blog;
use App\Systems;
use App\Properties;
use App\PropertiesType;
use App\Categories;
use App\Products;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\addBlogRequest;
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
        $properties = Properties::select()->get();
        $properties_type = PropertiesType::where('systems_id',Auth::user()->systems_id)->get();
        $category = Categories::where('systems_id',Auth::user()->systems_id)->get();
    	return view('auth.page-content.addProduct',['properties'=>$properties,'properties_type'=>$properties_type,'category'=>$category]);
    }
    public function addCategorie() {
        $category = Categories::where('systems_id',Auth::user()->systems_id)->get();
    	return view('auth.page-content.addCategorie',['category'=>$category]);
    }
    public function addBlog() {
        return view('auth.page-content.addBlog');
    }
    // -------------------
    public function listProducts() {
    	return view('auth.page-content.listProducts');
    }
    public function listCategories() {
        $category = Categories::where('systems_id', Auth::user()->systems_id)->get();
    	return view('auth.page-content.listCategories',['category'=>$category]);
    }
    public function listUsers() {
        $users = User::select()->get();
    	return view('auth.page-content.listUsers',['users'=>$users]);
    }
    public function listBlogs() {
        
        return view('auth.page-content.listBlogs');
    }
    // --------------------
    public function editUser() {
        return view('auth.page-content.editUser');
    }
    public function editProduct() {
        return view('auth.page-content.editProduct');
    }
    public function editCategorie() {
        return view('auth.page-content.editCategorie');
    }
    public function editBlog() {
        return view('auth.page-content.editBlog');
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
        // $i = 0;
        // $properties = $request->properties;
        // $price = Input::get('price');
        // if(isset($properties)){
        //     dd(count($properties));
        // }
        // else{
        //     echo "không tồn tại properties0";
        // }
        
    }
    public function postAddCategorie(addCategorieRequest $request){
        $cate = new Categories;
        $cate->addCategorie($request);
        return redirect('auth/danh-sach-danh-muc')->with(['flash_level'=>'success','flash_message'=>'Thêm danh mục thành công']);

    }
    public function postAddBlog(addBlogRequest $request){
        $blog = new Blog;
        $blog->addBlog($request);
        echo "thêm tin tức thành công";
    }
    public function postEditUser(){

    }
    public function postEditProduct(){

    }
    public function postEditCategorie(){

    }
    public function postEditBlog(){

    }




    public function getListUsersResponse(){
    	$users = User::select()->get();
    	return response()->json($users);
    	// return $users;
    }
}
