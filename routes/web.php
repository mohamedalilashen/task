<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PageController::class,'home']);
Route::get('contact-us',[PageController::class,'contact']);
Route::post('contact-us',[PageController::class,'DataContact'])->name('addData');
Route::get('add_post', [PageController::class, 'posts'])->name('post_form');
Route::post('add_post', [PageController::class, 'add_posts'])->name('AddPosts');
Route::get('/edit_page/{id}',[PageController::class,'edit_post'])->name('edit_page');
Route::post('/edit_page/{id}',[PageController::class,'update_post'])->name('update_page');
Route::get('/delete_post/{id}',[PageController::class,'delete_post'])->name('delete');

// Route::get('hello', function () {
//     return "welcome";
// });
// Route::get('user/{id}', function ($id) {
//     return "user id = ".$id ;
// });
// Route::get('product/{id}/{name}', function ($id,$name) {
//     return "name= ".$name .'and id'.$id;
// });
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return "name = " . $name . ' and id = ' . $id;
// })->where('id', '[0-9]+');
// Route::get('/user/{name}?', function ($name="gust") {
//     return "name = " . $name ;
// });

// Route::get('/scool', function () {
//      $name= "mohamed";
//      $age = "23";
//      $city = 'alex';
//      $job = ['php','laravel', 'java' , 'pyton'];
//     return view('hello',['name'=>$name,'age'=>$age,'city'=>$city,'job'=>$job]);
// });
// Route::get('/home', function () {
//     return view('index');
// });
// Route::get('/home', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contant', function () {
//     return view('contact');
// });
// Route::get('/post', function () {
//     return view('post');
// });
// Route::get('/wel', function () {
//     return view('wel');
// });