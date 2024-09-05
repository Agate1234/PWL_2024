<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// BASIC ROUTING
// Route::get('/hello', function () {
//  return 'Hello World';
// });

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
 return 'World';
});

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/', [PageController::class,'index']);

Route::get('/', [HomeController::class,'index']);

// Route::get('/about', function () {
//     return 'Nama: Faiz Abiyu Atha Fawas <br> NIM: 2241760068';
// });

// Route::get('/about', [PageController::class,'about']);

Route::get('/about', [AboutController::class,'about']);

// ROUTE PARAMETER
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID: '. $id;
// }); 

// Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

// OPTIONAL PARAMETER
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// ROUTE NAME
// Route::get('/user/profile', function () {
//     //
//    })->name('profile');
//    Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
//    )->name('profile');
//    // Generating URLs...
//    $url = route('profile');
//    // Generating Redirects...
// return redirect()->route('profile');

// Route Group
//     Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
//     });
//    Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
//    });
//    Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//     //
//     });
//    });
//    Route::middleware('auth')->group(function () {
//    Route::get('/user', [UserController::class, 'index']);
//    Route::get('/post', [PostController::class, 'index']);
//    Route::get('/event', [EventController::class, 'index']);
//    });

// Route Prefixes
//     Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });

// Redirect Routes
// Route::redirect('/here', '/there');

// View Routes
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Route Resources
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
   
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Faiz Abiyu Atha Fawas']);
// });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Faiz Abiyu Atha Fawas']);
// });

Route::get('/greeting', [WelcomeController::class,'greeting']);
