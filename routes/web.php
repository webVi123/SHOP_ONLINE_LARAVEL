<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VnpController;


use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;




// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/shop', function () {
//     return view('shop');
// });
// Route::get('/pddetail', function () {
//     return view('pddetail');
// });
// Route::get('/cart', function () {
//     return view('cart');
// });
// Route::get('/chackout', function () {
//     return view('chackout');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });

Route::middleware(['web'])->group(function () {

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/shop/category/{category_id}', [ShopController::class, 'category'])->name('category');
Route::get('/shop/search', [ShopController::class, 'search'])->name('search');
Route::get('/prodetail/{id}', [ShopController::class, 'prodetail'])->name('prodetail');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addProduct'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeProduct'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::get('/chackout', [CartController::class, 'chackout'])->name('chackout');
Route::post('/chackout', [CartController::class, 'payment'])->name('payment');

Route::post('/update-quantity', [CartController::class, 'updateQuantity'])->name('updateQuantity');



Route::get('/orderhistory', [CartController::class, 'orderhistory'])->name('orderhistory');
// Route::get('/detai_order/{id}', [CartController::class, 'detailOrder'])->name('detail_orderhistory');
Route::get('/detai_order/{id}', [CartController::class, 'detailOrder'])->name('detail_orderhistory');
Route::get('/dowloadpdf/{id}', [CartController::class, 'dowload'])->name('dowload');
Route::post('/vnpay-payment',  [VnpController::class, 'vnpayPayment'])->name('vnpay.payment');
Route::get('/payment_success',  [VnpController::class, 'payment_success'])->name('payment_success');





Route::get('/forgotpass', [AccountController::class, 'forgotpass'])->name('forgotpass');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blgdetail', [BlogController::class, 'blgdetail'])->name('blgdetail');
Route::get('/wishlist', [ShopController::class, 'wishlist'])->name('wishlist');




Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/thongke', [AdminController::class, 'thongke'])->name('admin.thongke');

Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/user/adduser', [AdminController::class, 'adduser'])->name('admin.adduser');
Route::post('/admin/add_user', [AdminController::class, 'store_user'])->name('admin.addus');
Route::get('/admin/user/uduser/{id}', [AdminController::class, 'uduser'])->name('admin.updateuser');
Route::put('/admin/user/uduser/{id}', [AdminController::class, 'UpdateUs'])->name('admin.users.update');
// Route::delete('/admin/deleteuser/{id}', [AdminController::class, 'destroyuser'])->name('admin.user.destroy');
Route::post('/admin/user/{id}/toggle-status', [AdminController::class, 'toggleStatus'])->name('user.toggle-status');






Route::get('/admin.products', [AdminController::class, 'products'])->name('admin.products');
Route::get('/admin/category/product', [AdminController::class, 'products'])->name('category.products');
Route::get('/admin/addproducts', [AdminController::class, 'addproducts'])->name('admin.addproducts');
Route::post('/admin/addproducts', [AdminController::class, 'store'])->name('admin.addpro');
Route::get('/admin/udproducts/{id}', [AdminController::class, 'udproducts'])->name('admin.udproducts');
Route::put('/admin/updatepro/{id}', [AdminController::class, 'updatepro'])->name('admin.products.update');
Route::delete('/admin/deleteproducts/{id}', [AdminController::class, 'destroypro'])->name('admin.products.destroy');

Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
Route::get('/admin/addcategories', [AdminController::class, 'addcategories'])->name('admin.addcategories');
Route::post('/admin/addcategories', [AdminController::class, 'store_categories'])->name('admin.addcategory');
Route::get('/admin/udcategories/{id}', [AdminController::class, 'udcategories'])->name('admin.udcategories');
Route::put('/admin/updatecate/{id}', [AdminController::class, 'update_category'])->name('admin.categories.update');
Route::delete('/admin/deletecategory/{id}', [AdminController::class, 'destroycate'])->name('admin.categories.destroy');





Route::get('/admin/order', [AdminController::class, 'order'])->name('admin.order');
Route::get('/admin/ordetail/{id}', [AdminController::class, 'ordetail'])->name('admin.ordetail');
Route::post('/update-order-status/{orderId}',[AdminController::class, 'updateStatus'])->name('update.order.status');

Route::get('/admin/comment', [AdminController::class, 'comment'])->name('admin.comment');
Route::get('/admin/commentdetail', [AdminController::class, 'commentdetail'])->name('admin.commentdetail');


});






Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');



Route::get('account', [LoginController::class, 'showAccountForm'])->name('account.form');
Route::put('account', [LoginController::class, 'updateAccount'])->name('account.update');
Route::get('confirm_account', [LoginController::class, 'showConfirmAccount'])->name('confirm.form');





