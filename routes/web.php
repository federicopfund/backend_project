<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
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

/*Route::get('/',function(){
    return view("home.home");
})-> name("dashboard");*/

Route::get("/","DashboardController@dashboard")-> name("dashboard");
/*Route::prefix('dashboard')->group(function(){
   Route::get("/","DashboardController@index");
})*///ruta de tipo recurso:se le especifica un nombre y una ruta de la cual ase uso de un contralador.

Route::resource("About","AboutController");





Route::prefix('About')->group(function(){
    Route::post('search', "AboutController@search")->name("About.search");//
});
