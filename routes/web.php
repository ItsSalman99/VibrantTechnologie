<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
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