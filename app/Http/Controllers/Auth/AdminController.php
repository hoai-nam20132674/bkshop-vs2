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
use App\Slides;
use App\TagCategories;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\addCategorieRequest;
use App\Http\Requests\addSystemRequest;
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
            return redirect()->route('addCategorie')->with(['flash_level'=>'danger','flash_message'=>'Vui lòng tạo danh mục sản phẩm trước khi thêm sản phẩm cho hệ thống của quý khách']);
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
    public function addTagCategorie($id){
        $cate = Categories::where('id',$id)->get()->first();
        $cates = Categories::where('systems_id','!=',Auth::user()->id)->get();
        return view('auth.page-content.addTagCategorie',['cate'=>$cate, 'cates'=>$cates]);
    }
    public function addSystem(){
        return view('auth.page-content.addSystem');
    }
    public function addSlide(){
        return view('auth.page-content.addSlide');
    }
    public function addPropertie(){
        return view('auth.page-content.addPropertie');
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
    public function listSlides(){
        $slides = Slides::where('systems_id',Auth::user()->systems_id)->get();
        return view('auth.page-content.listSlideHeader',['slides'=>$slides]);

    }
    public function listSystems(){
        $systems = Systems::where('id','!=',Auth::user()->systems_id)->get();
        return view('auth.page-content.listSystems',['systems'=>$systems]);

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
    public function editSlide($id) {
        $slide = Slides::where('id',$id)->get()->first();
        return view('auth.page-content.editSlide',['slide'=>$slide]);
    }
    public function editSystem($id) {
        $system = Systems::where('id',$id)->get()->first();
        return view('auth.page-content.editSystem',['system'=>$system]);
    }
    // ----------------------
    public function postAddUser(addUserRequest $request){
        if(Auth::user()->role == 0 && Auth::user()->parent_id !=1){
            return redirect()->route('listUsers')->with(['flash_level'=>'danger','flash_message'=>'Bạn không có quyền thêm tài khoản']);
        }
        else{
            $user = new User;
            $user->addUser($request);
            return redirect()->route('listUsers')->with(['flash_level'=>'success','flash_message'=>'Thêm tài khoản thành công']);
        }
    }
    public function postAddProduct(addProductRequest $request){
        $product = new Products;
        $product->addProduct($request);
        return redirect()->route('listProducts')->with(['flash_level'=>'success','flash_message'=>'Thêm sản phẩm thành công']);
        
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
        return redirect()->route('authIndex')->with(['flash_level'=>'success','flash_message'=>'Cài đặt danh mục hệ thống nổi bật trang chủ thành công']);

    }
    public function postAddSystem(addSystemRequest $request){
        $system=new Systems;
        $system->addSystem($request);
        return redirect()->route('listSystems')->with(['flash_level'=>'success','flash_message'=>'Thêm gian hàng thành công']);
    }
    public function postEditSystem(Request $request, $id){
        $system = Systems::where('id',$id)->get()->first();
        $system->name = $request->name;
        $system->title = $request->title;
        $system->seo_keyword = $request->seo_keyword;
        $system->seo_description = $request->seo_description;
        $system->facebook = $request->facebook;
        $system->instagram = $request->instagram;
        $system->zalo = $request->zalo;
        $system->youtube = $request->youtube;
        $system->address = $request->address;
        $system->phone = $request->phone;
        $system->email = $request->email;
        $system->script = $request->script;
        if(Input::hasFile('image-share')){
            $file1 = Input::file('image-share');
            $file_name1 = $file1->getClientOriginalName();
            $file1->move('uploads/images/systems/share_image/',$file_name1);
            $system->share_image =$file_name1;
        }
        if(Input::hasFile('logo')){
            $file2 = Input::file('logo');
            $file_name2 = $file2->getClientOriginalName();
            $file2->move('uploads/images/systems/logo/',$file_name2);
            $system->logo =$file_name2;
        }
        if(Input::hasFile('shortcut_logo')){
            $file3 = Input::file('shortcut_logo');
            $file_name3 = $file3->getClientOriginalName();
            $file3->move('uploads/images/systems/logo/',$file_name3);
            $system->shortcut_logo =$file_name3;
        }
        $system->save();

        return redirect()->route('authIndex')->with(['flash_level'=>'success','flash_message'=>'Cài đặt thành công']);
    }

    public function postAddSlide(Request $request){
        $slide =new Slides;
        $slide->systems_id = Auth::user()->systems_id;
        $slide->url = $request->url;
        $file = Input::file('image');
        $file_name = $file->getClientOriginalName();
        $file->move('uploads/images/systems/slides/',$file_name);
        $slide->url_image = $file_name;
        $slide->save();
        return redirect()->route('listSlides')->with(['flash_level'=>'success','flash_message'=>'Thêm slide thành công']);
    }
    public function postEditSlide(Request $request,$id){
        $slide = Slides::where('id',$id)->get()->first();
        $slide->url = $request->url;
        $file = Input::file('image');
        $file_name = $file->getClientOriginalName();
        $file->move('uploads/images/systems/slides/',$file_name);
        $slide->url_image = $file_name;
        $slide->save();
        return redirect()->route('listSlides')->with(['flash_level'=>'success','flash_message'=>'Sửa slide thành công']);
    }
    public function postAddTagCategorie(Request $request,$id){
        $tag_cate = TagCategories::where('root_categorie_id',$id)->get();
        $tag = $request->tag;
        foreach($tag_cate as $tag_c){
            $tag_c->delete();
        }
        for($i=0;$i<count($tag);$i++){
            $new_tag = new TagCategories;
            $new_tag->root_categorie_id = $id;
            $new_tag->categorie_id = $tag[$i];
            $new_tag->highlights = 1;
            $new_tag->save();
        }
        return redirect()->route('listCategories')->with(['flash_level'=>'success','flash_message'=>'Gán nhãn cho danh mục thành công']);
    }
    public function postAddPropertie(Request $request){
        $propertie = $request->propertie;
        $pr_type = new PropertiesType;
        $pr_type->name = $request->name;
        $pr_type->systems_id = Auth::user()->systems_id;
        $pr_type->save();
        for($i=0;$i<count($propertie);$i++){
            if(isset($propertie[$i])){
                $pr = new Properties;
                $pr->properties_type_id = $pr_type->id;
                $pr->value = $propertie[$i];
                $pr->save();
            }
        }
        return redirect()->route('authIndex')->with(['flash_level'=>'success','flash_message'=>'Thêm thuộc tính thành công']);
    }

    public function getListUsersResponse(){
    	$users = User::select()->get();
    	return response()->json($users);
    	// return $users;
    }
    public function deleteSystem($id){
        $system = Systems::where('id',$id)->get()->first();
        $system->delete();
        return redirect()->route('listSystems')->with(['flash_level'=>'success','flash_message'=>'Xóa gian hàng thành công']);
    }
    public function systemHighlight($id){
        $system = Systems::where('id',$id)->get()->first();
        $system->highlights =1;
        $system->save();
    }
    public function systemUnHighlight($id){
        $system = Systems::where('id',$id)->get()->first();
        $system->highlights =0;
        $system->save();
    }
    
    public function systemEnable($id){
        $system = Systems::where('id',$id)->get()->first();
        $system->display =1;
        $system->save();
    }
    public function systemDisable($id){
        $system = Systems::where('id',$id)->get()->first();
        $system->display =0;
        $system->save();
    }
    public function enableCategorie($id){
        $cate = Categories::where('id',$id)->get()->first();
        $cate->display = 1;
        $cate->save();
    }
    public function disableCategorie($id){
        $cate = Categories::where('id',$id)->get()->first();
        $cate->display = 0;
        $cate->save();
    }
    
}
