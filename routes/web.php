<?php

use App\Menu;
// use App\user11;
// use App\user1;
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

Route::get('/services', 'PageController@services');
Route::get('/blog', 'PageController@blog');
Route::get('/', 'PageController@acceuil');


Route::get('/admin', function () {
    $logo = Logo::first();
    $menus = Menu::first();
    
    return view('backoffice.admin',compact('menus','logo'));
})->middleware('isMembre');
Route::get('/contact', 'PageController@contact');
Route::get('/blog-post/{id}', 'PageController@blogpost');

Auth::routes();


Route::get('/profil', 'HomeController@index')->name('home');



// Route::get('/welcome', function () {
//     return view('backoffice2.user1',compact('user1'));
// });

Route::resource('/menu','MenuController');
Route::resource('/logo','LogoController');

Route::resource('/ready','ReadyController');
Route::resource('/contactinfo','ContactController');
Route::resource('/team','TeamController');
Route::resource('/presentation','PresentationController');
Route::resource('/titre','TitreController');
Route::resource('/testimonial','TestimonialController');
Route::resource('/service','ServiceController');
Route::resource('/banner','BannercarController');
Route::resource('/slogan','SloganController');


Route::resource('/serviceprim','ServiceprimController');
Route::resource('/footer','FooterController');
Route::resource('/article','ArticleController');

Route::get('/search', 'HtmlController@search');
Route::resource('/newsletter','NewsletterController');
Route::post('/blog-post/{id}','CommentaireController@store');


