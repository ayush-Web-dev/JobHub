<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminAuth
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
        if($request->path()=='login' && $request->session()->has('admin'))
        {
            return redirect('admin');
        }
        if($request->path()=='seekerHome' && $request->session()->has('admin'))
        {
            return redirect('admin');
        }
        if($request->path()=='providerHome' && $request->session()->has('admin'))
        {
            return redirect('admin');
        }
        if($request->path()=='/' && $request->session()->has('admin'))
        {
            return redirect('admin');
        }
        return $next($request);
    }
}
