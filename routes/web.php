<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Voyager\PostController;
use App\Http\Middleware\EnsureUserType;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\ServiceCollection;
use App\Models\Service;
use TCG\Voyager\Facades\Voyager;


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
    return view('index');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::any('/search', function () {
    return view('search.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/jelajahi', function () {
    return view('jelajahi');
});

// <================= WORKER BARU =================>
Route::get('/gabung', [WorkersController::class, 'create'])->middleware('auth')->name('gabung');

Route::post('/gabung', [WorkersController::class, 'store'])->middleware('auth');

Route::get('/gabung/craftsmanship', [WorkersController::class, 'createKeahlian'])->middleware('auth')->name('keahlian');

Route::post('/gabung/craftsmanship', [WorkersController::class, 'storeKeahlian'])->middleware('auth');

Route::get('/gabung/security', [WorkersController::class, 'createKeamanan'])->middleware('auth')->name('keamanan');

Route::post('/gabung/security', [WorkersController::class, 'storeKeamanan'])->middleware('auth');


// <================= JASA BARU =================>
Route::get('/new', [ServicesController::class, 'create'])->middleware(['auth', EnsureUserType::class])->name('new');

Route::post('/new', [ServicesController::class, 'store'])->middleware(['auth']);

Route::get('/new/pricing', [ServicesController::class, 'createPricing'])->middleware(['auth'])->name('new');

Route::post('/new/pricing', [ServicesController::class, 'storePricing'])->middleware(['auth']);

Route::get('/new/description', [ServicesController::class, 'createDesc'])->middleware(['auth'])->name('new');

Route::post('/new/description', [ServicesController::class, 'storeDesc'])->middleware(['auth']);

Route::get('/new/gallery', [ServicesController::class, 'createGallery'])->middleware(['auth'])->name('new');

Route::post('/new/gallery', [ServicesController::class, 'storeGallery'])->middleware(['auth']);

Route::any('/new/done', function () {
    return view('new.done');
});

Route::get('/profil', [PagesController::class, 'profil'])->middleware(['auth']);

Route::get('/pesanan', [PagesController::class, 'pesanan'])->middleware(['auth']);

Route::get('/profil/worker', [PagesController::class, 'profilWorker']);


// <================= PESANAN BARU =================>
Route::get('/order', [OrdersController::class, 'index'])->middleware(['auth']);

Route::post('/order', [OrdersController::class, 'store'])->middleware(['auth']);

Route::get('/order/bayar', [OrdersController::class, 'bayar'])->middleware(['auth']);

Route::post('/order/bayar', [OrdersController::class, 'bayarStore'])->middleware(['auth']);

Route::get('/order/done', [OrdersController::class, 'done'])->middleware(['auth']);

// Route::get('/service', function () {
//     return ServiceResource::collection(Service::all());
// });

Route::get('/services', function () {
    return new ServiceCollection(Service::all());
});

Route::get('/services/{id}', function ($id) {
    return new ServiceResource(Service::findOrFail($id));
});

require __DIR__ . '/auth.php';

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
//     Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
// });

// <================= ADMIN PANEL =================>

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('services/verify', [VerifyController::class, 'verify'])->name('services.verify');
});
