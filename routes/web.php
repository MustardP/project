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


/*Route::get('/', function () {
    return view('hello');
});*/
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/chat',function(){
  $dialog = DB::table('dialog')->get();
  return view('chat',compact('dialog'));
});
Route::post('/textarea.php', function () {

  DB::table('dialog')->insert([
      'username' => Auth::user()->name,
      'message' =>$_POST['text'],
      'created_at' =>Carbon\Carbon::now(),
      'updated_at' =>Carbon\Carbon::now()
  ]);
    return redirect('/chat');
});
/*Route::get('/profilepage', function () {
    return view('hello',[
      'name'=>'Max',
      'image'=>'hello/p.jpg'
    ]);
});
Route::get('/show',[App\Http\Controllers\MainController::class, 'sayHello']);
Route::get('/hell', function () {
    return view('welcome');
});
Route::get('/database', function () {
    $tasks = DB::table('tasks')->get();
    return view('tasks.index',compact('tasks'));
});
Route::get('/database/{task}', function ($id) {
    $task = DB::table('tasks')->find($id);
    return view('tasks.show',compact('task'));
});
*/
