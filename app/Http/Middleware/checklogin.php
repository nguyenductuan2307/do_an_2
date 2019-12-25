<?php

namespace App\Http\Middleware;

use Closure;


class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('ma')){
            return $next($request);
        }
        else{
            return redirect()->route('view_login')->with('error','Vui lòng đăng nhập đụ má');
        }
    }
}