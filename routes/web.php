<?php

use App\Http\Controllers\AdminAttributeController;
use App\Http\Controllers\AdminCartController;
use App\Http\Controllers\AdminCategoryPost;
use App\Http\Controllers\AdminCategoryProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminManagerUsersController;
use App\Http\Controllers\AdminOdersController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AdminProductTypeController;
use App\Http\Controllers\AdminRelatedcategoryController;
use App\Http\Controllers\AdminShoppingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminLoginAndRegisterController;
use App\Http\Controllers\AdminSupplierController;
use App\Http\Controllers\CartShopping;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use Faker\Guesser\Name;

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


// Route::get('/',[AdminShoppingController::class,'showIndexShopping'])->name('haha');

// Route::get('detail',[AdminShoppingController::class,'showDetailIndexShopping'])->name('indexdetailpro');

///thực thi với trang chủ index
Route::get('/',[AdminShoppingController::class,'showIndexShopping'])->name('haha')->middleware('auth');



///show thanh toán

Route::get('checkout',[AdminShoppingController::class,'showCart'])->name('cartpro');

//_____@Giỏ hàng ________

Route::get('cart',[AdminCartController::class,'showIndexCart'])->name('indexcart');

///@Liên hệ/

Route::get('contact',[ContactController::class,'showIndexContact'])->name('contactindex');


/////////////////////////////////////////////////////////////////////////////////////////////////////
//Show Login
Route::get('login',[AdminLoginAndRegisterController::class,'ShowLogin'])->name('showlogin');
//Show Register
Route::get('register',[AdminLoginAndRegisterController::class,'ShowRegister']);

// Thực thi dăng nhập
Route::get('login/loginrun',[AdminLoginAndRegisterController::class,'UserLogin']);
Route::post('logout',[AdminLoginAndRegisterController::class,'logoutUser'])->name('logout');
// Thực thi đăng ký
Route::get('register/registerrun',[AdminLoginAndRegisterController::class,'adminRegister']);


Route::get('admin-login',[LoginAdminController::class,'showAminLogin'])->name('showadminlogin');
Route::post('admin-login',[LoginAdminController::class,'UserLoginAdmin'])->name('adminlogin');

///Logout cho admin

Route::get('admin-logout',[AdminController::class,'adminLogout'])->name('admin.logout');
Route::get('logout-admin',[LoginAdminController::class,'logoutUserSell'])->name('logout.admin');

//show toàn bộ tài khoản user mua

Route::get('showuser',[AdminManagerUsersController::class,'showAllUser'])->name('showalluser');


// @@@@@@@@@@@@@@abstract

//@@Thực thi với danh mục (1)
Route::get('category',[AdminCategoryProductController::class,'showCategory'])->name('indexcategory');

///thêm danh mục

Route::get('add-category',[AdminCategoryProductController::class,'showAddCategory'])->name('addcategory');
Route::post('add-category',[AdminCategoryProductController::class,'addCategoryProduct'])->name('adddatacategory');
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
Route::post('add-attribute',[AdminAttributeController::class,'addDataAttribute'])->name('adddataattribute');

//sửa thuộc tính
Route::get('edit-attribute/{id}',[AdminAttributeController::class,'showEditAttribute'])->name('editattribute');
Route::post('edit-attribute/{id}',[AdminAttributeController::class,'updateAttribute'])->name('updateattribute');




// hiện và ẩn checkactive của thuộc tính

Route::get('toggle-attribute/{id}',[AdminAttributeController::class, 'ShowOrHideCheck'])->name('toggleattribute');

// xoá thuộc tính

Route::get('delete-attribute/{id}',[AdminAttributeController::class, 'deleteAttribute'])->name('deleteattribute');

// @@ Thực thi với sản phẩm (4)

Route::get('product',[AdminProductsController::class,'showIndexProduct'])->name('indexproduct');

// thêm sản phẩm

Route::get('add-product',[AdminProductsController::class,'showCreateProduct'])->name('addproduct');
Route::post('add-product',[AdminProductsController::class,'addDataProduct'])->name('adddataproduct');

///xoá sản phẩm

Route::get('delete-product/{id}',[AdminProductsController::class,'deleteProducts'])->name('deleteproducts');

//sửa sản phẩm
Route::get('edit-product/{id}',[AdminProductsController::class,'showIndexUpdateProduct'])->name('editproduct');



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
Route::post('add-posts',[AdminPostsController::class,'addDataPost'])->name('adddatapost');

//xoá bài viết

Route::get('delete-post/{id}',[AdminPostsController::class,'deleteListPost'])->name('deletepost');

//sửa bài viêys

Route::get('update-post/{id}',[AdminPostsController::class, 'showIndexUpdatePost'])->name('updatepost');
Route::post('update-post/{id}',[AdminPostsController::class, 'updateIndexDataPost'])->name('updatedatapost');




// @Thực thi với danh sách bài viết (8)

Route::get('categorypost',[AdminCategoryPost::class,'showIndexCategoryPost'])->name('indexcategorypost');

Route::get('add-categorypost',[AdminCategoryPost::class, 'showAddIndexCategoryPost'])->name('addcategorypost');
Route::post('add-categorypost',[AdminCategoryPost::class, 'addDataCategoryPost'])->name('adddatacategorypost');

//
//hiện và ẩn check status

Route::get('hideorshowpost/{id}',[AdminCategoryPost::class, 'ShowOrHideCategoryPost'])->name('showorhidecategorypost');

// xoá danh mục bài viết

Route::get('delete-categorypost/{id}',[AdminCategoryPost::class, 'deteleCategoryPost'])->name('deletecategorypost');

//sửa danh mục bài viêts

Route::get('update-categorypost/{id}',[AdminCategoryPost::class, 'showIndexUpdate'])->name('updatecategorypost');
Route::post('update-categorypost/{id}',[AdminCategoryPost::class, 'updateDataCategoryPost'])->name('updatedatacategorypost');



//
Route::get('categoryuser',[AdminCategoryProductController::class,'ShowCategoryUser']);
Route::get('addsanpham',[AdminCategoryProductController::class,'ShowAddProduct']);
Route::get('addproduct/addrun',[AdminProductTypeController::class,'AddNewProduct']);




/// thực thi cho nhà cung cấp (9)

Route::get('supplier',[AdminSupplierController::class, 'showIndexSupplier'])->name('indexsupplier');

//them nhà cung cấp

Route::get('add-supplier',[AdminSupplierController::class, 'showAddIndexSupplier'])->name('addsupplier');
Route::post('add-supplier',[AdminSupplierController::class, 'addDataSupplier'])->name('adddatasupplier');

//xoá nhà cung cấp

Route::get('delete-suplier/{id}',[AdminSupplierController::class, 'deleteSupplier'])->name('deletesupllers');
//sửa nhà cung cấp

Route::get('update-supplier/{id}',[AdminSupplierController::class,'updateSupplier'])->name('updatesupplier');
Route::post('update-supplier/{id}',[AdminSupplierController::class,'updateDataSupplier'])->name('updatedatasupplier');


//__@Chi tiết users

Route::get('manager',[AdminManagerUsersController::class,'showManagerUsers'])->name('manageruser');
Route::post('manager',[AdminManagerUsersController::class,'showAllUser'])->name('manageruse');
//Xoa User
Route::delete('/users/{id}', [AdminManagerUsersController::class, 'deleteUser'])->name('deleteUser');
//Sua User
Route::get('/users/edit/{id}', [AdminManagerUsersController::class, 'edit'])->name('editUser');
Route::put('/users/edit/{id}', [AdminManagerUsersController::class, 'update'])->name('updateUser');



////demo senmail

Route::get('sendmail',[SendMailController::class,'sendMaill']);


///quên mật khẩu

Route::get('forgot',[ForgotPasswordController::class,'showForgotPass'])->name('forgotpass');
Route::post('forgot',[ForgotPasswordController::class,'sendResetLinkEmail'])->name('getpass');

Route::get('checkmail',[ForgotPasswordController::class, 'showNotificationEmail'])->name('checkmail');

///Đặt lại mật khẩu
//
Route::get('password/reset/{token}',[ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'resetPassword'])->name('password.update');



///THỰC THI VỚI TRANG INDEX MUA HÀNG@@@

//--hiển thị chi tiết sản phẩm

Route::get('detail/{id}',[AdminShoppingController::class,'showDetailShopping'])->name('detailpro');

///thực thi giỏ hàng

Route::get('add-cart/{id}',[CartShopping::class,'addCartShopping'])->name('cart.add');

//xoá

// Route::get('delete-cart/{rowId}',[CartShopping::class,'deleteCartShopping'])->name('cart.remove');
Route::get('remove-cart/{rowId}', [CartShopping::class, 'deleteCartShopping'])->name('cart.remove');


//update

Route::post('update-cart',[CartShopping::class,'updateCartShopping'])->name('cart.update');

