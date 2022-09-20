<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send-mail');

Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/digital-marketing', [HomeController::class, 'DigitalMarketingService'])->name('digital-marketing');
Route::get('/services/video-production', [HomeController::class, 'VideoProductionService'])->name('video-production');
Route::get('/services/graphics-marketing', [HomeController::class, 'GraphicsService'])->name('graphics-design');
Route::get('/services/ux-design', [HomeController::class, 'UxDesignService'])->name('ux-design');
Route::get('/services/web-design', [HomeController::class, 'WebsiteDesigningService'])->name('web-design');
Route::get('/services/web-development', [HomeController::class, 'WebsiteDevelopmentService'])->name('web-development');
Route::get('/services/app-development', [HomeController::class, 'AppDevelopmentService'])->name('app-development');
Route::get('/services/ecommerce', [HomeController::class, 'eCommerceService'])->name('ecom');
Route::get('/services/seo', [HomeController::class, 'seoService'])->name('seo');

Route::get('/terms-conditions', [HomeController::class, 'termsconditions'])->name('termsconditions');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
