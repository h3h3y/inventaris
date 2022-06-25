<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure  $next, ...$levels)
    {
        if(!Auth::check()){
            return redirect('login');
        }    

        $user = Auth()->user();

        foreach($levels as $level){
            if($user->level == $level){
                return $next($request);
            }
        }

        return redirect('home');
    }
}
