<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompteController;

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

Route::get('/', function () {
    return view('welcome');
});

//inscription
route::get('/inscription','App\Http\Controllers\CompteController@formulaire');
route::post('/inscription', 'App\Http\Controllers\CompteController@inscrit');

//connexion
route::get('/connexion', 'App\Http\Controllers\CompteController@connect');
route::post('/connexion', 'App\Http\Controllers\CompteController@connecter');

//ajout dune photo
Route::get('/ajout', 'App\Http\Controllers\FileUploadController@ajout');
Route::post('/ajouter', 'App\Http\Controllers\FileUploadController@ajouter');

<<<<<<< HEAD

//search
route::get('/search', 'App\Http\Controllers\FileUploadController@search')->name('products.search');


//modifier photo
Route::post('/modifier_photo/{id}' , '\App\Http\Controllers\PhotoController@modifier_photo');
//supprimer photo
Route::delete('/photo/{Id}', 'App\Http\Controllers\PhotoController@supprimer_photo');

=======
>>>>>>> 3c0cdbc408236583527f127b5d06ef3db6849725
//ajout en masse des photo sur cloudinary
route::get('/ajoutmasse', 'App\Http\Controllers\FileUploadController@ajout_en_masse');

//edit photo 
Route::get('/photo/{id}', [
    'as' => 'photos',
    'uses' => '\App\Http\Controllers\PhotoController@photo'
<<<<<<< HEAD
] );
//affichage catalogue de photo
Route::get('/catalogue' , '\App\Http\Controllers\PhotoController@catalogue_photo');
=======
] );
>>>>>>> 3c0cdbc408236583527f127b5d06ef3db6849725
