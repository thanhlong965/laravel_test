<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Long', ['as'=>'MyRoute',function () {
    echo "Hello World";
}]);
Route::get('HoTen/{ten?}', function ($ten="long123") {
    echo "Ten cua ban la:".$ten;
});
Route::get('Hi',function(){
    return redirect()->route('MyRoute');
});
// ->where(['ten'=>'[a-zA-Z]+']);
Route::group(['prefix'=>'MyGroup'],function(){
    Route::get('User1',function(){
        echo "1";
    });
    Route::get('User2',function(){
        echo "2";
    });
    Route::get('User3',function(){
        echo "3";
    });
    
});
Route::get('goicontroller','MyController@GetURl');
Route::get('getform', function () {
    return view('post');    
});
Route::post('postform',['as'=>'postform','uses'=>'MyController@postform']);
//cookie
Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');
//upload file
Route::get('uploadFile',function(){
    return view('postFile');
});
Route::post('postFile',['as'=>'postFile','uses'=>'MyController@postFile']);
//Json
Route::get('getJson','MyController@getJson');
//view
Route::get('myView','MyController@myView');
//truyen tham so cho view
Route::get('Time/{t}','MyController@Time');
View::share('KhoaHoc','Laravel');
//blade template
Route::get('blade',function(){
    return view('pages.php');
});
Route::get('bladeTemplate/{str}','MyController@blade');
//database
Route::get('database',function(){
    // Schema::create('loaisanpham',function($table){
    //     $table->increments('id');
    //     $table->string('ten',200);
    // });
    Schema::create('theloai',function($table){
        $table->increments('id');
        $table->string('ten',200)->nullable();
        $table->string('nsx')->default('Nha san xuat');
    });
    echo "Da thuc hien tao bang";
});
Route::get('lienketbang',function(){
    Schema::create('sanpham',function($table){
        $table->increments('id');
        $table->string('ten');
        $table->float('gia');
        $table->integer('soluong')->default(0);
        $table->integer('id_loaisanpham')->unsigned();
        $table->foreign('id_loaisanpham')->references('id')->on('loaisanpham');
    });
});
Route::get('doitenbang',function(){
    Schema::rename('theloai','TheLoai1');
    echo "da doi ten bang";
});
Route::get('xoabang',function(){
    Schema::drop('theloai1');
});