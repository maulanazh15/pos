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
	return redirect('/dashboard');
});
Route::get('/dashboard', 'MainController@dashboardV1')->name('dashboard-v1');
Route::get('/dashboard/v2', 'MainController@dashboardV2')->name('dashboard-v2');
Route::get('/dashboard/v3', 'MainController@dashboardV3')->name('dashboard-v3');


Route::get('/laporan/penjualan', 'MainController@laporanPenjualan')->name('laporan-penjualan');
Route::get('/laporan/transaksi', 'MainController@laporanTransaksi')->name('laporan-transaksi');
Route::get('/laporan/pemasukan', 'MainController@laporanPemasukan')->name('laporan-pemasukan');
Route::get('/laporan/pengeluaran', 'MainController@laporanPengeluaran')->name('laporan-pengeluaran');

Route::get('/pos/customer-order', 'MainController@posCustomerOrder')->name('pos-customer-order');
Route::get('/pos/kitchen-order', 'MainController@posKitchenOrder')->name('pos-kitchen-order');
Route::get('/pos/counter-checkout', 'MainController@posCounterCheckout')->name('pos-counter-checkout');
Route::get('/pos/table-booking', 'MainController@posTableBooking')->name('pos-table-booking');
Route::get('/pos/menu-stock', 'MainController@posMenuStock')->name('pos-menu-stock');


Route::get('/extra/invoice', 'MainController@extraInvoice')->name('extra-invoice');
Route::get('/extra/profile', 'MainController@extraProfile')->name('extra-profile');

Route::get('/login/v1', 'MainController@loginV1')->name('login-v1');
Route::get('/login', 'MainController@loginV2')->name('login');
Route::get('/login/v3', 'MainController@loginV3')->name('login-v3');
Route::get('/register', 'MainController@registerV3')->name('register');


Route::get('/pengaturan', 'MainController@pengaturan')->name('pengaturan');

Route::get('/profil', 'MainController@profil')->name('profil');
Route::get('/edit/profil', 'MainController@editProfil')->name('edit-profil');

Route::get('/menu/tambah', 'MainController@menuTambah')->name('menu-tambah');
Route::get('/menu/daftar', 'MainController@menuDaftar')->name('menu-daftar');
Route::get('/menu/kategori', 'MainController@menuKategori')->name('menu-kategori');
Route::get('/menu/kategori/tambah', 'MainController@menuKategoriTambah')->name('menu-kategori-tambah');

Route::get('/menu', 'MainController@showMenu')->name('menu.index');

use App\Http\Controllers\MenusController;

Route::resource('menus', MenusController::class);

Route::get('/menus', [MenusController::class, 'index'])->name('menu.index');

Route::get('/menu/tambah', [MenusController::class, 'create'])->name('menu.create');
Route::post('/menu', [MenusController::class, 'store'])->name('menu.store');

Route::get('/menu/edit/{id}', [MenusController::class, 'edit'])->name('menu.edit');
Route::put('/menu/{id}', [MenusController::class, 'update'])->name('menu.update');

Route::delete('/menu/hapus/{id}', [MenusController::class, 'destroy'])->name('menu.destroy');

Route::get('/menu', [MenusController::class, 'index'])->name('menu.index');

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransactionController;

Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');


Route::prefix('kategori')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('kategori.index'); 
    Route::get('/create', [CategoryController::class, 'create'])->name('kategori.create'); 
    Route::post('/', [CategoryController::class, 'store'])->name('kategori.store'); 
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('kategori.edit'); 
    Route::put('/{id}', [CategoryController::class, 'update'])->name('kategori.update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('kategori.destroy'); 
});

Route::prefix('pelanggan')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('pelanggan.index'); 
    Route::get('/create', [CustomerController::class, 'create'])->name('pelanggan.create'); 
    Route::post('/', [CustomerController::class, 'store'])->name('pelanggan.store'); 
    Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('pelanggan.edit'); 
    Route::put('/{id}', [CustomerController::class, 'update'])->name('pelanggan.update'); 
    Route::delete('/{id}', [CustomerController::class, 'destroy'])->name('pelanggan.destroy'); 
});

Route::prefix('menu')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('menu.index'); 
    Route::get('/create', [MenuController::class, 'create'])->name('menu.create'); 
    Route::post('/', [MenuController::class, 'store'])->name('menu.store'); 
    Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit'); 
    Route::put('/{id}', [MenuController::class, 'update'])->name('menu.update'); 
    Route::delete('/{id}', [MenuController::class, 'destroy'])->name('menu.destroy'); 
});

Route::prefix('transaksi')->group(function () {
    Route::get('/', [TransactionController::class, 'index'])->name('transaksi.index'); 
    Route::get('/create', [TransactionController::class, 'create'])->name('transaksi.create'); 
    Route::post('/', [TransactionController::class, 'store'])->name('transaksi.store'); 
    Route::get('/{id}/edit', [TransactionController::class, 'edit'])->name('transaksi.edit'); 
    Route::put('/{id}', [TransactionController::class, 'update'])->name('transaksi.update'); 
    Route::delete('/{id}', [TransactionController::class, 'destroy'])->name('transaksi.destroy'); 
});

Route::prefix('menu')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('menu.index'); 
    // Route lainnya...
});
