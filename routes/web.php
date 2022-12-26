<?php

use App\Http\Controllers\{
    DashboardController,
    CategoryController,
    CampaignController,
    SettingController,
    UserProfileInformationController,
};
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/donation', function () {
    return view('donation.index');
});

Route::get('/donation/1', function () {
    return view('donation.show');
});
Route::get('/donation/1/create', function () {
    return view('donation.create');
});

Route::group([
    'middleware' => ['auth', 'role:admin,donatur']
], function () {
    // Route::get('/', function () {
    //     return redirect()->route('dashboard');
    // });
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::get('/user/profile', [UserProfileInformationController::class, 'show'])
        ->name('profile.show');
    Route::delete('/user/bank/{id}', [UserProfileInformationController::class, 'bankDestroy'])
    ->name('profile.bank.destroy');

    Route::group([
        'middleware' => 'role:admin'
    ], function () {
        Route::resource('/category', CategoryController::class);
        Route::get('/campaign/data', [CampaignController::class, 'data'])
        ->name('campaign.data');
        
        Route::get('/campaign/detail/{id}', [CampaignController::class, 'detail'])
        ->name('campaign.detail');

        Route::resource('/campaign', CampaignController::class);
        Route::put('/campaign/{id}/update_status', [CampaignController::class, 'updateStatus'])
        ->name('campaign.update_status');

        Route::get('/setting', [SettingController::class, 'index'])
        ->name('setting');
        
        Route::put('/setting/{setting}', [SettingController::class, 'update'])
        ->name('setting.update');
        
        Route::delete('/setting/{setting}/bank/{id}', [SettingController::class, 'bankDestroy'])
        ->name('setting.bank.destroy');
   
    });
    Route::group([
        'middleware' => 'role:donatur'
    ], function () {

    });

});