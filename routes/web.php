<?php

use App\Menu;
use App\Logo;
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
Route::get('/services', 'Controller@services');
Route::get('/blog', 'PageController@blog');
Route::get('/', 'PageController@acceuil');
Route::get('/contact', 'PageController@contact');
Route::get('/blog-post/{id}', 'PageController@blogpost');

Auth::routes();


Route::get('/profil', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    
    return view('backoffice.user1',compact('menus'));
});

// Route::get('/welcome', function () {
//     return view('backoffice2.admin',compact('menus','logo'));
// });

Route::resource('/menu','MenuController');
Route::resource('/banner','BannercarController');
Route::resource('/slogan','SloganController');
Route::resource('/logo','LogoController');

Route::resource('/presentation','PresentationController');
Route::resource('/titre','TitreController');
Route::resource('/testimonial','TestimonialController');
Route::resource('/service','ServiceController');

Route::resource('/ready','ReadyController');
Route::resource('/contactinfo','ContactController');
Route::resource('/team','TeamController');

Route::resource('/serviceprim','ServiceprimController');
Route::resource('/footer','FooterController');
Route::resource('/article','ArticleController');

Route::get('/search', 'HtmlController@search');
Route::post('/blog-post/{id}','CommentaireController@store');

// newsletter
Route::resource('/newsletter','NewsletterController');
