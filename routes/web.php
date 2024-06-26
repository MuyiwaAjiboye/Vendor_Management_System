<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PurchaseController;

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

Auth::routes();

// dashboard routes
Route::get('/home', [HomeController::class, 'index'])->name('page.home1');
Route::get('/home2', [HomeController::class, 'index2'])->name('page.home2');

// Products route
Route::get('/product', [ProductsController::class, 'Index'])->name('product.index');
Route::get('/createProductPage', [ProductsController::class, 'Create'])->name('product.create');
Route::post('/createNewProduct', [ProductsController::class, 'Store'])->name('product.store');
Route::get('/editProduct/{id}', [ProductsController::class, 'Edit'])->name('product.edit');
Route::put('/updateProduct/{products}', [ProductsController::class, 'Update'])->name('product.update');
Route::delete('/deleteProduct/{products}', [ProductsController::class, 'Delete'])->name('product.delete');
Route::get('/product/{product}/details', [ProductsController::class, 'Details'])->name('product.details');

// unit route
Route::get('/units', [UnitController::class, 'Index'])->name('unit.index');
Route::get('/createUnitPage', [UnitController::class, 'Create'])->name('unit.create');
Route::post('/createNewUnit', [UnitController::class, 'Store'])->name('unit.store');
Route::get('/editUnit/{units}', [UnitController::class, 'Edit'])->name('unit.edit');
Route::put('/updateUnit/{units}', [UnitController::class, 'Update'])->name('unit.update');
Route::delete('/deleteUnit/{units}', [UnitController::class, 'Delete'])->name('unit.delete');
Route::get('/unit/{unit}/details', [UnitController::class, 'Details'])->name('unit.details');

// Brand route
Route::get('/brand', [BrandController::class, 'Index'])->name('brand.index');
Route::get('/createBrandPage', [BrandController::class, 'Create'])->name('brand.create');
Route::post('/createNewBrand', [BrandController::class, 'Store'])->name('brand.store');
Route::get('/editBrand/{brand}', [BrandController::class, 'Edit'])->name('brand.edit');
Route::put('/updateBrand/{brands}', [BrandController::class, 'Update'])->name('brand.update');
Route::delete('/deleteBrand/{brands}', [BrandController::class, 'Delete'])->name('brand.delete');
Route::get('/brand/{brand}/details', [BrandController::class, 'Details'])->name('brand.details');

// Category route
Route::get('/category', [CategoryController::class, 'Index'])->name('category.index');
Route::get('/createCategoryPage', [CategoryController::class, 'Create'])->name('category.create');
Route::post('/createNewCategory', [CategoryController::class, 'Store'])->name('category.store');
Route::get('/editCategory/{category}', [CategoryController::class, 'Edit'])->name('category.edit');
Route::put('/updateCategory/{categories}', [CategoryController::class, 'Update'])->name('category.update');
Route::delete('/deleteCategory/{categories}', [CategoryController::class, 'Delete'])->name('category.delete');
Route::get('/category/{category}/details', [CategoryController::class, 'Details'])->name('category.details');

// Address route
Route::get('/address', [AddressController::class, 'Index'])->name('address.index');
Route::get('/createaddressPage', [AddressController::class, 'Create'])->name('address.create');
Route::post('/createNewaddress', [AddressController::class, 'Store'])->name('address.store');
Route::get('/editAddress/{address}', [AddressController::class, 'Edit'])->name('address.edit');
Route::put('/updateAddress/{addresses}', [AddressController::class, 'Update'])->name('address.update');
Route::delete('/deleteAddress/{addresses}', [AddressController::class, 'Delete'])->name('address.delete');
Route::get('/address/{address}/details', [AddressController::class, 'Details'])->name('address.details');

// Vendor route 
Route::get('/vendor', [VendorController::class, 'Index'])->name('vendor.index');
Route::get('/createVendorPage', [VendorController::class, 'Create'])->name('vendor.create');
Route::post('/createNewVendor', [VendorController::class, 'Store'])->name('vendor.store');
Route::get('/editVendor/{vendor}', [VendorController::class, 'Edit'])->name('vendor.edit');
Route::put('/updateVendor/{vendors}', [VendorController::class, 'Update'])->name('vendor.update');
Route::delete('/deleteVendor/{vendors}', [VendorController::class, 'Delete'])->name('vendor.delete');
Route::get('/vendor/{vendor}/details', [VendorController::class, 'Details'])->name('vendor.details');

//Purchases Route
Route::get('/purchase', [PurchaseController::class, 'Index'])->name('purchase.index');
Route::get('/createPurchasePage', [PurchaseController::class, 'Create'])->name('purchase.create');
Route::post('/createNewPurchase', [PurchaseController::class, 'Store'])->name('purchase.store');
Route::get('/editPurchase/{purchases}', [PurchaseController::class, 'Edit'])->name('purchase.edit');
Route::put('/updatePurchase/{purchases}', [PurchaseController::class, 'Update'])->name('purchase.update');
Route::delete('/deletePurchase/{purchases}', [PurchaseController::class, 'Delete'])->name('purchase.delete');
Route::get('/purchase/{purchase}/details', [PurchaseController::class, 'Details'])->name('purchase.details');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
