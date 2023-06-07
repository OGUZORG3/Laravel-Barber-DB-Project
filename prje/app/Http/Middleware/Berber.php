<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Berber
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!\Auth::guest() && \Auth::user()->role=='berber')
        {
            return $next($request);

        }
        else {
            return redirect(route('berber.login'))->with('error','Erişim Yetkiniz Yok');
        }

        return redirect(route('berber.login'));
    }
}
