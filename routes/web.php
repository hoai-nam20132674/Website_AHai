<?php

use Illuminate\Support\Facades\Route;

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




Auth::routes();

Route::get('admin', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@postLogin')->name('postLogin');
Route::get('admin/index', 'HomeController@index')->name('home');
Route::get('admin/logout', 'Auth\LoginController@logout')->name('logout');
// user route
Route::get('admin/users', 'HomeController@users')->name('users');
Route::get('admin/user/add', 'HomeController@addUser')->name('addUser');
Route::post('admin/user/add', 'HomeController@postAddUser')->name('postAddUser');
Route::get('admin/user/edit/{id}', 'HomeController@editUser')->name('editUser');
Route::post('admin/user/edit/{id}', 'HomeController@postEditUser')->name('postEditUser');
Route::post('admin/user/edit-password/{id}', 'HomeController@postEditPassword')->name('postEditPassword');
// end user route
// service route

// end servive route

// blog route
Route::get('admin/blogs', 'HomeController@blogs')->name('blogs');
Route::get('admin/blog/add', 'HomeController@addBlog')->name('addBlog');
Route::post('admin/blog/add', 'HomeController@postAddBlog')->name('postAddBlog');
Route::get('admin/blog/edit/{id}', 'HomeController@editBlog')->name('editBlog');
Route::post('admin/blog/edit/{id}', 'HomeController@postEditBlog')->name('postEditBlog');
Route::get('admin/blog/delete/{id}', 'HomeController@deleteBlog')->name('deleteBlog');
Route::get('admin/blog/categories', 'HomeController@blogCategories')->name('blogCategories');
Route::get('admin/blog/categorie/add', 'HomeController@addBlogCategorie')->name('addBlogCategorie');
Route::post('admin/blog/categorie/add', 'HomeController@postAddBlogCategorie')->name('postAddBlogCategorie');
Route::get('admin/blog/categorie/edit/{id}', 'HomeController@editBlogCategorie')->name('editBlogCategorie');
Route::post('admin/blog/categorie/edit/{id}', 'HomeController@postEditBlogCategorie')->name('postEditBlogCategorie');
Route::get('admin/blogs/categorie/delete/{id}', 'HomeController@deleteBlogCategorie')->name('deleteBlogCategorie');
// end blog route

// service route
Route::get('admin/services', 'HomeController@services')->name('services');
Route::get('admin/service/add', 'HomeController@addService')->name('addService');
Route::post('admin/service/add', 'HomeController@postAddService')->name('postAddService');
Route::get('admin/service/edit/{id}', 'HomeController@editService')->name('editService');
Route::post('admin/service/edit/{id}', 'HomeController@postEditService')->name('postEditService');
Route::get('admin/service/delete/{id}', 'HomeController@deleteService')->name('deleteService');
Route::get('admin/service/categories', 'HomeController@serviceCategories')->name('serviceCategories');
Route::get('admin/service/categorie/add', 'HomeController@addServiceCategorie')->name('addServiceCategorie');
Route::post('admin/service/categorie/add', 'HomeController@postAddServiceCategorie')->name('postAddServiceCategorie');
Route::get('admin/service/categorie/edit/{id}', 'HomeController@editServiceCategorie')->name('editServiceCategorie');
Route::post('admin/service/categorie/edit/{id}', 'HomeController@postEditServiceCategorie')->name('postEditServiceCategorie');
Route::get('admin/service/categorie/delete/{id}', 'HomeController@deleteServiceCategorie')->name('deleteServiceCategorie');
// end service route

// product route
Route::get('admin/products', 'HomeController@products')->name('products');
Route::get('admin/product/add', 'HomeController@addProduct')->name('addProduct');
Route::post('admin/product/add', 'HomeController@postAddProduct')->name('postAddProduct');
Route::get('admin/product/edit/{id}', 'HomeController@editProduct')->name('editProduct');
Route::post('admin/product/edit/{id}', 'HomeController@postEditProduct')->name('postEditProduct');
Route::get('admin/product/delete/{id}', 'HomeController@deleteProduct')->name('deleteProduct');
Route::get('admin/product/categories', 'HomeController@productCategories')->name('productCategories');
Route::get('admin/product/categorie/add', 'HomeController@addProductCategorie')->name('addProductCategorie');
Route::post('admin/product/categorie/add', 'HomeController@postAddProductCategorie')->name('postAddProductCategorie');
Route::get('admin/product/categorie/edit/{id}', 'HomeController@editProductCategorie')->name('editProductCategorie');
Route::post('admin/product/categorie/edit/{id}', 'HomeController@postEditProductCategorie')->name('postEditProductCategorie');
Route::get('admin/product/categorie/delete/{id}', 'HomeController@deleteProductCategorie')->name('deleteProductCategorie');
Route::get('admin/product/image/delete/{id}', 'HomeController@deleteProductImage')->name('deleteProductImage');
// end product route

// system 
Route::get('admin/system/edit', 'HomeController@editSystem')->name('editSystem');
Route::post('admin/system/edit', 'HomeController@postEditSystem')->name('postEditSystem');
// end system

//menu
Route::get('admin/menu/edit', 'HomeController@editMenu')->name('editMenu');
Route::get('admin/menu/update', 'HomeController@updateMenu')->name('updateMenu');
Route::get('admin/menu/delete/{array}', 'HomeController@deleteMenu')->name('deleteMenu');
// end menu

// card
Route::get('admin/cards', 'HomeController@cards')->name('cards');
Route::get('admin/card/add', 'HomeController@addCard')->name('addCard');
Route::post('admin/card/add', 'HomeController@postAddCard')->name('postAddCard');
Route::get('admin/card/edit/{id}', 'HomeController@editCard')->name('editCard');
Route::post('admin/card/edit/{id}', 'HomeController@postEditCard')->name('postEditCard');
Route::get('admin/card/delete/{id}', 'HomeController@deleteCard')->name('deleteCard');
Route::post('admin/card/uploadExcel', 'HomeController@uploadExcel')->name('uploadExcel');
// end card

// Slider 
Route::get('admin/sliders', 'HomeController@sliders')->name('sliders');
Route::get('admin/slider/add', 'HomeController@addSlider')->name('addSlider');
Route::post('admin/slider/add', 'HomeController@postAddSlider')->name('postAddSlider');
Route::get('admin/slider/edit/{id}', 'HomeController@editSlider')->name('editSlider');
Route::post('admin/slider/edit/{id}', 'HomeController@postEditSlider')->name('postEditSlider');
Route::get('admin/slider/delete/{id}', 'HomeController@deleteSlider')->name('deleteSlider');
// end sliders

Route::get('admin/test', 'HomeController@test')->name('test');

//Merchant route
Route::get('/merchant-creator', 'MerchantController@index')->name('merchantIndex');
Route::get('/merchant-creator/info', 'MerchantController@info')->name('merchantInfo');
Route::post('/merchant-creator/info', 'MerchantController@postEditInfo')->name('merchantPostEditInfo');
Route::get('/merchant-creator/change-password', 'MerchantController@editPassword')->name('merchantEditPassword');
Route::post('/merchant-creator/change-password', 'MerchantController@postEditPassword')->name('merchantPostEditPassword');
Route::get('/merchant/product/edit/{id}', 'MerchantController@editProduct')->name('merchantEditProduct');
Route::post('merchant/product/edit/{id}', 'MerchantController@postEditProduct')->name('merchantPostEditProduct');
Route::post('merchant/product/add', 'MerchantController@postAddProduct')->name('merchantPostAddProduct');
// end Merchant route

// add to cart
Route::get('add-to-cart/{id}-{qty}', 'Controller@addToCart')->name('addToCart');
// end add to cart

Route::post('/addContact', 'Controller@addContact')->name('addContact');
Route::get('/lien-he', 'Controller@contact')->name('contact');
Route::get('/tra-cuu', 'Controller@cardSearch')->name('cardSearch');
Route::get('/tìm kiếm', 'Controller@search')->name('search');
Route::get('/{url}', 'Controller@page')->name('page');
Route::get('/', 'Controller@index')->name('index');
Route::post('/user/add', 'Controller@postAddUserMerchant')->name('postAddUserMerchant');
