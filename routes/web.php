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
     return view('tasks.task0');
 });
 Route::get('/test1', function () {   
    return view('tasks.task1');   
 });
Route::get('/test2', function () {
    return view('tasks.task2');
});
Route::get('/test3', function () {
    return view('tasks.task3');
});
Route::get('/test4', function () {
    return view('tasks.task4');
});
Route::get('/test5', function () {
    return view('tasks.task5');
});
Route::get('/test6', function () {
    return view('tasks.task6');
});
Route::get('/test7', function () {
    return view('tasks.task7');
});
Route::get('/test8', function () {
    return view('tasks.task8');
});
Route::get('/test9', function () {
    return view('tasks.task9');
});
Route::get('/test10', function () {
    
    $bid_name = DB::table('bids')->orderBy('price', 'desc')->take(1)->get();//->pluck('name')
    
    $caption_none = DB::select( DB::raw("SELECT events.id, events.caption, COUNT(bids.id_event) AS Total FROM events left JOIN bids ON events.id = bids.id_event GROUP BY events.id HAVING COUNT(bids.id_event) = 0") );
  
    $caption_three = DB::select( DB::raw("SELECT events.id, events.caption, COUNT(bids.id_event) AS Total FROM events JOIN bids ON events.id = bids.id_event GROUP BY events.id HAVING COUNT(bids.id_event) > 3") );
    
    $caption_single_most = DB::select( DB::raw("SELECT events.id, events.caption, COUNT(bids.id_event) AS Total FROM events left JOIN bids ON events.id = bids.id_event GROUP BY events.id ORDER BY `Total` DESC LIMIT 1") );

    return  View::make('tasks.task10')->with('bid_name', $bid_name)->with('caption_none', $caption_none)->with('caption_three',$caption_three)->with('caption_most', $caption_single_most);
});

//Route::get('/task10',['uses'=>'TasksController@task10', 'as' => 'tasks.task10'] );

