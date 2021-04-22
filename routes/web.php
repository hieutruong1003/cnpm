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
Route::get('TTCN', function () {
	$ttcn = DB::select("SELECT * from thongtinsv where masv = '".session()->get('user')."'");
	$ttcnKH = DB::select("SELECT * from thongtinkhoahoc where masv = '".session()->get('user')."'");
	$ttcnLL = DB::select("SELECT * from thontinlienlac where masv = '".session()->get('user')."'");
    return view('thongtincanhan',['ttcn'=>$ttcn,'ttcnKH'=>$ttcnKH,'ttcnLL'=>$ttcnLL]);
});
Route::get('TKB', function () {
	$tkb1 = DB::select("SELECT * from thoikhoabieu where tuan = 1");
	$tkb2 = DB::select("SELECT * from thoikhoabieu where tuan = 2");
    return view('thoikhoabieu',['tkb1'=>$tkb1,'tkb2'=>$tkb2]);
});
Route::get('XD', function () {
	$diemHK1 = DB::select("SELECT * from xemdiem where hocky = 1");
	$tongdiem1 = DB::select("SELECT SUM(diemso) AS 'tongdiem' FROM xemdiem WHERE hocky = 1");
	$diemHK2 = DB::select("SELECT * from xemdiem where hocky = 2");
	$tongdiem2 = DB::select("SELECT SUM(diemso) FROM xemdiem WHERE hocky = 2");
    return view('xemdiem',['diemHK1'=>$diemHK1,'diemHK2'=>$diemHK2,'tongdiem1'=>$tongdiem1,'tongdiem2'=>$tongdiem2]);
});
Route::get('TKSV', function () {
    return view('taikhoansinhvien');
});
Route::get('XGXN', function () {
    return view('xingiayxacnhan');
});
Route::get('login', function () {
    return view('sign');
});

Route::get('logout', function () {
	session()->flush();
    return view('welcome');
});
Route::post('/','checkLogin@index');