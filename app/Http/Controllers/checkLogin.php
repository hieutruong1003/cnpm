<?php
namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class checkLogin extends Controller {
	public function index(Request $rq){
		$ms = $rq->input('Ms');
		$pw = $rq->input('Password');
		
		$users = DB::select('select * from login where masv = ' . $ms .' and pass = '.$pw );
		
		if($users != null){
			session()->put('user', $ms);
			foreach ($users as $key) {
				session()->put('hoten', $key->hoten);
			}
			return view('welcome',['users'=>$users]);
		}
		else{
			return 'nhap sai';
		}

	}
}