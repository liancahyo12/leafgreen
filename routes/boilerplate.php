<?php

use App\Http\Controllers\Boilerplate\Auth\ForgotPasswordController;
use App\Http\Controllers\Boilerplate\Auth\LoginController;
use App\Http\Controllers\Boilerplate\Auth\RegisterController;
use App\Http\Controllers\Boilerplate\Auth\ResetPasswordController;
use App\Http\Controllers\Boilerplate\DatatablesController;
use App\Http\Controllers\Boilerplate\LanguageController;
use App\Http\Controllers\Boilerplate\Logs\LogViewerController;
use App\Http\Controllers\Boilerplate\Select2Controller;
use App\Http\Controllers\Boilerplate\Users\RolesController;
use App\Http\Controllers\Boilerplate\Users\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\CertificationController;

Route::group([
    'prefix'     => config('boilerplate.app.prefix', ''),
    'domain'     => config('boilerplate.app.domain', ''),
    'middleware' => ['web', 'boilerplate.locale'],
    'as'         => 'boilerplate.',
], function () {
    // Language switch
    Route::get('lang/{lang}', [LanguageController::class, 'switch'])->name('lang.switch');

    // Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Frontend
    Route::group(['middleware' => ['boilerplate.guest']], function () {
        // Login
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login'])->name('login.post');

        // Registration
        Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('register', [RegisterController::class, 'register'])->name('register.post');

        // Password reset
        Route::get('password/request', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.reset.post');

        // First login
        Route::get('connect/{token?}', [UsersController::class, 'firstLogin'])->name('users.firstlogin');
        Route::post('connect/{token?}', [UsersController::class, 'firstLoginPost'])->name('users.firstlogin.post');
    });

    // Email verification
    Route::group(['middleware' => ['boilerplate.auth']], function () {
        Route::get('/email/verify', [RegisterController::class, 'emailVerify'])->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'emailVerifyRequest'])->name('verification.verify');
        Route::post('/email/verification-notification', [RegisterController::class, 'emailSendVerification'])->name('verification.send');
    });

    // Backend
    Route::group(['middleware' => ['boilerplate.auth', 'ability:admin,backend_access', 'boilerplate.emailverified']], function () {
        // Dashboard
        Route::get('/', [config('boilerplate.menu.dashboard'), 'index'])->name('dashboard');

        // Session keep-alive
        Route::post('keep-alive', [UsersController::class, 'keepAlive'])->name('keepalive');

        // Datatables
        Route::post('datatables/{slug}', [DatatablesController::class, 'make'])->name('datatables');

        // Select2
        Route::post('select2', [Select2Controller::class, 'make'])->name('select2');

        // Roles and users
        Route::resource('roles', RolesController::class)->except('show')->middleware(['ability:admin,roles_crud']);
        Route::group(['middleware' => ['ability:admin,users_crud']], function () {
            Route::resource('users', UsersController::class)->except('show');
            Route::any('users/dt', [UsersController::class, 'datatable'])->name('users.datatable');
        });

        // Profile
        Route::get('userprofile', [UsersController::class, 'profile'])->name('user.profile');
        Route::post('userprofile', [UsersController::class, 'profilePost'])->name('user.profile.post');
        Route::post('userprofile/settings', [UsersController::class, 'storeSetting'])->name('settings');
        Route::get('userprofile/avatar/url', [UsersController::class, 'getAvatarUrl'])->name('user.avatar.url');
        Route::post('userprofile/avatar/upload', [UsersController::class, 'avatarUpload'])->name('user.avatar.upload');
        Route::post('userprofile/avatar/gravatar', [UsersController::class, 'getAvatarFromGravatar'])->name('user.avatar.gravatar');
        Route::post('userprofile/avatar/delete', [UsersController::class, 'avatarDelete'])->name('user.avatar.delete');

        // Logs
        if (config('boilerplate.app.logs')) {
            Route::group(['prefix' => 'logs', 'as' => 'logs.', 'middleware' => ['ability:admin,logs']], function () {
                Route::get('/', [LogViewerController::class, 'index'])->name('dashboard');
                Route::group(['prefix' => 'list'], function () {
                    Route::get('/', [LogViewerController::class, 'listLogs'])->name('list');
                    Route::delete('delete', [LogViewerController::class, 'delete'])->name('delete');

                    Route::group(['prefix' => '{date}'], function () {
                        Route::get('/', [LogViewerController::class, 'show'])->name('show');
                        Route::get('download', [LogViewerController::class, 'download'])->name('download');
                        Route::get('{level}', [LogViewerController::class, 'showByLevel'])->name('filter');
                    });
                });
            });
        }

        // Posts
        Route::get('/posts', [PostController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_post'])
            ->name('posts');
        Route::get('/create-post', [PostController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_post'])
            ->name('create-post');
        Route::post('/create-post', [PostController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_post'])
            ->name('store-post');
        Route::get('/edit-post/{id}', [PostController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_post'])
            ->name('edit-post');
        Route::put('/edit-post/{id}', [PostController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_post'])
            ->name('update-post');
        Route::delete('/delete-post/{id}', [PostController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_post'])
            ->name('delete-post');
       
        // Pages
        Route::get('/pages', [PageController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_page'])
            ->name('pages');
        Route::get('/create-page', [PageController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_page'])
            ->name('create-page');
        Route::post('/create-page', [PageController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_page'])
            ->name('store-page');
        Route::get('/edit-page/{id}', [PageController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_page'])
            ->name('edit-page');
        Route::put('/edit-page/{id}', [PageController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_page'])
            ->name('update-page');
        Route::delete('/delete-page/{id}', [PageController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_page'])
            ->name('delete-page');

        // Sosmed
        Route::get('/social', [SosialMediaController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_social'])
            ->name('socials');
        Route::get('/create-social', [SosialMediaController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_social'])
            ->name('create-social');
        Route::post('/create-social', [SosialMediaController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_social'])
            ->name('store-social');
        Route::get('/edit-social/{id}', [SosialMediaController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_social'])
            ->name('edit-social');
        Route::put('/edit-social/{id}', [SosialMediaController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_social'])
            ->name('update-social');
        Route::delete('/delete-social/{id}', [SosialMediaController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_social'])
            ->name('delete-social');

        // Portofolio
        Route::get('/portfolio', [PortfolioController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_portfolio'])
            ->name('portfolios');
        Route::get('/create-portfolio', [PortfolioController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_portfolio'])
            ->name('create-portfolio');
        Route::post('/create-portfolio', [PortfolioController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_portfolio'])
            ->name('store-portfolio');
        Route::get('/edit-portfolio/{id}', [PortfolioController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_portfolio'])
            ->name('edit-portfolio');
        Route::put('/edit-portfolio/{id}', [PortfolioController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_portfolio'])
            ->name('update-portfolio');
        Route::delete('/delete-portfolio/{id}', [PortfolioController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_portfolio'])
            ->name('delete-portfolio');

        // Produk
        Route::get('/product', [ProductController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_product'])
            ->name('products');
        Route::get('/create-product', [ProductController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_product'])
            ->name('create-product');
        Route::post('/create-product', [ProductController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_product'])
            ->name('store-product');
        Route::get('/edit-product/{id}', [ProductController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_product'])
            ->name('edit-product');
        Route::put('/edit-product/{id}', [ProductController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_product'])
            ->name('update-product');
        Route::delete('/delete-product/{id}', [ProductController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_product'])
            ->name('delete-product');
        
        // Clients
        Route::get('/client', [ClientController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_client'])
            ->name('clients');
        Route::get('/create-client', [ClientController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_client'])
            ->name('create-client');
        Route::post('/create-client', [ClientController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_client'])
            ->name('store-client');
        Route::get('/edit-client/{id}', [ClientController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_client'])
            ->name('edit-client');
        Route::put('/edit-client/{id}', [ClientController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_client'])
            ->name('update-client');
        Route::delete('/delete-client/{id}', [ClientController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_client'])
            ->name('delete-client');
        
        // Awards
        Route::get('/award', [AwardController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_award'])
            ->name('awards');
        Route::get('/create-award', [AwardController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_award'])
            ->name('create-award');
        Route::post('/create-award', [AwardController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_award'])
            ->name('store-award');
        Route::get('/edit-award/{id}', [AwardController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_award'])
            ->name('edit-award');
        Route::put('/edit-award/{id}', [AwardController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_award'])
            ->name('update-award');
        Route::delete('/delete-award/{id}', [AwardController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_award'])
            ->name('delete-award');

        // Certification
        Route::get('/certification', [CertificationController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_certification'])
            ->name('certifications');
        Route::get('/create-certification', [CertificationController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_certification'])
            ->name('create-certification');
        Route::post('/create-certification', [CertificationController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_certification'])
            ->name('store-certification');
        Route::get('/edit-certification/{id}', [CertificationController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_certification'])
            ->name('edit-certification');
        Route::put('/edit-certification/{id}', [CertificationController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_certification'])
            ->name('update-certification');
        Route::delete('/delete-certification/{id}', [CertificationController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_certification'])
            ->name('delete-certification');

        // Perusahaan
        Route::get('/company', [CompanyController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_company'])
            ->name('company');
        Route::get('/create-company', [CompanyController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_company'])
            ->name('create-company');
        Route::post('/create-company', [CompanyController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_company'])
            ->name('store-company');
        Route::get('/edit-company', [CompanyController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_company'])
            ->name('edit-company');
        Route::put('/edit-company', [CompanyController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_company'])
            ->name('update-company');
        Route::delete('/delete-company/{id}', [CompanyController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_company'])
            ->name('delete-company');

        // File Manager
        Route::group(['prefix' => 'fileman', 'middleware' => ['ability:admin,fileman']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });
    });
});
