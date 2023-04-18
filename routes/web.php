<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductDummyController;
use App\Http\Controllers\Frontend\GoogleController;
use App\Http\Controllers\Frontend\addToCartController;
use App\Http\Controllers\Frontend\checkoutController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\RazorpayController;
use App\Http\Controllers\Frontend\StripeController;


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
Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('/xtreme-pro-whey-protein', [FrontHomeController::class, 'xtremeProWhyProtein'])->name('xtreme-pro-whey-protein');
Route::get('/xtreme-endurance-bcaa', [FrontHomeController::class, 'xtremeEnduranceBcaa'])->name('xtreme-endurance-bcaa');
Route::get('/xtreme-tournament', [FrontHomeController::class, 'xtremeTournament'])->name('xtreme-tournament');
Route::get('/contact-us', [FrontHomeController::class, 'contact'])->name('contact-us');
/*CUSTOMER LOGIN AND REGISTER*/
Route::post('register.submit',[FrontHomeController::class, 'registerSubmit'])->name('register.submit');
Route::get('account/verify/{token}', [FrontHomeController::class, 'verifyAccount'])->name('user.verify');
Route::post('login.submit',[FrontHomeController::class, 'LoginSubmit'])->name('login.submit');
/* Forgot Password Route Start */
Route::post('forget-password.submit', [FrontHomeController::class, 'submitForgetPasswordForm'])->name('forget-password.submit');
Route::get('reset-password/{token}', [FrontHomeController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [FrontHomeController::class, 'submitResetPasswordForm'])->name('reset.password.post');
/* Forgot Password Route Start */
Route::get('logout',[FrontHomeController::class, 'logout'])->name('logout');
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
/*add to cart*/
Route::get('cart', [addToCartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [addToCartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [addToCartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [addToCartController::class, 'remove'])->name('remove.from.cart');
Route::get('checkout', [checkoutController::class, 'checkout'])->name('checkout');
Route::post('checkout.submit', [checkoutController::class, 'checkoutFormSubmit'])->name('checkout.submit');
Route::get('preview-checkout', [checkoutController::class, 'previewCheckout'])->name('preview-checkout');
Route::post('order.submit', [OrderController::class, 'orderSubmit'])->name('order.submit');
Route::post('razorpaypayment', [RazorpayController::class, 'payment'])->name('payment');
Route::get('stripe-payment', [OrderController::class, 'stripForm'])->name('stripe-payment');
//Route::get('stripe-payment', [StripeController::class, 'handleGet']);
Route::post('stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');

Auth::routes();
/*Backend start*/

//Route::get('admin', [LoginController::class, 'index'])->name('admin');
//Route::post('admin.submit', [LoginController::class, 'adminLoginSubmit'])->name('admin.submit');
Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
//Route::group(['middleware' => ['auth','admin']], function () {
    Route::resource('product-dummy', ProductDummyController::class);
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('product', ProductController::class);
    Route::resource('/category', CategoryController::class);
    //Route::get('/productAttributes', [ProductController::class, 'getAttribute'])->name('getAttribute');
  
});
//Route::get('/home', [FrontHomeController::class, 'home'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
