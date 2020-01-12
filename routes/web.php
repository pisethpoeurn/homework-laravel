<?php

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
Route:: get('/action' , function() {
    return view('page.action');
}) -> name ('action');
Route:: get('/about' , function() {
    return view('page.about');
}) -> name('about');
Route:: get('/join' , function() {
    return view('page.join');
})-> name('join');
Route:: get('/news' , function() {
    return view('page.news');
})-> name('news');
Route:: get('/contact' , function() {
    return view('page.contact');
}) -> name('contact');
route :: get("/teacher{'index'}", function($index){
    $teacher = array("Channak", "Ronan", "Seiha","Rady","Rith");
    for($i = 0 ; $i < count($teacher) ; $i++){
        echo $teacher[$i];
    };
    return view('page.student');

});
