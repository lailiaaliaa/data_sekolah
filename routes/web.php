<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TempatController;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Employee;
use App\Models\Tempat;



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
    $jumlahsekolah = Employee::count();
    $jumlahtingkat10 = Employee::where('tingkat','10')->count();
    $jumlahtingkat11 = Employee::where('tingkat','11')->count();
    $jumlahtingkat12 = Employee::where('tingkat','12')->count();






    return view('welcome',compact('jumlahsekolah','jumlahtingkat10','jumlahtingkat11','jumlahtingkat12'));
})->middleware('auth');


//Siswa


Route::get('/Siswa',[EmployeeController::class,'index'])->name('Siswa')->middleware('auth') ;
Route::get('/Tambahdata',[EmployeeController::class,'Tambahdata'])->name('Tambahdata');
Route::post('/insertdata',[EmployeeController::class,'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[EmployeeController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeeController::class,'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[EmployeeController::class,'delete'])->name('delete');


//LOGIN:get('/landing',[loginController::class,'landing'])->name('landing')->middleware('guest');
Route::get('/login',[loginController::class,'login'])->name('login')->middleware('guest');
Route::post('/loginproses',[loginController::class,'loginproses'])->name('loginproses');
Route::get('/register',[loginController::class,'register'])->name('register');
Route::post('/registeruser',[loginController::class,'registeruser'])->name('registeruser');
Route::get('/logout',[loginController::class,'logout'])->name('logout');

//JURUSAN

Route::get('/Guru',[JurusanController::class,'index'])->name('Guru')->middleware('auth') ;
Route::get('/tambahguru',[JurusanController::class,'tambahguru'])->name('tambahguru');
Route::post('/insertdatajurusan', [JurusanController::class, 'insertdatajurusan'])->name('insertdatajurusan');
Route::get('/tampiljurusan/{id}', [JurusanController::class, 'tampiljurusan'])->name('tampiljurusan');
Route::get('/deletejurusan/{id}',[ JurusanController::class, 'destroy'])->name('deletejurusan');

//KELAS

Route::get('/kelas',[KelasController::class,'index'])->name('kelas')->middleware('auth') ;
Route::get('/tambahkelas',[KelasController::class,'tambahkelas'])->name('tambahkelas');
Route::post('/insertkelas',[KelasController::class,'insertkelas'])->name('insertkelas');
Route::get('/tampilkelas/{id}',[KelasController::class,'tampilkelas'])->name('tampilkelas');
Route::post('/updatekelas/{id}',[KelasController::class,'updatekelas'])->name('updatekelas');
Route::get('/deletekelas/{id}',[KelasController::class,'deletekelas'])->name('deletekelas');

//EVENT

Route::get('/Acara',[EventController::class,'index'])->name('Acara')->middleware('auth') ;
Route::get('/tambahacara',[EventController::class,'tambahacara'])->name('tambahacara');
Route::post('/insertacara',[EventController::class,'insertacara'])->name('insertacara');
Route::get('/tampilacara/{id}',[EventController::class,'tampilacara'])->name('tampilacara');
Route::post('/updateacara/{id}',[EventController::class,'updateacara'])->name('updateacara');
Route::get('/deleteacara/{id}',[EventController::class,'deleteacara'])->name('deleteacara');


//RL

Route::get('/datatempat',[TempatController::class,'index'])->name('datatempat')->middleware('auth') ;
Route::get('/tambahtempat',[TempatController::class,'tambahtempat'])->name('tambahtempat');
Route::post('/inserttempat',[TempatController::class,'inserttempat'])->name('inserttempat');
Route::get('/deletetempat/{id}',[TempatController::class,'deletetempat'])->name('deletetempat');

