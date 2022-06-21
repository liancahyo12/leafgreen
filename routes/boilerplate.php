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
use App\Http\Controllers\PagesController;

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
        Route::get('/pages', [PagesController::class, 'index'])
            ->middleware(['boilerplateauth', 'ability:admin,show_page'])
            ->name('pages');
        Route::get('/create-page', [PagesController::class, 'create'])
            ->middleware(['boilerplateauth', 'ability:admin,create_page'])
            ->name('create-page');
        Route::post('/create-page', [PagesController::class, 'store'])
            ->middleware(['boilerplateauth', 'ability:admin,create_page'])
            ->name('store-page');
        Route::get('/edit-page/{id}', [PagesController::class, 'edit'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_page'])
            ->name('edit-page');
        Route::put('/edit-page/{id}', [PagesController::class, 'update'])
            ->middleware(['boilerplateauth', 'ability:admin,edit_page'])
            ->name('update-page');
        Route::delete('/delete-page/{id}', [PagesController::class, 'destroy'])
            ->middleware(['boilerplateauth', 'ability:admin,delete_page'])
            ->name('delete-page');
    });
});
