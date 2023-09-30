<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'login'     => FALSE,
    'logout'    => FALSE,
    'register'  => FALSE,
    'reset'     => FALSE,
    'verify'    => FALSE,
]);

// Authentication Routes...
Route::get('superuser/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('superuser/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('superuser/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

//if (detail_website()->underMaintenance()){
//    Route::get('/', [\App\Http\Controllers\Core\MainController::class, 'underMaintenance'])->name('home');
//}else{

    Route::get('/', [\App\Http\Controllers\Core\MainController::class, 'index'])->name('home');
    Route::get('/inskill', [\App\Http\Controllers\Core\MainController::class, 'inskill'])->name('inskill');
    Route::get('/odl', [\App\Http\Controllers\Core\MainController::class, 'odl'])->name('odl');
    Route::get('/odlumum', [\App\Http\Controllers\Core\MainController::class, 'odlumum'])->name('odlumum');
    Route::post('/odl/regist', [\App\Http\Controllers\ODLController::class, 'save'])->name('odl.regist');
    Route::get('/exportUndangan', [\App\Http\Controllers\ODLController::class, 'exportUndangan'])->name('odlUndangan.export');
    Route::get('/odlundangan', [\App\Http\Controllers\Core\MainController::class, 'odlundangan'])->name('odlundangan');
    Route::get('/talkshow', [\App\Http\Controllers\Core\MainController::class, 'talkshow'])->name('talkshow');
    Route::get('/instraining', [\App\Http\Controllers\Core\MainController::class, 'instraining'])->name('instraining');
    Route::get('/inspection', [\App\Http\Controllers\Core\MainController::class, 'inspection'])->name('inspection');
    Route::get('/loginuser', [\App\Http\Controllers\Core\MainController::class, 'loginuser'])->name('loginuser');
    Route::get('/registeruser', [\App\Http\Controllers\Core\MainController::class, 'registeruser'])->name('registeruser');
    Route::get('/contact', [\App\Http\Controllers\Core\MainController::class, 'contact'])->name('contact');
    Route::get('/forgetpassword', [\App\Http\Controllers\Core\MainController::class, 'forgetpassword'])->name('forgetpassword');
//}

Route::group(['middleware' => 'auth', 'prefix' => 'superuser', 'as' => 'superuser.'], function () {

    Route::get('beranda', \App\Http\Livewire\Superuser\Dashboard\DashboardIndex::class)->name('dashboard');

    Route::get('slider', \App\Http\Livewire\Superuser\Slider\SliderIndex::class)->name('slider');

    Route::group(['prefix' => 'berita', 'as' => 'blog.'], function () {
        Route::get('/', \App\Http\Livewire\Superuser\Blog\BlogIndex::class)->name('index');
        Route::get('buat', \App\Http\Livewire\Superuser\Blog\BlogContent::class)->name('create');
        Route::get('sunting/{id}', \App\Http\Livewire\Superuser\Blog\BlogContent::class)->name('edit');
        Route::get('komentar', \App\Http\Livewire\Superuser\Blog\BlogComments::class)->name('comments');
    });

    Route::group(['prefix' => 'event', 'as' => 'event.'], function () {
        Route::get('/', \App\Http\Livewire\Superuser\Event\EventIndex::class)->name('index');
        Route::get('buat', \App\Http\Livewire\Superuser\Event\EventContent::class)->name('create');
        Route::get('sunting/{id}', \App\Http\Livewire\Superuser\Event\EventContent::class)->name('edit');
    });

    Route::group(['prefix' => 'subevent', 'as' => 'subevent.'], function () {
        Route::get('/', \App\Http\Livewire\Superuser\Event\SubeventIndex::class)->name('index');
        Route::get('buat', \App\Http\Livewire\Superuser\Event\SubeventContent::class)->name('create');
        Route::get('sunting/{id}', \App\Http\Livewire\Superuser\Event\SubeventContent::class)->name('edit');
    });

    Route::group(['prefix' => 'timeline', 'as' => 'timeline.'], function () {
        Route::get('/', \App\Http\Livewire\Superuser\Event\TimelineIndex::class)->name('index');
        Route::get('buat', \App\Http\Livewire\Superuser\Event\TimelineContent::class)->name('create');
        Route::get('sunting/{id}', \App\Http\Livewire\Superuser\Event\TimelineContent::class)->name('edit');
    });

    Route::group(['prefix' => 'faq', 'as' => 'faq.'], function () {
        Route::get('/', \App\Http\Livewire\Superuser\FAQ\FaqIndex::class)->name('index');
        Route::get('buat', \App\Http\Livewire\Superuser\FAQ\FaqContent::class)->name('create');
        Route::get('sunting/{id}', \App\Http\Livewire\Superuser\FAQ\FaqContent::class)->name('edit');
    });

    Route::group(['prefix' => 'odl_undangan', 'as' => 'odl_undangan.'], function () {
        Route::get('/', \App\Http\Livewire\Superuser\ODL\ODLUndanganIndex::class)->name('index');
    });

    Route::group(['prefix' => 'odl_umum', 'as' => 'odl_umum.'], function () {
        Route::get('/', \App\Http\Livewire\Superuser\ODL\ODLUmumIndex::class)->name('index');
    });

    Route::get('admin', \App\Http\Livewire\Superuser\Admin\AdminIndex::class)->name('admin');

    Route::group(['prefix' => 'statistik', 'as' => 'statistics.'], function () {
        Route::get('/pengunjung', \App\Http\Livewire\Superuser\Statistics\StatisticVisitor::class)->name('visitor');
    });

    Route::get('konfigurasi', \App\Http\Livewire\Superuser\Configuration\ConfigurationIndex::class)->name('configuration');

    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

});
