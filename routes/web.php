<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController;
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


Route::get('product', function () {


    Schema::create('product', function (Blueprint $table) {
        $table->increments('product_id');
        $table->string('product_name');
        $table->float('product_price');
        $table->integer('quantity');
        $table->string('product_description');
    });
});
Route::get('themcot', function () {
    Schema::table('category', function ($table) {
        $table->string('category_description', 200);
    });
    echo "Đã thêm cột category_description";
});
Route::get('themcotcategoryid', function () {
    Schema::table('product', function ($table) {
        $table->integer('category_id')->unsigned();
        $table->foreign('category_id')->references('category_id')->on('category');
    });
    echo "Đã thêm cột category_id";
});

Route::get('listuser', function () {
    $data = DB::table('users')->get();
    //var_dump($data);
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            # code...
            echo $value . "<br>";
        }
        # code...
    }
});
Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('AA');

    Route::get('create/', [CategoryController::class, 'getCreateCat']);

    Route::post('create/', [CategoryController::class, 'postCreateCat']);

    Route::get('edit/{id}', [CategoryController::class, 'getEditCat']);

    Route::post('edit/{id}', [CategoryController::class, 'postEditCat']);

    Route::get('delete/{id}', [CategoryController::class, 'delete']);
});
