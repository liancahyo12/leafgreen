<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'index'])
            ->middleware(['Language'])
            ->name('home');

Route::get('/about/advisor', [HomeController::class, 'advisor'])
            ->middleware(['Language'])
            ->name('advisor');
Route::get('/about/affiliations', [HomeController::class, 'affiliations'])
            ->middleware(['Language'])
            ->name('affiliations');
Route::get('/about/awards', [HomeController::class, 'awards'])
            ->middleware(['Language'])
            ->name('awards');
Route::get('/about/ceo', [HomeController::class, 'ceo'])
            ->middleware(['Language'])
            ->name('ceo');
Route::get('/about/financial', [HomeController::class, 'financial'])
            ->middleware(['Language'])
            ->name('financial');
Route::get('/about/history', [HomeController::class, 'history'])
            ->middleware(['Language'])
            ->name('history');
Route::get('/about/certifications', [HomeController::class, 'certifications'])
            ->middleware(['Language'])
            ->name('certifications');
Route::get('/about/structure', [HomeController::class, 'structure'])
            ->middleware(['Language'])
            ->name('structure');
Route::get('/about/visimisi', [HomeController::class, 'visimisi'])
            ->middleware(['Language'])
            ->name('visimisi');

Route::get('/product', [HomeController::class, 'product'])
            ->middleware(['Language'])
            ->name('product');

Route::get('/project/portfolio', [HomeController::class, 'portfolio'])
            ->middleware(['Language'])
            ->name('portfolio');
Route::get('/project/report', [HomeController::class, 'report'])
            ->middleware(['Language'])
            ->name('report');

Route::get('/csr', [HomeController::class, 'csr'])
            ->middleware(['Language'])
            ->name('csr');

Route::get('/blog', [HomeController::class, 'blog'])
            ->middleware(['Language'])
            ->name('blog');

Route::get('/gcg', [HomeController::class, 'gcg'])
            ->middleware(['Language'])
            ->name('gcg');

Route::get('/media', [HomeController::class, 'media'])
            ->middleware(['Language'])
            ->name('media');

Route::get('/contactus', [HomeController::class, 'contactus'])
            ->middleware(['Language'])
            ->name('contactus');
            
Route::get('/change-language/{lang}', [HomeController::class, 'changeLang'])
            ->middleware(['Language'])
            ->name('lang');