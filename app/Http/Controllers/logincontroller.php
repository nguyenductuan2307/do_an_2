<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\Model\LoginModel;

class logincontroller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function login()
    {
    	return view('view_login');
    }
    public function process_login(Request $rq)
    {
		$admin           = new LoginModel();
		$admin->email    = $rq->get('email');
		$admin->mat_khau = $rq->get('mat_khau');
		$array           = $admin->get_one();

		if(count($array)==1){
			$rq->session()->put('ma',$array[0]->ma);
			$rq->session()->put('ten',$array[0]->ten);

			return redirect()->route('layer.master');
		}
		else{
			return redirect()->route('view_login')->with('error','Nhập sai rồi');
		}
    }
    public function logout(Request $rq)
    {
    	$rq->session()->flush();
		return redirect()->route('view_login')->with('success','Đăng xuất thành công');
    }
    function menu()
    {
        return view('layer.menu');
    }
}