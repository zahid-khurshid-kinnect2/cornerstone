<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    $event = DB::table('events')->orderby('created_at','desc')->get();
//        echo '<tt><pre>'; print_r($data); die;

    return view('main',compact('event'));
});

Route::auth();

Route::get('/dashboard', 'HomeController@index');


//About Pages

Route::get('trustees','PagesController@trustees');
Route::get('admissions','PagesController@admissions');
Route::get('mission','PagesController@mission');
Route::get('faculty','PagesController@faculty');
Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');
Route::post('requestForm', 'PagesController@contactForm');

//Discover Pages

Route::get('discover','PagesController@discover');
Route::get('high-school','PagesController@high_school');
Route::get('middle-school','PagesController@middle_school');
Route::get('pre-school','PagesController@pre_school');
Route::get('shadow-teaching','PagesController@shadow_teaching');
Route::get('igcse','PagesController@igcse');
Route::get('photos','PagesController@images');
Route::get('videos','PagesController@videos');



//Facilities
Route::get('science-lab','PagesController@scienceLab');
Route::get('food-nutrition','PagesController@foodNutrition');
Route::get('pool','PagesController@pool');
Route::get('infirmary','PagesController@infirmary');
Route::get('day-care','PagesController@dayCare');
Route::get('indoor-play','PagesController@indoorPlay');
Route::get('student-locker','PagesController@studentLocker');
Route::get('art-room','PagesController@artRoom');
Route::get('cafeteria','PagesController@cafeteria');
Route::get('ict-lab','PagesController@ictLab');
Route::get('gymnasium','PagesController@gymnasium');
Route::get('media-room','PagesController@mediaRoom');
Route::get('library','PagesController@library');
Route::get('transport','PagesController@transport');

Route::get('calendar','PagesController@calendar');




//Connect Pages
Route::get('apply','PagesController@apply');




Route::group(['middleware'=>['auth']],function(){
//Events Route
Route::get('events','EventsController@index');
Route::get('/create/events','EventsController@create');
Route::post('/create/event','EventsController@store');
Route::get('events/edit/{id}','EventsController@edit');
Route::post('events/update/{id}','EventsController@update');
Route::get('events/delete/{id}','EventsController@destroy');



Route::get('video','GalleryController@index');
Route::get('/create/videos','GalleryController@create');
Route::post('/create/videos','GalleryController@store');
Route::get('videos/edit/{id}','GalleryController@edit');
Route::post('videos/update/{id}','GalleryController@update');
Route::get('videos/delete/{id}','GalleryController@destroy');





});
