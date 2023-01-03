<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class providerAuth
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
        if($request->path()=='login' && $request->session()->has('employer'))
        {
            return redirect('providerHome');
        }
        if($request->path()=='seekerHome' && $request->session()->has('employer'))
        {
            return redirect('providerHome');
        }
        if($request->path()=='admin' && $request->session()->has('employer'))
        {
            return redirect('providerHome');
        }
        if($request->path()=='login' && $request->session()->has('companies'))
        {
            return redirect('providerHome');
        }
        if($request->path()=='seekerHome' && $request->session()->has('companies'))
        {
            return redirect('providerHome');
        }
        if($request->path()=='admin' && $request->session()->has('companies'))
        {
            return redirect('providerHome');
        }
        return $next($request);
    }
}
