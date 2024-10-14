<?php

/*use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;*/
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


/*Route::get('/posts', [Controller::class, 'index']);

Route::get('/posts/create', [Controller::class, 'create']);
Route::post('/posts', [Controller::class, 'store']);
Route::get('/posts/{id}/edit', [Controller::class, 'edit']);
Route::put('/posts/{id}', [Controller::class, 'update']);
Route::delete('/posts/{id}', [Controller::class, 'destroy']);


Route::get('/request/create1', [RequestController::class, "create1"])->name('request.create1');
Route::post('/request', [RequestController::class, "store"])->name('request.store');
Route::post('admin/request', [RequestController::class, "store"])->name('admin.request.store');*/



/*Route::get('/h', function () {
    return response('hi')
    ->header('Content-type','json')
    ->cookie('namec');
});*/
/*Route::get('/h', function () {
    //return redirect('ad')->route('test');
    //return back()->withInput();
    //return redirect()->away('http://google.com');
   return redirect()->action([Controller::class,"index"])->with('msg','sesstion-value');
});
Route::get('/ad', function () {
    //return 'hlooo';
    $filename='hh.txt';
    return response()->download($filename);
})->name('test');
/*
Route::get('h/{user}', function ($user) {
    return $user;
});

?>*/
// routes/web.php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageeController;

Route::get('/language', [LanguageeController::class, 'showForm'])->name('language.form');
Route::post('/language', [LanguageeController::class, 'savePreferences'])->name('language.save');


?>
