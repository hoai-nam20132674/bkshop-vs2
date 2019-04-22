<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Blog;
use App\Systems;
use App\Properties;
use App\PropertiesType;
use App\Http\Requests\addBlogRequest;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\addProductRequest;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class AdminController extends Controller
{
    public function index(){
    	return view('auth.page-content.index');
    }
    public function addUser() {
        $systems = Systems::select()->get();
        return view('auth.page-content.addUser',['systems'=>$systems]);
    }
    public function addProduct() {
        $properties = Properties::select()->get();
        $properties_type = PropertiesType::select()->get();
    	return view('auth.page-content.addProduct',['properties'=>$properties,'properties_type'=>$properties_type]);
    }
    public function addCategorie() {
    	return view('auth.page-content.addCategorie');
    }
    public function addBlog() {
        return view('auth.page-content.addBlog');
    }
    // -------------------
    public function listProducts() {
    	return view('auth.page-content.listProducts');
    }
    public function listCategories() {
    	return view('auth.page-content.listCategories');
    }
    public function listUsers() {
    	return view('auth.page-content.listUsers');
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
        $user = new User;
        $user->addUser($request);
        echo "thêm user thành công";
    }
    public function postAddProduct(addProductRequest $request){
        $count=$request->properties;
        dd(count($count));

    }
    public function postAddCategorie(){

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
