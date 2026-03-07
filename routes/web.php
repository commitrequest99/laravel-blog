<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\IndexController as AdminMainController;
use App\Http\Controllers\Admin\Category\IndexController as CategoryController;
use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\Category\DeleteController;

use App\Http\Controllers\Admin\Tag\IndexController as TagController;
use App\Http\Controllers\Admin\Tag\CreateController as CreateTagController;
use App\Http\Controllers\Admin\Tag\StoreController as StoreTagController;
use App\Http\Controllers\Admin\Tag\ShowController as ShowTagController;
use App\Http\Controllers\Admin\Tag\EditController as EditTagController;
use App\Http\Controllers\Admin\Tag\UpdateController as UpdateTagController;
use App\Http\Controllers\Admin\Tag\DeleteController as DeleteTagController;

use App\Http\Controllers\Admin\Post\IndexController as PostController;
use App\Http\Controllers\Admin\Post\CreateController as CreatePostController;
use App\Http\Controllers\Admin\Post\StoreController as StorePostController;
use App\Http\Controllers\Admin\Post\ShowController as ShowPostController;
use App\Http\Controllers\Admin\Post\EditController as EditPostController;
use App\Http\Controllers\Admin\Post\UpdateController as UpdatePostController;
use App\Http\Controllers\Admin\Post\DeleteController as DeletePostController;

use App\Http\Controllers\Admin\User\IndexController as UserController;
use App\Http\Controllers\Admin\User\CreateController as CreateUserController;
use App\Http\Controllers\Admin\User\StoreController as StoreUserController;
use App\Http\Controllers\Admin\User\ShowController as ShowUserController;
use App\Http\Controllers\Admin\User\EditController as EditUserController;
use App\Http\Controllers\Admin\User\UpdateController as UpdateUserController;
use App\Http\Controllers\Admin\User\DeleteController as DeleteUserController;



Route::get('/', IndexController::class);

Route::prefix('admin')->group(function() {
    Route::get('/', AdminMainController::class);

    Route::prefix('posts')->group(function () {
        Route::get('/', PostController::class)->name('admin.post.index');
        Route::get('/create', CreatePostController::class)->name('admin.post.create');
        Route::post('/', StorePostController::class)->name('admin.post.store');
        Route::get('/{post}', ShowPostController::class)->name('admin.post.show');
        Route::get('/{post}/edit', EditPostController::class)->name('admin.post.edit');
        Route::patch('/{post}', UpdatePostController::class)->name('admin.post.update');
        Route::delete('/{post}', DeletePostController::class)->name('admin.post.delete');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', CategoryController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::post('/', StoreController::class)->name('admin.category.store');
        Route::get('/{category}', ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', DeleteController::class)->name('admin.category.delete');
    });

    Route::prefix('tags')->group(function () {
        Route::get('/', TagController::class)->name('admin.tag.index');
        Route::get('/create', CreateTagController::class)->name('admin.tag.create');
        Route::post('/', StoreTagController::class)->name('admin.tag.store');
        Route::get('/{tag}', ShowTagController::class)->name('admin.tag.show');
        Route::get('/{tag}/edit', EditTagController::class)->name('admin.tag.edit');
        Route::patch('/{tag}', UpdateTagController::class)->name('admin.tag.update');
        Route::delete('/{tag}', DeleteTagController::class)->name('admin.tag.delete');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', UserController::class)->name('admin.user.index');
        Route::get('/create', CreateUserController::class)->name('admin.user.create');
        Route::post('/', StoreUserController::class)->name('admin.user.store');
        Route::get('/{user}', ShowUserController::class)->name('admin.user.show');
        Route::get('/{user}/edit', EditUserController::class)->name('admin.user.edit');
        Route::patch('/{user}', UpdateUserController::class)->name('admin.user.update');
        Route::delete('/{user}', DeleteUserController::class)->name('admin.user.delete');
    });
});

Auth::routes();