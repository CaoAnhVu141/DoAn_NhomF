<?php

use App\Http\Controllers\AdminAttributeController;
use App\Http\Controllers\AdminCartController;
use App\Http\Controllers\AdminCategoryProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginAndRegisterController;
use App\Http\Controllers\AdminOdersController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AdminProductTypeController;
use App\Http\Controllers\AdminRelatedcategoryController;
use App\Http\Controllers\AdminShoppingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {return view('welcome');});

Route::get('/',[AdminShoppingController::class,'showIndexShopping'])->name('haha');

Route::get('detail',[AdminShoppingController::class,'showDetailIndexShopping'])->name('indexdetailpro');


//Show Login
Route::get('login',[AdminLoginAndRegisterController::class,'ShowLogin']);
//Show Register
Route::get('register',[AdminLoginAndRegisterController::class,'ShowRegister']);
//Show homepage
Route::get('home',[AdminLoginAndRegisterController::class,'ShowHomePage']);
// Thực thi dăng nhập
Route::get('login/loginrun',[AdminLoginAndRegisterController::class,'AdminLogin']);
// Thực thi đăng ký
Route::get('register/registerrun',[AdminLoginAndRegisterController::class,'adminRegister']);


// @@@@@@@@@@@@@@abstract

//@@Thực thi với danh mục (1)
Route::get('category',[AdminCategoryProductController::class,'showCategory'])->name('indexcategory');

///thêm danh mục

Route::get('add-category',[AdminCategoryProductController::class,'showAddCategory'])->name('addcategory');

//sửa danh mục

Route::get('edit-category',[AdminCategoryProductController::class,'showEditCategory'])->name('editcategory');


// @@Thực thi với danh mục liên quan (2)

Route::get('related',[AdminRelatedcategoryController::class,'showIndexRelated'])->name('indexrelated');

//thêm danh mục liên quan
Route::get('add-related',[AdminRelatedcategoryController::class,'showCreateRelated'])->name('addrelated');

//sủa danh mục liên quan

Route::get('edit-related',[AdminRelatedcategoryController::class,'showEditRelated'])->name('editrelated');

// @@thực thi với thuộc tính (3)

Route::get('attribute',[AdminAttributeController::class,'showIndexAattribute'])->name('indexattribute');

//thêm thuộc tính 

Route::get('add-attribute',[AdminAttributeController::class,'showCreateAttribute'])->name('addattribute');

//sửa thuộc tính
Route::get('edit-attribute',[AdminAttributeController::class,'showEditAttribute'])->name('editattribute');

// @@ Thực thi với sản phẩm (4)

Route::get('product',[AdminProductsController::class,'showIndexProduct'])->name('indexproduct');

// thêm sản phẩm

Route::get('add-product',[AdminProductsController::class,'showCreateProduct'])->name('addproduct');

//sửa sản phẩm
Route::get('edit-product',[AdminProductsController::class,'showEditCaterogtProduct'])->name('editproduct');

// @@ Thực thi với đơn hàng (5)

Route::get('oders',[AdminOdersController::class,'showIndexOder'])->name('indexoders');

// đơn hàng chi tiết

Route::get('oders-detail',[AdminOdersController::class,'showDetailIndexOder'])->name('indexoderdetail');

// @@ Thực thi với loại sản phẩm (6)

Route::get('product-type',[AdminProductTypeController::class,'showProductType'])->name('indexproducttype');

//thêm loại sản phẩm

Route::get('add-producttype',[AdminProductTypeController::class,'showAddProductType'])->name('addproducttype');

//sửa loại sản phẩm

Route::get('edit-producttype',[AdminProductTypeController::class,'showEditProductType'])->name('editproducttype');

// @@ Thực thi với bài viết (7)

Route::get('posts',[AdminPostsController::class,'showIndexPost'])->name('indexpost');

// thêm bài viết
Route::get('add-posts',[AdminPostsController::class,'showCreatePost'])->name('addpost');
<<<<<<< Updated upstream
//
Route::get('categoryuser',[AdminCategoryProductController::class,'ShowCategoryUser']);
Route::get('addsanpham',[AdminCategoryProductController::class,'ShowAddProduct']);
Route::get('addproduct/addrun',[AdminProductTypeController::class,'AddNewProduct']);
=======





//_____@Giỏ hàng ________

Route::get('cart',[AdminCartController::class,'showIndexCart'])->name('indexcart');
>>>>>>> Stashed changes
