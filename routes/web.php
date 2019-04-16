<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');
Route::get('/admin',['as'=>'admin','uses'=>'Auth\LoginController@getLogin']);
Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@login']);
Route::get('/logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);
Route::post('/postLogin',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);
Route::get('/client-login',['as'=>'clientLogin','uses'=>'AuthClient\LoginController@getLogin']);
Route::get('/client-logout',['as'=>'clientLogout','uses'=>'AuthClient\LoginController@logout']);
Route::post('/clientPostLogin',['as'=>'clientPostLogin','uses'=>'AuthClient\LoginController@postLogin']);

// login with social facebook
Route::get('/login/facebook',['as' => 'loginFacebook','uses' => 'AuthClient\LoginController@redirectToProvider']);
Route::get('/facebook/callback',['as' => 'loginFacebookCallback','uses' => 'AuthClient\LoginController@handleProviderCallback']);

// end

Route::get('getListUsersResponse',['as'=>'getListUsersResponse','uses'=>'Auth\AdminController@getListUsersResponse']);
Route::group(['prefix'=>'auth','middleware'=>'auth'], function(){
	Route::get('trang-chu',['as'=>'authIndex','uses'=>'Auth\AdminController@index']);

	Route::get('them-tai-khoan-quan-tri',['as'=>'addUser','uses'=>'Auth\AdminController@addUser']);
	// Route::get('them-tai-khoan-nguoi-dung',['as'=>'addUserClient','uses'=>'Auth\AdminController@addUserClient']);
	Route::get('them-san-pham',['as'=>'addProduct','uses'=>'Auth\AdminController@addProduct']);
	Route::get('them-danh-muc',['as'=>'addCategorie','uses'=>'Auth\AdminController@addCategorie']);
	Route::get('them-tin-tuc',['as'=>'addBlog','uses'=>'Auth\AdminController@addBlog']);
	Route::get('them-he-thong',['as'=>'addSystem','uses'=>'Auth\AdminController@addSystem']);

	Route::get('danh-sach-tai-khoan-quan-tri',['as'=>'listUsers','uses'=>'Auth\AdminController@listUsers']);
	Route::get('danh-sach-tai-khoan-nguoi-dung',['as'=>'listUsersClient','uses'=>'Auth\AdminController@listUsersClient']);
	Route::get('danh-sach-san-pham',['as'=>'listProducts','uses'=>'Auth\AdminController@listProducts']);
	Route::get('danh-sach-danh-muc',['as'=>'listCategories','uses'=>'Auth\AdminController@listCategories']);
	Route::get('danh-sach-tin-tuc',['as'=>'listBlogs','uses'=>'Auth\AdminController@listBlogs']);
	Route::get('danh-sach-he-thong',['as'=>'listSystems','uses'=>'Auth\AdminController@listSystems']);

	Route::get('sua-tai-khoan-quan-tri',['as'=>'editUser','uses'=>'Auth\AdminController@editUser']);
	// Route::get('sua-tai-khoan-nguoi-dung',['as'=>'editUserClient','uses'=>'Auth\AdminController@editUserClient']);
	Route::get('sua-san-pham',['as'=>'editProduct','uses'=>'Auth\AdminController@editProduct']);
	Route::get('sua-danh-muc',['as'=>'editCategorie','uses'=>'Auth\AdminController@editCategorie']);
	Route::get('sua-tin-tuc',['as'=>'editBlog','uses'=>'Auth\AdminController@editBlog']);
	Route::get('sua-thong-tin-he-thong',['as'=>'editSystem','uses'=>'Auth\AdminController@editSystem']);

	Route::get('xoa-tai-khoan-quan-tri',['as'=>'deleteUser','uses'=>'Auth\AdminController@deleteUser']);
	Route::get('xoa-tai-khoan-nguoi-dung',['as'=>'deleteUserClient','uses'=>'Auth\AdminController@deleteUserClient']);
	Route::get('xoa-san-pham',['as'=>'deleteProduct','uses'=>'Auth\AdminController@deleteProduct']);
	Route::get('xoa-danh-muc',['as'=>'deleteCategorie','uses'=>'Auth\AdminController@deleteCategorie']);
	Route::get('xoa-tin-tuc',['as'=>'deleteBlog','uses'=>'Auth\AdminController@deleteBlog']);
	Route::get('xoa-he-thong',['as'=>'deleteSystem','uses'=>'Auth\AdminController@deleteSystem']);

	Route::post('postAddUser',['as'=>'postAddUser','uses'=>'Auth\AdminController@postAddUser']);
	Route::post('postEditUser',['as'=>'postEditUser','uses'=>'Auth\AdminController@postEditUser']);
	Route::post('postAddProduct',['as'=>'postAddProduct','uses'=>'Auth\AdminController@postAddProduct']);
	Route::post('postEditProduct',['as'=>'postEditProduct','uses'=>'Auth\AdminController@postEditProduct']);
	Route::post('postAddCategorie',['as'=>'postAddCategorie','uses'=>'Auth\AdminController@postAddCategorie']);
	Route::post('postEditCategorie',['as'=>'postEditCategorie','uses'=>'Auth\AdminController@postEditCategorie']);
	Route::post('postAddBlog',['as'=>'postAddBlog','uses'=>'Auth\AdminController@postAddBlog']);
	Route::post('postEditBlog',['as'=>'postEditBlog','uses'=>'Auth\AdminController@postEditBlog']);
	Route::post('postAddSystem',['as'=>'postAddSystem','uses'=>'Auth\AdminController@postAddSystem']);
	Route::post('postEditSystem',['as'=>'postEditSystem','uses'=>'Auth\AdminController@postEditSystem']);

	Route::get('deleteUser',['as'=>'deleteUser','uses'=>'Auth\AdminController@deleteUser']);
	Route::get('deleteUserClient',['as'=>'deleteUserClient','uses'=>'Auth\AdminController@deleteUserClient']);
	Route::get('deleteProduct',['as'=>'deleteProduct','uses'=>'Auth\AdminController@deleteProduct']);
	Route::get('deleteCategorie',['as'=>'deleteCategorie','uses'=>'Auth\AdminController@deleteCategorie']);
	Route::get('deleteBlog',['as'=>'deleteBlog','uses'=>'Auth\AdminController@deleteBlog']);
	Route::get('deleteSystem',['as'=>'deleteSystem','uses'=>'Auth\AdminController@deleteSystem']);
});
