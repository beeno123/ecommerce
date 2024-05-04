<?php

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontend\frontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\ProductOptionController;
use App\Http\Controllers\ProductSizeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [frontendController::class, 'Home'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/load-product-model/{productId}', [frontendController::class, 'LoadProductModel'])->name('load-product-model');

// Route::get('/dashboard', function () {
//     return view('frontend.master');
// })

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('admin/dashboard', [AdminController::class, 'AdminDshboard'])->middleware('auth', 'role:admin')->name('admin.controller');


//slider routes
Route::get('admin/slider', [SliderController::class, 'index'])->name('admin.slider');
Route::get('admin/create/slider', [SliderController::class, 'CreateSlider'])->name('admin.create.slider');
Route::post('admin/store/slider', [SliderController::class, 'StoreSlider'])->name('admin.store.slider');

//profile routes

Route::get('admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
Route::post('admin/profile/Update', [AdminController::class, 'AdminProfileUpdate'])->name('admin.profile.update');


//why Choose Us routes

Route::get('admin/Why-choose-us', [WhyChooseUsController::class, 'WhyChooseUs'])->name('admin.whyChooseUs');
Route::get('admin/create/Why-choose-us', [WhyChooseUsController::class, 'CreateWhyChooseUsTitle'])->name('admin.create.whyChooseUs.title');
Route::get('admin/edit/Why-choose-us/{id}', [WhyChooseUsController::class, 'EditWhyChooseUsTitle'])->name('admin.edit.whyChooseUs');
Route::post('admin/update/Why-choose-us/{id}', [WhyChooseUsController::class, 'UpdateWhyChooseUsTitle'])->name('admin.update.whyChooseUs');
Route::get('admin/del/Why-choose-us/{id}', [WhyChooseUsController::class, 'DelWhyChooseUsTitle'])->name('admin.del.whyChooseUs');
Route::post('admin/store/Why-choose-us', [WhyChooseUsController::class, 'StoreWhyChooseUsTitle'])->name('admin.store.whyChooseUs.title');


//Section Titles routes
Route::post('admin/Why-choose-us/section-title', [WhyChooseUsController::class, 'updateTitle'])->name('admin.update.title');

//Section category routes
Route::controller(CategoryController::class)->group(function () {
    Route::get('admin/all/category', 'AllCategory')->name('all.category');
    Route::get('admin/add/category', 'AddCategory')->name('add.category');
    Route::post('admin/store/category', 'StoreCategory')->name('store.category');
    Route::get('admin/edit/category/{id}', 'EditCategory')->name('edit.category');
    Route::post('admin/update/category/{id}', 'UpdateCategory')->name('update.category');
    Route::get('admin/dell/category/{id}', 'DellCategory')->name('dell.category');
});
//Section products routes
Route::controller(ProductController::class)->group(function () {
    Route::get('admin/all/products', 'AllProducts')->name('all.products');
    Route::get('admin/create/products', 'CreateProducts')->name('admin.create.product');
    Route::post('admin/store/products', 'StoreProducts')->name('store.product');
    Route::get('admin/delete/products/{id}', 'DeleteProducts')->name('admin.delete.product');
    Route::get('admin/edit/products/{id}', 'EditProducts')->name('admin.edit.product');
    Route::post('admin/update/products/{id}', 'UpdateProducts')->name('admin.update.product');
});
//Section products gallery
Route::controller(ProductGalleryController::class)->group(function () {
    Route::get('admin/index/products-gallery/{id}', 'Index')->name('product.gallery.index');
    Route::post('admin/store/products-gallery/{id}', 'Store')->name('product.gallery.store');
});
//Section products size
Route::controller(ProductSizeController::class)->group(function () {
    Route::get('admin/index/products-size/{id}', 'Index')->name('product.size.index');
    Route::post('admin/product-size/{id}/store', 'StoreProductSize')->name('admin.product-size.store');
});
Route::controller(ProductOptionController::class)->group(function () {

    Route::post('admin/product-option/{id}/store', 'StoreProductOption')->name('admin.product-option.store');
});
//Section Settings
Route::controller(SettingController::class)->group(function () {
    Route::get('admin/setting', 'Index')->name('admin.setting');
    Route::post('admin/setting/update', 'SettingUpdate')->name('admin.setting.update');
});

Route::post('add-to-cart', [cartController::class, 'AddToCart'])->name('add-to-cart');
//Section Product Size
