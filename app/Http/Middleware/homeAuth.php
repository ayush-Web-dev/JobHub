<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class homeAuth
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

        if(! $request->session()->has('employer') && ! $request->session()->has('companies') && ! $request->session()->has('seeker') && !  $request->session()->has('admin')){
            if($request->path()=='seekerHome')
            {
                return redirect('login');
            }
            if($request->path()=='providerHome')
            {
                return redirect('login');
            }
            if($request->path()=='admin')
            {
                return redirect('login');
            }
            if($request->path()=='logout')
            {
                return redirect('login');
            }
        }
        return $next($request);
    }
}
