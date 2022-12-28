<?php

use App\Http\Controllers\{
    DashboardController,
    CategoryController,
    CampaignController,
    ContactController,
    DonationController,
    DonaturController,
    ReportController,
    SettingController,
    SubscriberController,
    UserProfileInformationController,
};
use App\Http\Controllers\Front\{
    AboutController,
    ContactController as FrontContactController,
    DonationController as FrontDonationController,
    FrontController,
    SubscriberController as FrontSubscriberController,
    PaymentController as FrontPaymentController,
    CampaignController as FrontCampaignController,
};

use Illuminate\Support\Facades\Route;



Route::get('/', [FrontController::class, 'index']);
Route::get('/contact', [FrontContactController::class, 'index']);
Route::post('/contact', [FrontContactController::class, 'store']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/donation', [FrontDonationController::class, 'index']);
Route::post('/subscriber', [FrontSubscriberController::class, 'store']);
Route::resource('/campaign', FrontCampaignController::class)->only('index','create','edit');

Route::group([
    'middleware' => ['auth', 'role:admin,donatur'],
    'prefix' => '/donation/{id}'
], function () {
    Route::get('/', [FrontDonationController::class, 'show']);
    Route::get('/create', [FrontDonationController::class, 'create']);
    Route::post('/', [FrontDonationController::class, 'store']);
    Route::get('/payment/{order_number}', [FrontPaymentController::class, 'index']);
    Route::get('/payment-confirmation/{order_number}', [FrontPaymentController::class, 'paymentConfirmation']);
    Route::post('/payment-confirmation/{order_number}', [FrontPaymentController::class, 'store']);
});


Route::group([
    'middleware' => ['auth', 'role:admin,donatur'],
    'prefix' => 'admin'
], function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
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

        Route::put('/campaign/{id}/update_status', [CampaignController::class, 'updateStatus'])
        ->name('campaign.update_status');

        Route::get('/setting', [SettingController::class, 'index'])
        ->name('setting.index');
        
        Route::put('/setting/{setting}', [SettingController::class, 'update'])
        ->name('setting.update');
        
        Route::delete('/setting/{setting}/bank/{id}', [SettingController::class, 'bankDestroy'])
        ->name('setting.bank.destroy');
   
    });

    Route::get('/campaign/data', [CampaignController::class, 'data'])
    ->name('campaign.data');
    Route::resource('/campaign', CampaignController::class);
    Route::put('/campaign/{id}/update_status', [CampaignController::class, 'updateStatus'])
    ->name('campaign.update_status');

    Route::get('/donation/data', [DonationController::class, 'data'])->name('donation.data');
    Route::resource('/donation', DonationController::class);
    
    Route::get('/contact/data', [ContactController::class, 'data'])->name('contact.data');
    Route::resource('/contact', ContactController::class)->only('index', 'destroy');

    Route::group([
        'middleware' => 'role:admin'
    ], function () {

    Route::get('/donatur/data', [DonaturController::class, 'data'])->name('donatur.data');
    Route::resource('/donatur', DonaturController::class);

    Route::get('/subscriber/data', [SubscriberController::class, 'data'])->name('subscriber.data');
    Route::resource('/subscriber', SubscriberController::class)->only('index', 'destroy');

    Route::get('/report/data', [ReportController::class, 'data'])->name('report.data');
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    
    });
});
