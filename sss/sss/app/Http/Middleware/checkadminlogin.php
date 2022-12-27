<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkadminlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // print_r($request->session()->get('userdata'));
        if(empty(session()->get('islogin'))){
            return redirect('/Login');
        }
        else if(!session("islogin")){
            
            return redirect('/Login')->with("danger","Please login first");
        }
        return $next($request);
    }
}
