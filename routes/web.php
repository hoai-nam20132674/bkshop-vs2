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
//AuthClientRoute
Route::get('/test',['as'=>'test','uses'=>'AuthClient\ClientController@test']);


Route::get('/',['as'=>'trang-chu','uses'=>'AuthClient\ClientController@index']);

//search text
Route::get('check:{email}-{password}',['as'=>'checkLogin','uses'=>'AuthClient\LoginController@checkLogin']);
Route::get('search:danh mục:{cate_id}.{cate_name}.tìm kiếm={search_text}',['as'=>'rootSearchText','uses'=>'AuthClient\ClientController@rootSearchText']);
Route::get('/{system_url}/search:danh mục:{cate_id}.{cate_name}.tìm kiếm={search_text}',['as'=>'businessSearchText','uses'=>'AuthClient\ClientController@businessSearchText']);
// end search text
Route::get('/client-login',['as'=>'clientLogin','uses'=>'AuthClient\LoginController@getLogin']);
Route::get('/client-logout',['as'=>'clientLogout','uses'=>'AuthClient\LoginController@logout']);
Route::post('/clientPostLogin',['as'=>'clientPostLogin','uses'=>'AuthClient\LoginController@postLogin']);


Route::get('admin/auth/master',['as'=>'admin','uses'=>'Auth\LoginController@getLogin']);
Route::get('admin',['as'=>'login','uses'=>'Auth\LoginController@login']);
Route::get('admin/auth/logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);
Route::post('/postLogin',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);

Route::get('account/{id}',['as'=>'account','uses'=>'AuthClient\ClientController@account']);
Route::get('order/{id}',['as'=>'order','uses'=>'AuthClient\ClientController@order']);
Route::get('cart',['as'=>'cart','uses'=>'AuthClient\ClientController@cart']);
Route::get('check-add-to-cart/{url}',['as'=>'checkAddToCart','uses'=>'AuthClient\ClientController@checkAddToCart']);
Route::get('add-to-cart/{id}-{quantity}',['as'=>'addToCart','uses'=>'AuthClient\ClientController@addToCart']);


// login with social facebook
Route::get('/login/facebook',['as' => 'loginFacebook','uses' => 'AuthClient\LoginController@redirectToProvider']);
Route::get('/facebook/callback',['as' => 'loginFacebookCallback','uses' => 'AuthClient\LoginController@handleProviderCallback']);

// end

//End AuthClientRoute

Route::get('getListUsersResponse',['as'=>'getListUsersResponse','uses'=>'Auth\AdminController@getListUsersResponse']);
Route::group(['prefix'=>'auth/admin','middleware'=>'auth'], function(){
	Route::get('trang-chu',['as'=>'authIndex','uses'=>'Auth\AdminController@index']);

	Route::get('them-tai-khoan-quan-tri',['as'=>'addUser','uses'=>'Auth\AdminController@addUser']);
	// Route::get('them-tai-khoan-nguoi-dung',['as'=>'addUserClient','uses'=>'Auth\AdminController@addUserClient']);
	Route::get('them-san-pham',['as'=>'addProduct','uses'=>'Auth\AdminController@addProduct']);
	Route::get('them-danh-muc',['as'=>'addCategorie','uses'=>'Auth\AdminController@addCategorie']);
	Route::get('them-he-thong',['as'=>'addSystem','uses'=>'Auth\AdminController@addSystem']);
	Route::get('them-he-thong-noi-bat-trang-chu',['as'=>'addHomeSystem','uses'=>'Auth\AdminController@addHomeSystem']);

	Route::get('danh-sach-tai-khoan-quan-tri',['as'=>'listUsers','uses'=>'Auth\AdminController@listUsers']);
	Route::get('danh-sach-tai-khoan-nguoi-dung',['as'=>'listUsersClient','uses'=>'Auth\AdminController@listUsersClient']);
	Route::get('danh-sach-san-pham',['as'=>'listProducts','uses'=>'Auth\AdminController@listProducts']);
	Route::get('danh-sach-danh-muc',['as'=>'listCategories','uses'=>'Auth\AdminController@listCategories']);
	Route::get('danh-sach-he-thong',['as'=>'listSystems','uses'=>'Auth\AdminController@listSystems']);

	Route::get('sua-tai-khoan-quan-tri/{id}',['as'=>'editUser','uses'=>'Auth\AdminController@editUser']);
	// Route::get('sua-tai-khoan-nguoi-dung',['as'=>'editUserClient','uses'=>'Auth\AdminController@editUserClient']);
	Route::get('sua-san-pham',['as'=>'editProduct','uses'=>'Auth\AdminController@editProduct']);
	Route::get('sua-danh-muc/{systems_id}/{id}',['as'=>'editCategorie','uses'=>'Auth\AdminController@editCategorie']);
	Route::get('sua-thong-tin-he-thong',['as'=>'editSystem','uses'=>'Auth\AdminController@editSystem']);

	Route::get('xoa-tai-khoan-quan-tri',['as'=>'deleteUser','uses'=>'Auth\AdminController@deleteUser']);
	Route::get('xoa-tai-khoan-nguoi-dung',['as'=>'deleteUserClient','uses'=>'Auth\AdminController@deleteUserClient']);
	Route::get('xoa-san-pham',['as'=>'deleteProduct','uses'=>'Auth\AdminController@deleteProduct']);
	Route::get('xoa-danh-muc',['as'=>'deleteCategorie','uses'=>'Auth\AdminController@deleteCategorie']);
	Route::get('xoa-he-thong',['as'=>'deleteSystem','uses'=>'Auth\AdminController@deleteSystem']);

	Route::post('postAddUser',['as'=>'postAddUser','uses'=>'Auth\AdminController@postAddUser']);
	Route::post('postEditUser/{id}',['as'=>'postEditUser','uses'=>'Auth\AdminController@postEditUser']);
	Route::post('postAddProduct',['as'=>'postAddProduct','uses'=>'Auth\AdminController@postAddProduct']);
	Route::post('postEditProduct',['as'=>'postEditProduct','uses'=>'Auth\AdminController@postEditProduct']);
	Route::post('postAddCategorie',['as'=>'postAddCategorie','uses'=>'Auth\AdminController@postAddCategorie']);
	Route::post('postEditCategorie',['as'=>'postEditCategorie','uses'=>'Auth\AdminController@postEditCategorie']);
	Route::post('postAddSystem',['as'=>'postAddSystem','uses'=>'Auth\AdminController@postAddSystem']);
	Route::post('postEditSystem',['as'=>'postEditSystem','uses'=>'Auth\AdminController@postEditSystem']);
	Route::post('postAddHomeSystem',['as'=>'postAddHomeSystem','uses'=>'Auth\AdminController@postAddHomeSystem']);

	Route::get('deleteUser',['as'=>'deleteUser','uses'=>'Auth\AdminController@deleteUser']);
	Route::get('deleteUserClient',['as'=>'deleteUserClient','uses'=>'Auth\AdminController@deleteUserClient']);
	Route::get('deleteProduct',['as'=>'deleteProduct','uses'=>'Auth\AdminController@deleteProduct']);
	Route::get('deleteCategorie/{id}',['as'=>'deleteCategorie','uses'=>'Auth\AdminController@deleteCategorie']);
	Route::get('deleteSystem',['as'=>'deleteSystem','uses'=>'Auth\AdminController@deleteSystem']);
});


Route::get('/{url}',['as'=>'rootPageContent','uses'=>'AuthClient\ClientController@rootPageContent']);
Route::get('/{system_url}/{url}',['as'=>'businessPageContent','uses'=>'AuthClient\ClientController@businessPageContent']);
